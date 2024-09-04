FROM lorisleiva/laravel-docker:8.1
RUN apk add grpc
EXPOSE 8000

WORKDIR /var/www1

COPY .  /var/www1
RUN rm -f composer.lock
RUN composer install
RUN php artisan cache:clear
RUN php artisan config:clear
RUN cp .env.example .env
RUN php artisan key:generate
RUN php artisan storage:link
# Increase PHP's post_max_size and upload_max_filesize
RUN echo "upload_max_filesize=20M" >> /usr/local/etc/php/php.ini
RUN echo "post_max_size=20M" >> /usr/local/etc/php/php.ini
RUN echo "memory_limit=256M" >> /usr/local/etc/php/php.ini

CMD php artisan --host=0.0.0.0 serve
