FROM nginx:alpine

# Habilita compressão gzip para servir o biblia_livre.json rapidamente
RUN echo 'gzip on; gzip_types text/plain application/json application/javascript text/css;' > /etc/nginx/conf.d/gzip.conf

# Configuração do Nginx ajustada para o Cloud Run (porta dinâmica $PORT)
RUN mkdir -p /etc/nginx/templates/
COPY default.conf.template /etc/nginx/templates/default.conf.template

# Define a porta padrão exigida pelo Cloud Run caso $PORT não seja injetada
ENV PORT=8080

# Copia os arquivos da aplicação
COPY index.html /usr/share/nginx/html/index.html
COPY biblia_livre.json /usr/share/nginx/html/biblia_livre.json

EXPOSE 8080