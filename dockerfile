# Usa uma imagem base do PHP com Apache
FROM php:8.2-apache

# Copia todos os arquivos do seu projeto para a pasta do Apache
COPY . /var/www/html/

# Dá permissão de leitura/escrita
RUN chmod -R 755 /var/www/html

# Expõe a porta 80 (onde o Apache roda)
EXPOSE 80

# Inicia o Apache
CMD ["apache2-foreground"]
