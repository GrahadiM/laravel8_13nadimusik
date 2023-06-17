
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-lime elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link bg-gray-dark">
                <img src="
                @if (\Setting::getSetting()->logo == null)
                    {{ Storage::url('public/images/setting/logo_default.png') }}
                @else
                    {{ Storage::url('public/images/setting/'.\Setting::getSetting()->logo) }}
                @endif
                " alt="{{ config('app.name', 'Laravel') }}" class="brand-image elevation-3" style="opacity: .8">
                {{-- <span class="brand-text font-weight-bold">{{ config('app.name', 'Laravel') }}</span> --}}
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('admin/home*') ? 'menu-is-opening menu-open' : ''}}">
                            <a href="#" class="nav-link {{ Request::is('admin/home*') ? 'active' : ''}}">
                                <i class="nav-icon fab fa-buffer"></i>
                                <p>Data Home <i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.home.discover.index') }}" class="nav-link {{ Request::is('admin/home/discover*') ? 'active' : ''}}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>Discover</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.home.new_release.index') }}" class="nav-link {{ Request::is('admin/home/new_release*') ? 'active' : ''}}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>New Release</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.home.our_chanel.index') }}" class="nav-link {{ Request::is('admin/home/our_chanel*') ? 'active' : ''}}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>Our Channel</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.home.browse_all.index') }}" class="nav-link {{ Request::is('admin/home/browse_all*') ? 'active' : ''}}">
                                        <i class="fas fa-angle-right nav-icon"></i>
                                        <p>Browse All</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.artist.index') }}" class="nav-link {{ Request::is('admin/artist*') ? 'active' : ''}}">
                                <i class="nav-icon far fa-address-card"></i>
                                <p>Data Artis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.news.index') }}" class="nav-link {{ Request::is('admin/news*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Data Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.event.index') }}" class="nav-link {{ Request::is('admin/event*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>Data Acara</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.demo.index') }}" class="nav-link {{ Request::is('admin/demo*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-envelope-open-text"></i>
                                <p>Data Demo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.about.index') }}" class="nav-link {{ Request::is('admin/about*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-address-book"></i>
                                <p>Data Tentang Kami</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.career.index') }}" class="nav-link {{ Request::is('admin/career*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>Data Karir</p>
                            </a>
                        </li>
                        @if (auth()->user()->role == 'administrator')
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}" class="nav-link {{ Request::is('admin/user*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.terms_of_service.index') }}" class="nav-link {{ Request::is('admin/terms_of_service*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Persyaratan Layanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.privacy_policy.index') }}" class="nav-link {{ Request::is('admin/privacy_policy*') ? 'active' : ''}}">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>Kebijakan Privasi</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->

            <div class="sidebar-custom">
                @if (Auth::user()->role == "administrator")
                <a href="{{ route('admin.setting.index') }}" class="btn btn-link"><i class="fas fa-cogs"></i></a>
                @endif
                <a href="{{ route('logout') }}" class="btn btn-danger hide-on-collapse pos-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            <!-- /.sidebar-custom -->
        </aside>
