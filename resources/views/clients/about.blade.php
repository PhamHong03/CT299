@extends('layout.app')
@section('content')
    <div class="container">
        <div class="nav__search">
            <input class="nav__search--text" type="text" name="search" placeholder="Search...">                
            <div class="nav__search--icon"><i class=" fa-solid fa-magnifying-glass"></i></div>
        </div>
        <div class="about__content">
            <div class="about__content--left">
                <img src="{{asset('images/w8a6hujx4g3mns3gmz4ju3a63e6gbtrw.jpg')}}" style="height: 70%; width:90%" alt="" class="list--products-img"> 
            </div>
            <div class="about__content--right">
                <div class="list--products-title">Trí tuệ do thái</div>
                <div class="list--products--details">
                    <button class="button--detailes">
                        <div>4,6</div>
                        <div class="list--products-rating">
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                            <span><i class="fa-regular fa-star"></i></span>
                        </div>
                    </button>
                    <button class="button--detailes">
                        <div>32.3k</div>
                        <div>Đánh giá</div>
                    </button>
                    <div class="list--products--saled">
                        <div>99,2k</div>
                        <div>Lượt bán</div>
                    </div>
                    <button class="button--detailes">Tố cáo</button>
                </div>
                
                <div class="list--products-price">Price: 167.000đ</div>
                <div class="list--products-trans">
                    <h3>Vận chuyển</h3>
                    <div class="list--box">
                        
                    </div>
                </div>
                <div class="list--products-description"> Mô Tả trí tuệ người do thái Mô Tả trí tuệ người do thái Mô Tả trí tuệ người do thái Mô Tả trí tuệ người do thái
                    Mô Tả trí tuệ người do thái Mô Tả trí tuệ người do thái Mô Tả trí tuệ người do thái Mô Tả trí tuệ người do thái Mô Tả trí tuệ người do thái Mô Tả trí tuệ người do thái
                </div>
            </div>
        </div>
    </div>
@endsection