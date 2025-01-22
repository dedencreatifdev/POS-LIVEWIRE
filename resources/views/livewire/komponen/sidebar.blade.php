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

                    @foreach (getHeader() as $header)
                        <li class="nav-header">{{ $header->nama_menu }}</li>
                        @foreach ($header->relmenu as $menu)
                            @if ($menu->relsubmenu->count())
                                <li
                                    class="nav-item {{ request()->routeis($menu->nama_menu . '*') ? 'menu-open' : '' }}">
                                    <a href="#"
                                        class="nav-link {{ request()->routeis($menu->nama_menu . '*') ? 'active' : '' }}">
                                        <i class="nav-icon fas  {{ $menu->icon }}"></i>
                                        <p>
                                            {{ $menu->nama_menu }}
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        @foreach ($menu->relsubmenu as $submenu)
                                            <li class="nav-item">
                                                <a wire:navigate href="{{ route($submenu->route) }}"
                                                    class="nav-link  {{ request()->routeis($submenu->route) ? 'active' : '' }}">
                                                    <i class="far fa-circle nav-icon"></i>
                                                    <p>{{ $submenu->nama_menu }}</p>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a wire:navigate href="{{ route($menu->route) ?? '/' }}"
                                        class="nav-link {{ request()->routeis($menu->route) ? 'active' : '' }}">
                                        <i class="nav-icon fas {{ $menu->icon ?? 'fa-th' }}"></i>
                                        <p>
                                            {{ $menu->nama_menu }}
                                            <span class="right badge badge-danger">New</span>
                                        </p>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </nav>
        </div>
    </aside>
</div>
