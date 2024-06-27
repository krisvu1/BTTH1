<header class="c-header c-header-light c-header-fixed">
    <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
        data-class="c-sidebar-show">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <a class="c-header-brand d-lg-none" href="#">
        <svg width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
        </svg>
    </a>

    <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true">
        <i class="c-icon c-icon-lg cil-menu"></i>
    </button>

    <ul class="ml-auto mr-4 c-header-nav">
        <a href="{{ route('cart.index') }}">
            <i class="bi bi-cart-check" style="font-size:26px"></i>
        </a>

        <li class="c-header-nav-item dropdown">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                aria-expanded="false">
                <div class="c-avatar">
                    <img class="c-avatar-img"
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoVki-W_uujCaTvpNM11TDow7Quak0v3sC-4HKViNS4pdPnqUdydTBFn0TQunXiPzQOUM&usqp=CAU"
                        alt="">
                </div>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </a>

            <div class="pt-0 dropdown-menu dropdown-menu-right">
                <div class="py-2 dropdown-header bg-light">
                    <strong>@lang('Account')</strong>
                </div>
                <div class="dropdown-item">
                    <i class="mr-2 c-icon cil-account-logout"></i>@lang('Logout')
                </div>
            </div>
        </li>
    </ul>
</header>
