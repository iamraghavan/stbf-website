<div>
    <header class="header-two header--sticky">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-wrapper">
                            <div class="left">
                                <div class="call">
                                    <i class="fa-light fa-mobile"></i>
                                    <a href="#">(+91) 86089 05570</a>
                                </div>
                                <div class="call">
                                    <i class="fa-solid fa-envelope"></i>
                                    <a href="#">info@example.com</a>
                                </div>
                            </div>
                            <div class="right">
                                <div class="social-header">
                                    <span>Follow Us On:</span>
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-two-main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-two-wrapper">
                            <a href="{{ route('index') }}" class="logo-area">
                                <img src="{{ asset('/assets/r_files/logo-1.webp') }}" alt="logo">
                            </a>
                            <div class="nav-area">
                                <ul>
                                    @foreach ($navItems as $item)
                                        <li class="main-nav {{ !empty($item['children']) ? 'has-dropdown' : '' }}">
                                            <a href="{{ route($item['route']) }}">{{ $item['name'] }}</a>
                                            @if (!empty($item['children']))
                                                <ul class="submenu parent-nav">
                                                    @foreach ($item['children'] as $child)
                                                        <li>
                                                            <a href="{{ route($child['route']) }}">{{ $child['name'] }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="header-end">
                                <a href="#" class="rts-btn btn-primary">Request A Quote</a>
                                <div class="nav-btn menu-btn">
                                    <img src="{{ asset('assets/images/logo/bar.svg') }}" alt="nav-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="side-bar" class="side-bar header-two">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    @foreach ($navItems as $item)
                        <li class="{{ !empty($item['children']) ? 'has-droupdown' : '' }}">
                            <a href="{{ route($item['route']) }}" class="main">{{ $item['name'] }}</a>
                            @if (!empty($item['children']))
                                <ul class="submenu mm-collapse">
                                    @foreach ($item['children'] as $child)
                                        <li>
                                            <a href="{{ route($child['route']) }}">{{ $child['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </nav>
            <div class="social-wrapper-one">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
