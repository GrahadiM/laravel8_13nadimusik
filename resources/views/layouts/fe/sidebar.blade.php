
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('frontend.index') }}">
                    <i class="ri-home-fill px-2 py-1 rounded {{ Request::is('/') ? 'bg-icon-sidebar text-white' : 'bg-icon-sidebar2 text-secondary'}}"></i>
                    <span class="text-center text-capitalize {{ Request::is('/') ? '' : 'text-secondary' }}">{{ __('sidebar.home') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('frontend.artist') }}">
                    <i class="ri-group-fill px-2 py-1 rounded {{ Request::is('artist*') ? 'bg-icon-sidebar text-white' : 'bg-icon-sidebar2 text-secondary'}}"></i>
                    <span class="text-center text-capitalize {{ Request::is('artist*') ? '' : 'text-secondary' }}">{{__('sidebar.artist')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('frontend.news') }}">
                    <i class="ri-article-fill px-2 py-1 rounded {{ Request::is('news*') ? 'bg-icon-sidebar text-white' : 'bg-icon-sidebar2 text-secondary'}}"></i>
                    <span class="text-center text-capitalize {{ Request::is('news*') ? '' : 'text-secondary' }}">{{__('sidebar.news')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('frontend.event') }}">
                    <i class="ri-calendar-event-fill px-2 py-1 rounded {{ Request::is('event*') ? 'bg-icon-sidebar text-white' : 'bg-icon-sidebar2 text-secondary'}}"></i>
                    <span class="text-center text-capitalize {{ Request::is('event*') ? '' : 'text-secondary' }}">{{__('sidebar.event')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('frontend.demo') }}">
                    <i class="ri-send-plane-fill px-2 py-1 rounded {{ Request::is('demo*') ? 'bg-icon-sidebar text-white' : 'bg-icon-sidebar2 text-secondary'}}"></i>
                    <span class="text-center text-capitalize {{ Request::is('demo*') ? '' : 'text-secondary' }}">{{__('sidebar.demo')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('frontend.about') }}">
                    <i class="ri-question-fill px-2 py-1 rounded {{ Request::is('about*') ? 'bg-icon-sidebar text-white' : 'bg-icon-sidebar2 text-secondary'}}"></i>
                    <span class="text-center text-capitalize {{ Request::is('about*') ? '' : 'text-secondary' }}">{{__('sidebar.about_us')}}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('frontend.career') }}">
                    <i class="ri-briefcase-4-fill px-2 py-1 rounded {{ Request::is('career*') ? 'bg-icon-sidebar text-white' : 'bg-icon-sidebar2 text-secondary'}}"></i>
                    <span class="text-center text-capitalize {{ Request::is('career*') ? '' : 'text-secondary' }}">{{__('sidebar.careers')}}</span>
                </a>
            </li>

            @include('layouts.fe.sosial')

            @include('layouts.fe.copyright')

        </ul>

    </aside>
