<?php

namespace LaravelCrypt;

use LaravelCrypt\Interface\ManagerInterface;

use LaravelCrypt\Crypt;

/**
 * Facadeを経由してstaticにアクセスされるManager
 * 
 * @package LaravelCrypt
 */
class CryptManager implements ManagerInterface
{
    /**
     * Cryptのインスタンスを生成する
     *
     * @return \LaravelCrypt\Crypt
     */
    public function make(): Crypt
    {
        return new Crypt();
    }



    /*----------------------------------------*
     * Encrypt & Decrypt
     *----------------------------------------*/

    /**
     * params をAPP_KEYを用いて暗号化する
     *
     * @param array $params
     * @return string
     */
    public function encryptParams(array $params): string
    {
        return $this->make()->encryptParams($params);
    }

    /**
     * APP_KEYを用いて暗号化された encrypted を復号する
     *
     * @param string $params
     * @return mixed
     */
    public function decryptParams(string $params): mixed
    {
        return $this->make()->decryptParams($params);
    }



    /*----------------------------------------*
     * Hash
     *----------------------------------------*/

    /**
     * text をハッシュ化する
     *
     * @param string $text
     * @return string
     */
    public function makeHash(string $text): string
    {
        return $this->make()->makeHash($text);
    }

    /**
     * ハッシュ化された hashedText と text が一致するか
     *
     * @param string $text
     * @param string $hashedText
     * @return bool
     */
    public function checkHash(string $text, string $hashedText): bool
    {
        return $this->make()->checkHash($text, $hashedText);
    }



    /*----------------------------------------*
     * Expiration Date
     *----------------------------------------*/

    /**
     * 現在時刻から minute 分後の時刻を取得する
     *
     * @param int $minute
     * @return string
     */
    public function expirationDate(int $minute): string
    {
        return $this->make()->expirationDate($minute);
    }
}
