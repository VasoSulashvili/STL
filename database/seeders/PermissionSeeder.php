<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    private $permissions = [
        // User
        'view.user',
        'create.user',
        'update.user',
        'delete.user',

        // About Us
        'view.about',
        'create.about',
        'update.about',
        'delete.about',

        // People
        'view.people',
        'create.people',
        'update.people',
        'delete.people',

        // Job
        'view.job',
        'create.job',
        'update.job',
        'delete.job',

        // Contact
        'view.contact',
        'create.contact',
        'update.contact',
        'delete.contact',
    ];

    private $rootPermissions = [
        // Permission
        'view.permission',
        'create.permission',
        'update.permission',
        'delete.permission',

        // Role
        'view.role',
        'create.role',
        'update.role',
        'delete.role',
    ];

    private $roles = [
        'root',
        'admin'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPermissions = array_merge($this->permissions, $this->rootPermissions);
        
        foreach($allPermissions as $permission)
        {
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        }

        foreach($this->roles as $role)
        {
            Role::create(['name' => $role]);
        }
        
        $root = Role::firstOrCreate(['name' => 'root']);

        foreach(Permission::all() as $permission)
        {
            $root->givePermissionTo($permission);
        }
        
        $admin = Role::firstOrCreate(['name' => 'admin']);

        foreach(Permission::whereIn('name', $this->permissions) as $permission)
        {
            $admin->givePermissionTo($permission);
        }
    }
}
