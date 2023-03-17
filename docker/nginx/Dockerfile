FROM nginx:alpine

LABEL mantainer="Davson Santos <contato@davtech,com.br>"

# Copy the public directory
COPY ./public/ /app/public/

# Copy the nginx config file
COPY ./docker/nginx/nginx.conf /etc/nginx/conf.d/default.conf
