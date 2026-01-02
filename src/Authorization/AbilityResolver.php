<?php

namespace RabbyteTech\Contracts\Authorization;

interface AbilityResolver
{
    public function allows(?object $actor, string $ability): bool;
}
