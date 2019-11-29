# ppi_preview

To install this module, please:

```
cd /path/to/your/drupal-or-thunder/root/directory # e.g. /var/www/thunder
composer require ppimedia/ppi_preview:0.1
drush en ppi_preview
```

It is mandatory to enable the following modules:
```
drush en jsonapi # + configure (Accept all JSON:API create, read, update, and delete operations)
```

It is highly recommended to use and enable the following modules:
```
composer require drupal/save_edit
drush en save_edit # + configure (enable Node Type Article in Thunder)

drush en basic_auth
```

Please contact us.
