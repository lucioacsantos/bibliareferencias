FROM nginx:alpine

# Ativa compressão gzip para servir JSON, CSS e JS rapidamente
RUN echo 'gzip on; gzip_types text/plain application/json application/javascript text/css;' > /etc/nginx/conf.d/gzip.conf

# Copia o template de configuração com suporte à porta dinâmica ($PORT)
COPY default.conf.template /etc/nginx/templates/default.conf.template

# Define a porta padrão caso o Cloud Run não injete $PORT
ENV PORT=8080

# Copia os arquivos da aplicação
COPY index.html /usr/share/nginx/html/index.html
COPY biblia_livre.json /usr/share/nginx/html/biblia_livre.json

EXPOSE 8080