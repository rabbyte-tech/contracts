<?php

namespace RabbyteTech\Contracts\Packages;

interface PackageRegistry
{
    public function enabled(string $name): bool;
}
