@extends('layout.app')
@section('content')
    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Daftar Sekarang</h4>
            <p class="text-center">Buat Akun Gratis</p>
            <p class="divider-text">
                <span class="bg-light"> Tijaroh </span>
            </p>
            <form>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                <input name="" class="form-control" placeholder="Nama Depan" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                <input name="" class="form-control" placeholder="Nama Belakang" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                <input name="" class="form-control" placeholder="Nama Lengkap" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                <input name="" class="form-control" placeholder="Alamat Email" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <select class="custom-select" style="max-width: 120px;">
                    <option selected="">+62</option>
                    <option value="1">+972</option>
                    <option value="2">+198</option>
                    <option value="3">+701</option>
                </select>
                <input name="" class="form-control" placeholder="Nomor Telepon" type="text">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select class="form-control">
                    <option selected="" disabled>Tipe Akun</option>
                    <option>Mitra</option>
                    <option>Investor</option>
                </select>
            </div> <!-- form-group end.// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Ulangi password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Buat Akun  </button>
            </div> <!-- form-group// -->
            <p class="text-center">Sudah Punya Akun? <a href="">Masuk</a> </p>
        </form>
        </article>
        </div> <!-- card.// -->

        </div>
        <!--container end.//-->

        <br><br>
@endsection
