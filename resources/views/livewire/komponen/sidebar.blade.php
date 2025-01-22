<div>
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        <!-- Brand Logo -->
        <a wire:navigate href="{{ route('Dashboard.Index') }}" class="brand-link bg-primary">
            <img src="{{ asset('storage/style') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="pb-3 mt-3 mb-3 user-panel d-flex">
                <div class="image">
                    <img src="{{ asset('storage/style') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">

                    @foreach (getHeader() as $item)
                        <li class="nav-header">{{ $item->nama_menu }}</li>

                        @if ($item->relsubmenu->count())
                            @foreach ($item->relMenu as $menu)
                                <li
                                    class="nav-item {{ request()->routeis('' . explode('.', $menu->route)[0] . '*') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ request()->routeis('' . explode('.', $menu->route)[0] . '*') ? 'active' : '' }}">
                                        <i class="nav-icon fas {{ $menu->icon ?? 'fa-th' }}"></i>
                                        <p>
                                            {{ $menu->nama_menu }}

                                            @if ($menu->relSubMenu->count())
                                                <i class="right fas fa-angle-left"></i>
                                            @endif
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">

                                        @foreach ($menu->relSubMenu as $submenu)
                                            <li class="nav-item">
                                                <a wire:navigate
                                                    {{ $submenu->route == null ? 'href=' . route('Dashboard.Index') . '' : 'href=' . route('' . $submenu->route . '') . '' }}
                                                    class="nav-link {{ request()->routeis('' . $submenu->route . '') ? 'active' : '' }}">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>{{ $submenu->nama_menu }}</p>
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @else
                                <li
                                    class="nav-item {{ request()->routeis('' . explode('.', $menu->route)[0] . '*') ? 'menu-open' : '' }}">
                                    <a wire:navigate
                                        {{ $menu->route == null ? 'href=' . route('Dashboard.Index') . '' : 'href=' . route('' . $menu->route . '') . '' }}
                                        class="nav-link {{ request()->routeis('' . explode('.', $menu->route)[0] . '*') ? 'active' : '' }}">
                                        <i class="nav-icon fas {{ $menu->icon ?? 'fa-th' }}"></i>
                                        <p>
                                            {{ $menu->nama_menu }}
                                        </p>
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </nav>
        </div>
    </aside>
</div>
