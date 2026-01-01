<?php

namespace RabbyteTech\Contracts\Auth;

interface HasPermissions
{
    public function hasPermissionTo(string $permission, $guardName = null): bool;
}
