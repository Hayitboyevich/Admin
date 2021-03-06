<?php
namespace App\Traits;
use App\Models\Permission;
use App\Models\Role;

trait HasRolesAndPermissions
{
    public function roles()
    {
     return $this->belongsToMany(Role::class, 'users_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'users_permissions');
    }

    public function hasRole($role)
    {
        if($this->roles->contains('slug', $role)){
            return true;
        }
        return false;
    }
}
