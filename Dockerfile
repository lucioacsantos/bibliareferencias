FROM nginx:alpine

# Habilita compressão gzip para servir o biblia_livre.json rapidamente
RUN echo 'gzip on; gzip_types text/plain application/json application/javascript text/css;' > /etc/nginx/conf.d/gzip.conf

# Configuração do Nginx ajustada para o Cloud Run (porta dinâmica $PORT)
COPY <<EOF /etc/nginx/templates/default.conf.template
server {
    listen \${PORT};
    server_name localhost;

    location / {
        root   /usr/share/nginx/html;
        index  index.html;
        try_files \$uri \$uri/ /index.html;
    }

    # Cache para arquivos estáticos
    location ~* \.(json|css|js)$ {
        root /usr/share/nginx/html;
        expires 1d;
        add_header Cache-Control "public, no-transform";
    }
}
EOF

# Define a porta padrão exigida pelo Cloud Run caso $PORT não seja injetada
ENV PORT=8080

# Copia os arquivos da aplicação
COPY index.html /usr/share/nginx/html/index.html
COPY biblia_livre.json /usr/share/nginx/html/biblia_livre.json

EXPOSE 8080