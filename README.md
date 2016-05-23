## Dropbox Filesystem

Extends illuminate/filesystem to support Dropbox. Dropbox was not built to be a CDN, the I/O is slow af, but whatever, go for it, why not?

### Installation

Require it with Composer:

```shell
    composer require laugharn/dbfs
```

Add the Service Provider to the `config/app.php` providers array:

```php
    Laugharn\DropboxFilesystem\DropboxFilesystemServiceProvider::class
```

### Configuration

Before you do any configuration, you need to create an application at developers.dropbox.com. Here you can get your oAuth access token and app name.

After that, add Dropbox to the `config/filesystems.php` disks array:

```php
    'dropbox' => [
        'driver' => 'dropbox',
        'access_token' => 'your-access-token',
        'app_name' => 'your-app-name'
    ],
```

Set `dropbox` as your filesystem driver and you should be good to go.
