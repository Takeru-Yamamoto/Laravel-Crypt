<?php

namespace LaravelCrypt\Interface;

/**
 * CryptのInterface
 * 
 * @package LaravelCrypt\Interface
 */
interface CryptInterface
{
    /*----------------------------------------*
     * Encrypt & Decrypt
     *----------------------------------------*/

    /**
     * params をAPP_KEYを用いて暗号化する
     *
     * @param array $params
     * @return string
     */
    public function encryptParams(array $params): string;

    /**
     * APP_KEYを用いて暗号化された encrypted を復号する
     *
     * @param string $params
     * @return mixed
     */
    public function decryptParams(string $params): mixed;



    /*----------------------------------------*
     * Hash
     *----------------------------------------*/

    /**
     * text をハッシュ化する
     *
     * @param string $text
     * @return string
     */
    public function makeHash(string $text): string;

    /**
     * ハッシュ化された hashedText と text が一致するか
     *
     * @param string $text
     * @param string $hashedText
     * @return bool
     */
    public function checkHash(string $text, string $hashedText): bool;



    /*----------------------------------------*
     * Expiration Date
     *----------------------------------------*/

    /**
     * 現在時刻から minute 分後の時刻を取得する
     *
     * @param int $minute
     * @return string
     */
    public function expirationDate(int $minute): string;
}
