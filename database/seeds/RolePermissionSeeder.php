<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create role
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleUser = Role::create(['name' => 'user']);



        //permission List as array
        $permissions =[
            //Dashboard view
            'dashboard.view',
            //blog permission
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',
             //admin permission
             'admin.create',
             'admin.view',
             'admin.edit',
             'admin.delete',
             'admin.approve',

            //Role permission
            'role.create',
            'role.view',
            'role.edit',
            'role.delete',
            'role.approve',

            //profile permission
            'profile.view',
            'profile.edit',
        ];


        // create and assign permissions
        // Permission::create(['name' => 'dashboard.view']);
        for ($i = 0; $i < count($permissions); $i++){
            //create permission
            $permission = Permission::create(['name' => $permissions[$i]]);
            $roleSuperAdmin->givePermissionTo($permission);
            $permission->assignRole($roleSuperAdmin);

        }

    }
}
