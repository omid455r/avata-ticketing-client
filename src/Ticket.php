<?php

declare(strict_types=1);

namespace Avata\Ticketing;

final class Ticket extends Manager {

    public int $id;
    public string $user_id;
    public string $title;
    public int $state;
    public int $is_replied;

    public function __construct(array $ticket = []) {
        parent::__construct($this->token);

        foreach (get_class_vars(self::class) as $prop) {
            if (isset($ticket[$prop]))
                $this->{$prop} = $ticket[$prop];
        }
    }
}