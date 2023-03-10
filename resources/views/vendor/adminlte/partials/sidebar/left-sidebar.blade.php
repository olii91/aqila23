<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu">

                @if(\Auth::user())
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pengaduan.create')}}">
                        <i class="far fa-fw fa-user"></i>
                            <p>Halaman Pengaduan</p>
                        </a>
                    </li>

                @if(\Auth::user()->level=='admin' or \Auth::user()->level=='petugas')
                <li class="nav-header">PETUGAS</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('pengaduan.index')}}">
                        <i class="far fa-fw fa-user"></i>
                        <p>Pengaduan</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('tanggapan.index')}}">
                        <i class="far fa-fw fa-user"></i>
                        <p>Halaman Tanggapan</p>
                    </a>
                </li>
                
                @if(\Auth::user()->level=='admin')
                <li class="nav-header">MENU
                <li class="nav-item">
                    <a class="nav-link" href="{{route('user.index')}}">
                        <i class="far fa-fw fa-user"></i>
                            <p>User</p>
                        </a>
                    </li>
                @elseif(\Auth::user()->level=='admin')
                @else
                @endif
                @endif
                @endif

            </ul>
        </nav>
    </div>

</aside>
