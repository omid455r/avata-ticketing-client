<?php

declare(strict_types=1);

namespace Avata\Ticketing;

class Manager {

    protected const HOST = 'https://ticketing.avata.one/';
    protected const VERSION = '1';
    protected const API = self::HOST . 'api/v' . self::VERSION;
    protected string $token;

    public function __construct(string $token) {
        $this->token = $token;
    }
}