<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <a class="navbar-brand logo_h" href="{{ route('publik.home') }}"><img src="assets-publik/img/logo.png"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item {{ route('publik.home') }}"><a class="nav-link" href="{{ route('publik.home') }}">Home</a></li>
                        <li class="nav-item {{ \Route::is('publik.produk') ? 'active' : '' }}"><a class="nav-link" href="{{ route('publik.produk') }}">Produk</a>
                        </li>
                        <li class="nav-item {{ \Route::is('publik.lapangan') ? 'active' : '' }}"><a class="nav-link" href="{{ route('publik.lapangan') }}">Lapangan</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{ route('login') }}" class="genric-btn info circle arrow">login/register<span
                                    class="lnr lnr-arrow-right"></span></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>
