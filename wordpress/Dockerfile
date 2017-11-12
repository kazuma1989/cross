# 公式イメージを使う
# さくらインターネットで使えるバージョンに統一
FROM wordpress:4.8.3-php7.1-apache

# kazuma1989
MAINTAINER kazuma1989 <https://github.com/kazuma1989>

# Install WP-CLI
RUN curl -L https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar -o /usr/local/bin/wp &&\
    chmod +x /usr/local/bin/wp
