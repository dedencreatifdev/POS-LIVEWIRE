<?php

use App\Models\Menu;

if (! function_exists('convertYmdToMdy')) {
    function getHeader()
    {
        $menus = Menu::whereNull('menu_id')
            ->whereNull('submenu_id')
            ->with('relmenu')
            ->with('relsubmenu')
            ->get();
        return $menus;
    }
}
