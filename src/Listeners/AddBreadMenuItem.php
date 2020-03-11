<?php

namespace JMI\Voyager\Listeners;

use JMI\Voyager\Events\BreadAdded;
use JMI\Voyager\Facades\Voyager;
use JMI\Voyager\Models\Menu;
use JMI\Voyager\Models\MenuItem;

class AddBreadMenuItem
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
     * Create a MenuItem for a given BREAD.
     *
     * @param BreadAdded $event
     *
     * @return void
     */
    public function handle(BreadAdded $bread)
    {
        if (config('voyager.bread.add_menu_item') && file_exists(base_path('routes/web.php'))) {
            require base_path('routes/web.php');

            $menu = Menu::where('name', config('voyager.bread.default_menu'))->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => $bread->dataType->display_name_plural,
                'url'     => '',
                'route'   => 'voyager.'.$bread->dataType->slug.'.index',
            ]);

            $order = Voyager::model('MenuItem')->highestOrderMenuItem();

            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => $bread->dataType->icon,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $order,
                ])->save();
            }
        }
    }
}
