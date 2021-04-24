
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-inner">
        <!-- LOGO -->
        <div class="topbar-left"style="width: auto;">
            <a href="/index" class="logo">
                <span>
                    <img src="{{URL::to('/')}}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                </span>
                <span>
                    <img src="{{URL::to('/')}}/assets/images/logo-sm.png" alt="logo-large" class="logo-lg logo-light">
                </span>
            </a>
        </div>
        <!--end logo-->
        @yield('search')
    </div>
</div>
<!-- Top Bar End -->
