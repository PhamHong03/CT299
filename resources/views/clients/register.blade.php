@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="register__title">
                <h2>Rất vui khi bạn muốn đăng ký tài khoản với BookStore </h2>
            <span>Hãy điền đầy đủ thông tin vào đây nhé!</span>
            </div>
        </div>     
        <div class="register__form">
            <form action="" method="POST" class="form">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Họ và tên: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Họ và tên...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address: </label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Số điện thoại: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Số điện thoại...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Địa chỉ: </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Địa chỉ...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mật khẩu: </label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Mật khẩu: ">
                </div>
                <button class="btn btn-primary">
                    <input type="submit" value="Đăng ký">
                </button>
            </form>
        </div>
    </div>    

@endsection