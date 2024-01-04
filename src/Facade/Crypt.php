<?php

namespace LaravelCrypt\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * CryptのFacade
 * CryptManagerのMethodをstaticに呼び出せるようにする
 * 
 * @package LaravelCrypt\Facade
 * 
 * @method static \LaravelCrypt\Interface\CryptInterface make()
 * 
 * @method static string encryptParams(array $params)
 * @method static mixed decryptParams(string $params)
 * @method static string makeHash(string $text)
 * @method static bool checkHash(string $text, string $hashedText)
 * @method static string expirationDate(int $minute)
 * 
 * @see \LaravelCrypt\Interface\ManagerInterface
 */
class Crypt extends Facade
{
    /** 
     * CryptManagerにアクセスするためのFacadeの名前を取得する
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }
}
