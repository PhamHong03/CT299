<header>
    <div class="container">
        <div class="header">
            <div class="header__logo">
                <a href="/" >
                    <span class="header__logo--name">BOOK STORE</span>
                    <i class="header__logo--icon fa-solid fa-house-chimney"></i>
                </a>
            </div>
            <nav class="header__menu">
                <ul class="header__menu--list">

                    {{-- <li class="header__menu--item">
                        <i class="fa-solid fa-bars"></i>
                    </li> --}}
                    <li class="header__menu--item">
                        <a href="/">TRANG CHỦ</a>
                    </li>
                    <li class="header__menu--item">
                        <a href="{{route('products')}}">SẢN PHẨM</a>
                    </li>
                    <li class="header__menu--item">
                        <a href="#">LIÊN HỆ</a>
                    </li>
                </ul>
            </nav>
            <div class="header__right">
                {{-- <div class="header__notification">
                    <i class="fa-solid fa-bell"></i>
                </div> --}}
                <div class="header__cart">
                    <a href=""><i class="header__cart--icon fa-solid fa-cart-shopping"></i></a>
                </div>
                <div class="header__account">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="nav__search">
            <div class="input-group ">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Tìm sản phẩm ..."
                />
                <div class="input-group-append ms-2">
                  <button class="btn btn-outline-none" type="button" >
                    <i class="fa-solid fa-magnifying-glass"></i> Tìm kiếm
                  </button>
                </div>
            </div>
        </div>
    </div>
</header>