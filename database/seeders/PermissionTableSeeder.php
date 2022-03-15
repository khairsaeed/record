<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',

           'owner-list',
           'owner-create',
           'owner-edit',
           'owner-delete',

           
           'factory-list',
           'factory-create',
           'factory-edit',
           'factory-delete',

           'record-list',
           'record-create',
           'record-edit',
           'record-delete',
           
           'factoryowner-list',
           'factoryowner-create',
           'factoryowner-edit',
           'factoryowner-delete',

           'activity-list',
           'activity-create',
           'activity-edit',
           'activity-delete',

          

           'activityIndustry-list',
           'activityIndustry-create',
           'activityIndustry-edit',
           'activityIndustry-delete',

           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           
           'primeryMaterial-list',
           'primeryMaterial-create',
           'primeryMaterial-edit',
           'primeryMaterial-delete',
           'reports',
           'seaAllGroups',

        ];
   
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
