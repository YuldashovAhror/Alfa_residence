<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
            <span class="logo-sm">
                <img src="/img/logo.svg" alt=""  style="height: 80px">
            </span>
            <span class="logo-lg">
                <img src="/img/logo.svg" alt="" style="height: 70px; margin-top: 10px">
            </span>
        </a>

        {{--<a href="index.html" class="logo logo-light">--}}
            {{--<span class="logo-sm">--}}
                {{--<img src="/img/logo.svg" alt="" height="15">--}}
            {{--</span>--}}
            {{--<span class="logo-lg">--}}
                {{--<img src="/img/logo.svg" alt="" height="15">--}}
            {{--</span>--}}
        {{--</a>--}}
    </div>

    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
        <i class="fa fa-fw fa-bars"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('dashboard')}}">
                        <i class="uil-home-alt"></i>
                        <span>Главная</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('flat')}}">
                        <i class="fa fa-door-open"></i>
                        <span>Квартиры</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('type')}}">
                        <i class="fa fa-door-open"></i>
                        <span>Тип</span>
                    </a>
                </li>

                <li>
                    <a href="/words">
                        <i class="bx bx-globe"></i>
                        <span>Словарь</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>