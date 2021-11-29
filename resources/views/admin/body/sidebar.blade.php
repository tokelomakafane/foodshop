<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="index.html" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
            <a href="index.html" class="logo">
                <img src="{{asset('backend/images/logo-lg.png')}}" alt="" class="logo-large">
            </a>
        </div>
    </div>

    <div class="sidebar-inner niceScrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{route('admin')}}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span> Dashboard <span class="badge badge-pill badge-primary float-right">7</span></span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Advanced UI </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="advanced-highlight.html">Highlight</a></li>
                        <li><a href="advanced-rating.html">Rating</a></li>
                        <li><a href="advanced-alertify.html">Alertify</a></li>
                        <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                    </ul>
                </li>

                <li>
                    <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Calendar </span></a>
                </li>

                <li class="menu-title">Components</li>
                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dispatcher<span class="badge badge-pill badge-primary float-right">7</span></span>
                    </a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> Orders</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href=""> view youths</a></li>
                        <li><a href="ui-buttons.html">add youths</a></li>

                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> Drivers</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href=""> view youths</a></li>
                        <li><a href="ui-buttons.html">add youths</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clipboard-outline"></i><span> Users </span> <span class="badge badge-pill badge-info float-right">8</span></a>
                    <ul class="list-unstyled">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-advanced.html">Form Advanced</a></li>
                        <li><a href="form-editors.html">Form Editors</a></li>
                        <li><a href="form-uploads.html">Form File Upload</a></li>
                        <li><a href="form-mask.html">Form Mask</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                        <li><a href="form-xeditable.html">Form Xeditable</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gauge"></i><span>Restaurant</span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('view.restaurant')}}">Restaurant List</a></li>
                        <li><a href="{{route('add.restaurant')}}">Add Restaurant</a></li>
                        <li><a href="charts-chartjs.html">Approved Restaurant</a></li>
                        <li><a href="charts-flot.html">Blocked Restaurant</a></li>
                        <li><a href="charts-c3.html">Un-Approved Restaurant</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-cards-outline"></i> <span> Menu </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('view.menu')}}">Menu list</a></li>
                        <li><a href="{{route('add.menu')}}">add Menu</a></li>

                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-table"></i><span>Product </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{route('view.menuitem')}}">Products List</a></li>
                        <li><a href="{{route('add.menuitem')}}">Add Product</a></li>

                    </ul>
                </li>

                <li class="menu-title">Extra</li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map-marker-multiple"></i><span> Maps </span> <span class="badge badge-pill badge-danger float-right">2</span></a>
                    <ul class="list-unstyled">
                        <li><a href="maps-google.html"> Google Map</a></li>
                        <li><a href="maps-vector.html"> Vector Map</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="pages-login.html">Login</a></li>
                        <li><a href="pages-register.html">Register</a></li>
                        <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                        <li><a href="pages-blank.html">Blank Page</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>
<!-- Left Sidebar End -->
