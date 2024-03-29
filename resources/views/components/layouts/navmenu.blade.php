<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a class="large_logo" href="index.html"><img src="{{asset('backend/img/logonbbblack.png')}}" alt></a>
        <a class="small_logo" href="index.html"><img src="{{asset('backend/img/mini-logo-nbb.png')}}"  alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">

        <li>
            <a href="{{route('dashboard')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('backend/img/menu-icon/6.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>ໜ້າຫຼັກ </span>
                </div>
            </a>
        </li>
        <li class>
            <a href="invoice.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('backend/img/menu-icon/5.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>ຂໍ້ມູນລູກຄ້າ</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="navs.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('backend/img/menu-icon/20.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>ຂໍ້ມູນໃບມອບ</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="{{route('bill-aon')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('backend/img/menu-icon/20.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>ຂໍ້ມູນໃບຖອນ</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="{{route('bill-aon')}}" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('backend/img/menu-icon/20.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>ຂໍ້ມູນໃບໂອນ</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="invoice.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('backend/img/menu-icon/20.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>ຂໍ້ມູນໃບມອບສິດໂອນເງິນ</span>
                </div>
            </a>
        </li>
        <li class>
            <a href="invoice.html" aria-expanded="false">
                <div class="nav_icon_small">
                    <img src="{{asset('backend/img/menu-icon/11.svg')}}" alt>
                </div>
                <div class="nav_title">
                    <span>ລາຍງານ</span>
                </div>
            </a>
        </li>

    </ul>
</nav>