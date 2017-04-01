<header id="nav" class="header header-1">
    @include('partials.header.topbar')
    <div class="header-wrapper ">
        <div class="container">

            <div class="logo-row">
                <!-- LOGO -->
                <div class="logo-container">
                    <a href="{{ url(locale()) }}">
                        <div class="logo effect8">
                            <img src="{!! Theme::url("images/logos/logo-white.png") !!}" class="logo-img" alt="Logo">
                        </div>
                    </a>
                </div>
                <!-- BUTTON -->
                <div class="menu-btn-respons-container">
                    <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".main-menu .navbar-collapse">
                        <span class="text">MENU</span>
                        <span aria-hidden="true" class="icon_menu main-menu-icon"></span>
                    </button>
                </div>

            </div>

        </div><!-- CONTAINER -->

        <div class="main-menu-container">

            <div class="container">
                <!-- MAIN MENU -->
                <div class="main-menu">
                    <div class="navbar navbar-default" role="navigation">

                        <!-- MAIN MENU LIST-->
                        <nav class="collapse collapsing navbar-collapse right">

                            {!! Menu::render('header', Modules\Theme\Presenters\Fidanay\HeaderMenuPresenter::class) !!}

                            <!-- SEARCH READ DOCUMENTATION -->
                            <div id="sb-search" class="search sb-search right hide-respons">

                                <form class="form-search" id="searchForm" action="#" method="get">
                                    <input class="sb-search-input" placeholder="ARAMA YAP..." type="text" value="" name="q" id="q">
                                    <input class="sb-search-submit" type="submit" value="ARAMA YAP">
                                    <span class="sb-icon-search"><span aria-hidden="true" class="icon_search main-menu-icon theme-color"></span></span>
                                </form>

                            </div>

                        </nav>

                    </div>
                </div><!-- main-menu -->

            </div><!-- container -->

        </div><!--main-menu-container -->

    </div><!-- header-wrapper -->
</header>