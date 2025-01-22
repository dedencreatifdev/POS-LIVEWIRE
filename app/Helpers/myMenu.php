<?php

use App\Models\Menu;

if (! function_exists('convertYmdToMdy')) {
    function getHeader()
    {
        $header = Menu::whereNull('menu_id')
            ->whereNull('submenu_id')
            ->with('relmenu')
            ->with('relsubmenu')
            ->get();
        return $header;
    }

    function getMenu()
    {
        $menus = Menu::whereNotNull('menu_id')
            // ->whereNull('submenu_id')
            // ->with('relmenu')
            ->with('relsubmenu')
            ->get();
        return $menus;
    }


}
