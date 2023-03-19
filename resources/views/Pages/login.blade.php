@extends('Layouts/login')

@section('contenlogin')
<div class="container">
    <div class="row d-flex justify-content-between">
        <div class="col-lg-6 px-5 pt-5 kiri-side">
            <h6 style="color: rgb(117, 116, 116);">Hi,There</h6>
            <h5>Welcome to back our system</h5>
            <form>
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn w-100 mt-3">Login</button>
            </form>
        </div>
        <div class="col-lg-6 kanan-side">
            <img src="image/gambar1.png" alt="">
        </div>
    </div>
    <!-- batas row -->
</div>
<!-- batas container -->
@endsection