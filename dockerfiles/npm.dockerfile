FROM node:latest

WORKDIR /var/www/laravel

RUN npm install
RUN npm run build