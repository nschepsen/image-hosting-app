## PROJECT ##

* ID: **I**mage!**H**OSTING
* Contact: git@schepsen.eu

## DESCRIPTION ##

**I**mage!**H**OSTING is a simple php-based image hosting script

## NOTICES ##
Enable mod_rewrite and add the following lines to the host configuration file (or .htaccess)
```
<Directory /var/www/eu.schepsen.img/public>
  Options -Indexes +FollowSymLinks -MultiViews
  AllowOverride All
  Require all granted

  RewriteEngine On

  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f

  RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</Directory>
```
## CHANGELOG ##

### Image!HOSTING 1.0, updated @ 2019-01-24 ###

* Initial Release
