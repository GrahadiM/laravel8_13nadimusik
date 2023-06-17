
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <i class="bi bi-list toggle-sidebar-btn"></i>
            <a href="{{ route('frontend.index') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('frontend') }}/assets/images/logo_default.png" alt="">
            </a>
        </div>
        <!-- End Logo -->

        <div class="flex-fill"></div>

        <div class="search-bar ms-auto">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input class="search-bar" type="text" name="query" placeholder="{{__('header.search')}}" title="Enter search keyword" style="background:#3A415A;">
                <button class="search-btn" type="submit" title="Search"><i class="bi bi-search text-secondary"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="ri-search-line"></i>
                    </a>
                </li>
                <!-- End Search Icon-->


                <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    {{-- <span class="d-none d-md-block px-2 text-white">{{ app()->getLocale() == 'id' ? 'Indonesia' : 'English' }}</span> --}}
                    <span class="d-none d-md-block px-2 text-white">{{ app()->getLocale() == 'id' ? __('header.indo') : __('header.ing') }}</span>
                    @if (app()->getLocale() == 'id')
                        <img src="{{ asset('frontend') }}/assets/images/logo-Indonesia-bulat.png" alt="Profile" class="rounded-circle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    @else
                        <img src="{{ asset('frontend') }}/assets/images/logo-uk-bulat.png" alt="Profile" class="rounded-circle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    @endif
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('frontend.switch_language','id')}}">{{__('header.indo')}}</a>
                        <a class="dropdown-item" href="{{route('frontend.switch_language','en')}}">{{__('header.ing')}}</a>
                    </div>
                </a>
                <!-- End Profile Iamge Icon -->

                <!-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                    </li>

                </ul> -->
                <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header>
