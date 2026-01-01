<?php

namespace RabbyteTech\Contracts\Events;

use Illuminate\Database\Eloquent\Model;

interface EventDispatcher
{
    /**
     * @param  array<string, mixed>  $payload
     * @param  array{
     *   actor?: Model,
     *   target?: Model,
     *   request_id?: string,
     *   correlation_id?: string,
     *   source?: string,
     *   meta?: array<string, mixed>
     * }  $context
     * @return array<string, mixed>
     */
    public function dispatch(string $eventName, array $payload = [], array $context = []): array;
}
