FROM zedsh/php7.1

ARG APP_ENV='prod'
ARG APP_ENV=${APP_ENV}
ENV APP_ENV ${APP_ENV}

ARG USER_ID='1000'
ARG USER_ID=${USER_ID}
ENV USER_ID ${USER_ID}

ARG GROUP_ID='1000'
ARG GROUP_ID=${GROUP_ID}
ENV GROUP_ID ${GROUP_ID}

RUN apk --no-cache add shadow
RUN groupmod -g $USER_ID www-data
RUN usermod -u $USER_ID www-data
RUN usermod -s /bin/bash www-data

COPY ./conf/www.conf /usr/local/etc/php-fpm.d/www.conf
COPY ./conf/php.ini /usr/local/etc/php/php.ini
RUN apk update && apk upgrade && apk add bash
RUN echo "ENV_PATH PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin" >> /etc/login.defs
RUN cd /bin && curl --silent --show-error https://getcomposer.org/installer | php && mv composer.phar composer && chmod 777 composer
EXPOSE 9000
CMD ["php-fpm"]
