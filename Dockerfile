# Gunakan image dasar PHP dengan Apache
FROM php:8.1-apache

# Copy file PHP ke dalam folder web server
COPY index.php /var/www/html/

# Expose port 80 (default Apache)
EXPOSE 80
