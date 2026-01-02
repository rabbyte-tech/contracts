<?php

namespace RabbyteTech\Contracts\Events;

use Illuminate\Database\Eloquent\Model;

interface EventDispatcher
{
    /**
     * @param  array<string, mixed>  $payload
     * @param  array{
     *   actor?: Model|array{type?: string, id?: string, name?: string}|string,
     *   actor_type?: string,
     *   actor_id?: string,
     *   actor_name?: string,
     *   request_id?: string,
     *   correlation_id?: string,
     *   causation_id?: string,
     *   schema_version?: string,
     *   meta?: array<string, mixed>
     * }  $context
     * @return array<string, mixed>
     */
    public function dispatch(string $eventName, array $payload = [], array $context = []): array;
}
