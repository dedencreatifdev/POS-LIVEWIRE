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
                                asa
                            @else
                                asi
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </nav>
        </div>
    </aside>
</div>
