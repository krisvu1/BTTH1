<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoreUI</title>
    @stack('before-styles')
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
    @stack('after-styles')
</head>

<body class="c-app">

    // Sidebar
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
        <div class="c-sidebar-brand d-lg-down-none">
            <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
            </svg>
            <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="{{ asset('img/brand/coreui.svg#signet') }}"></use>
            </svg>
        </div><!--c-sidebar-brand-->

        <ul class="c-sidebar-nav">
            <li class="c-sidebar-nav-item">
                <a
                    class="c-sidebar-nav-link"
                    href="route('admin.dashboard')"
                    active="activeClass(Route::is('admin.dashboard'), 'c-active')"
                >
                <i class="c-sidebar-nav-icon cil-speedometer"></i>@lang('Dashboard')
                </a>
            </li>
        </ul>
        <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div><!--sidebar-->

    // Header
    <div class="c-wrapper c-fixed-components">
        <header class="c-header c-header-light c-header-fixed">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                <i class="c-icon c-icon-lg cil-menu"></i>
            </button>

            <a class="c-header-brand d-lg-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="{{ asset('img/brand/coreui.svg#full') }}"></use>
                </svg>
            </a>

            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                <i class="c-icon c-icon-lg cil-menu"></i>
            </button>

            <ul class="c-header-nav ml-auto mr-4">
                <li class="c-header-nav-item dropdown">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar">
                            <img class="c-avatar-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoVki-W_uujCaTvpNM11TDow7Quak0v3sC-4HKViNS4pdPnqUdydTBFn0TQunXiPzQOUM&usqp=CAU" alt="">
                        </div>
                        <div class="ml-1">
                            <span>Admin</span>
                        </div>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <strong>@lang('Account')</strong>
                        </div>
                        <div class="dropdown-item">
                            <i class="c-icon mr-2 cil-account-logout"></i>@lang('Logout')
                        </div>
                    </div>
                </li>
            </ul>
        </header>

        // Main Content
        <div class="c-body">
            <main class="c-main">
                <div class="container-fluid">
                    <div class="fade-in">
                        <div class="card">
                            <div class="card-header">
                                @lang('Dashboard')
                            </div>
                        </div>
                    </div><!--fade-in-->
                </div><!--container-fluid-->
            </main>
        </div><!--c-body-->

        //Footer
        <footer class="c-footer">
            <div>
                <strong>
                    @lang('Copyright') &copy; {{ date('Y') }}
                    <a href="http://laravel-boilerplate.com" target="_blank">@lang('Admin')</a>
                </strong>

                @lang('All Rights Reserved')
            </div>

            <div class="mfs-auto">
                @lang('Powered by')
                <a href="http://laravel-boilerplate.com" target="_blank">Admin</a> &
                <a href="https://coreui.io" target="_blank">CoreUI</a>
            </div>
        </footer>

    </div><!--c-wrapper-->
    @stack('before-scripts')
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    @stack('after-scripts')
</body>

</html>