<div class="top_panel_fixed_wrap"></div>
<header class="top_panel_wrap">
    <div class="menu_main_wrap logo_left menu_show">
        <div class="container">
            <div class="logo">
                <a href="index.html">
                    <img src="{{ asset('images/icon/157x54.png') }}" class="logo_main" alt="">
                    <span class="logo_info"></span>
                </a>
            </div>
            <div class="menu_main">
                <nav class="menu_main_nav_area">
                    <ul id="menu_main" class="menu_main_nav">
                        <li
                            class="menu-item {{ request()->segment(2) == '' ? 'current-menu-item current-menu-parent' : '' }}">
                            <a href="{{ route('home') }}" class="sf-with-ul">Home</a>
                        <li
                            class="menu-item {{ request()->routeIs('our_services') ? 'current-menu-item current-menu-parent' : '' }}">
                            <a href="{{ route('our_services') }}">Our services</a>
                        </li>
                        <li
                            class="menu-item {{ request()->segment(2) == 'about' ? 'current-menu-item current-menu-parent' : '' }}">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li
                            class="menu-item {{ request()->segment(2) == 'blog' ? 'current-menu-item current-menu-parent' : '' }}">
                            <a href="{{ route('blog') }}" class="sf-with-ul">Blog</a>
                        </li>
                        <li
                            class="menu-item {{ request()->segment(2) == 'contact-us' ? 'current-menu-item current-menu-parent' : '' }}">
                            <a href="{{ route('contactUs') }}">Contact</a>
                        </li>
                        <li
                            class="menu-item {{ request()->segment(2) == 'request-a-quote' ? 'current-menu-item current-menu-parent' : '' }}">
                            <a href="{{ route('requestQuote') }}">Request A Quote</a>
                        </li>
                        @auth
                            <li class="menu-item">
                                <a href="{{ route('dashboard') }}" >Dashboard</a>
                            </li>
                        @else
                            <li class="menu-item">
                                <a href="{{ route('login') }}" >Login</a>
                            </li>

                        @endauth

                        </li>
                    </ul>
                </nav>
                <a href="#" class="menu_main_responsive_button icon-menu"></a>
                <div class="search_wrap search_style_regular search_state_closed search_ajax">
                    <div class="search_form_wrap">
                        <form method="get" class="search_form" action="index.html">
                            <button type="submit" class="search_submit icon-search" title="Open search"></button>
                            <input type="text" class="search_field" placeholder="Search" value=""
                                name="s" title="Search">
                        </form>
                    </div>
                    <div class="search_results widget_area">
                        <a class="search_results_close icon-cancel"></a>
                        <div class="search_results_content"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
