<?php

namespace LaravelCrypt\Interface;

use LaravelCrypt\Interface\CryptInterface;

/**
 * CryptのManagerのInterface
 * 
 * @package LaravelCrypt\Interface
 */
interface ManagerInterface extends CryptInterface
{
    /**
     * Cryptのインスタンスを生成する
     *
     * @return \LaravelCrypt\Interface\CryptInterface
     */
    public function make(): CryptInterface;
}
