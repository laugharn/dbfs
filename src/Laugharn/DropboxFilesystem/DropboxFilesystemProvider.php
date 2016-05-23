<?php

namespace Laugharn\DropboxFilesystem;

use Dropbox\Client;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Dropbox\DropboxAdapter;
use League\Flysystem\Filesystem;
use Storage;

class DropboxFilesystemServiceProvider extends ServiceProvider
{
    public function boot() {
        Storage::extend('dropbox', function ($app, $config) {
            $client = new Client($config['access_token'], $config['app_name']);
            
			return new Filesystem(new DropboxAdapter($client));
        });
    }

    public function register() {
        //
    }
}
