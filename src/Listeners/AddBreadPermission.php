<?php

namespace JMI\Voyager\Listeners;

use JMI\Voyager\Events\BreadAdded;
use JMI\Voyager\Facades\Voyager;
use JMI\Voyager\Models\Permission;
use JMI\Voyager\Models\Role;

class AddBreadPermission
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Create Permission for a given BREAD.
     *
     * @param BreadAdded $event
     *
     * @return void
     */
    public function handle(BreadAdded $bread)
    {
        if (config('voyager.bread.add_permission') && file_exists(base_path('routes/web.php'))) {
            // Create permission
            //
            // Permission::generateFor(snake_case($bread->dataType->slug));
            $role = Role::where('name', config('voyager.bread.default_role'))->firstOrFail();

            // Get permission for added table
            $permissions = Permission::where(['table_name' => $bread->dataType->name])->get()->pluck('id')->all();

            // Assign permission to admin
            $role->permissions()->attach($permissions);
        }
    }
}
