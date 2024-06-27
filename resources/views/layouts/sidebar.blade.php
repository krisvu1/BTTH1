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
            <a class="c-sidebar-nav-link" href="{{ route('dashboard') }}"
                active="activeClass(Route::is('admin.dashboard'), 'c-active')">
                <i class="c-sidebar-nav-icon cil-speedometer"></i>Dashboard
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route('user.index') }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon cil-speedometer"></i>
                User Management
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('category.index') }}"
                active="activeClass(Route::is('admin.dashboard'), 'c-active')">
                <i class="c-sidebar-nav-icon cil-speedometer"></i>Category Management
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('product.index') }}"
                active="activeClass(Route::is('admin.dashboard'), 'c-active')">
                <i class="c-sidebar-nav-icon cil-speedometer"></i>Product Manegement
            </a>
        </li>
        {{-- <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('') }}"
                active="activeClass(Route::is('admin.dashboard'), 'c-active')">
                <i class="c-sidebar-nav-icon cil-speedometer"></i>Oder Management
            </a>
        </li> --}}
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
        data-class="c-sidebar-minimized"></button>
</div><!--sidebar-->
