<?php

declare(strict_types=1);

namespace Avata\Ticketing;

final class Ticketing {

    public const HOST = 'https://ticketing.avata.one/';
    public const VERSION = '1';
    public const API = self::HOST . 'api/v' . self::VERSION;

    protected string $token;
    protected bool $cache = false;

    public function __construct(string $token) {
        $this->token = $token;
    }
}