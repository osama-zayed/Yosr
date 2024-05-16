<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark" style="direction: rtl; text-align: center;">
    <!-- Navbar Brand-->
         <a class="ps-4 text-white" href=""> <i class="fa fa-institution"></i>الصفحة 1</a>
         <a class="ps-4 text-white" href=""> <i class="fa fa-user"></i>الصفحة 2</a>
         <a class="ps-4 text-white" href=""> <i class="fa fa-user"></i>الصفحة 3</a>

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">

        <li class="nav-item dropdown">
            <a class="nav-link  text-white post" id="navbarDropdown" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-hand-o-up" aria-hidden="true"></i>
                الصفحات 4</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="">4.1</a></li>
                <li><a class="dropdown-item" href="">4.2 </a></li>
                <li><a class="dropdown-item" href="">4.3 </a></li>
            </ul>
        </li>

    </ul>

    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">

        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-2 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    تسجيل الخروج
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        <a class="navbar-brand ps-3" href="{{ route('home') }}">Osama</a>

    </ul>
</nav>
