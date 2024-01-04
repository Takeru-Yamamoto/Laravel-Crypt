<?php

namespace LaravelCrypt;

use Illuminate\Support\ServiceProvider as Provider;

use LaravelCrypt\LaravelCryptManager;
use LaravelCrypt\Facade\Crypt;

/**
 * ServiceProvider
 * Facadeの登録を行う
 * 
 * @package LaravelCrypt
 */
class ServiceProvider extends Provider
{
    /**
     * アプリケーションの起動時に実行する
     * FacadeとManagerの紐づけを行う
     * 
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Crypt::class, function () {
            return new LaravelCryptManager();
        });
    }
}
