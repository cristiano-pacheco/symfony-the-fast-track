#!/usr/bin/env bash

source $(dirname $0)/common.sh

:: Set BASE URL Config
warden env exec -T php-fpm bin/magento config:set web/unsecure/base_url ${URL_FRONT}
warden env exec -T php-fpm bin/magento config:set web/secure/base_url ${URL_FRONT}
warden env exec -T php-fpm bin/magento config:set web/unsecure/base_link_url ${URL_FRONT}
warden env exec -T php-fpm bin/magento config:set web/secure/base_link_url ${URL_FRONT}

:: Configure Algolia
warden env exec -T php-fpm bin/magento config:set algoliasearch_credentials/credentials/index_prefix local.magento_store_front

:: Disable SMTP
warden env exec -T php-fpm bin/magento config:set smtp/general/enabled 0

:: Create the warden admin user
warden env exec -T php-fpm bin/magento admin:user:create --admin-user=warden --admin-password=123123q --admin-email=warden@example.com.br --admin-firstname=Cristiano --admin-lastname=Pacheco
