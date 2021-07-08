FROM zedsh/php7.1-fpm

RUN mkdir -p /var/run/mysqld
RUN mkdir -p /run/php

ARG APP_ENV='prod'
ARG APP_ENV=${APP_ENV}
ENV APP_ENV ${APP_ENV}

ARG USER_ID='1000'
ARG USER_ID=${USER_ID}
ENV USER_ID ${USER_ID}

ARG GROUP_ID='1000'
ARG GROUP_ID=${GROUP_ID}
ENV GROUP_ID ${GROUP_ID}

ARG PROJECT_PREFIX='web'
ARG PROJECT_PREFIX=${PROJECT_PREFIX}
ENV PROJECT_PREFIX=${PROJECT_PREFIX}




RUN echo `test ${APP_ENV} '=' 'local' &&  echo "${APP_ENV} php-xdebug on" || echo "${APP_ENV} php-xdebug off"`

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    php7.1-memcached \
    php7.1-memcache \
    php7.1-mysql \
    php-xdebug \
    php7.1-intl \
    php7.1-interbase \
    php7.1-gd \
    php7.1-imagick \
    php7.1-zip \
    php7.1-mcrypt \
    bash \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*



ADD ./conf/php.ini /etc/php/7.1/fpm/php.ini
ADD ./conf/php.ini /etc/php/7.1/cli/php.ini
ADD ./conf/www.conf /etc/php/7.1/fpm/pool.d/www.conf
RUN sed -i -e "s/www-data:x:33:33:www-data:\/var\/www:\/usr\/sbin\/nologin/www-data:x:${USER_ID}:${GROUP_ID}:www-data:\/var\/www\/html:\/bin\/bash/g" /etc/passwd
RUN sed -i -e "s/www-data:x:33:/www-data:x:${GROUP_ID}:/g" /etc/group
RUN rm -f /etc/php/7.1/fpm/pool.d/z-overrides.conf
RUN cd /bin && curl --silent --show-error https://getcomposer.org/installer | php && mv composer.phar composer && chmod 777 composer
WORKDIR /var/www/html
EXPOSE 9000

