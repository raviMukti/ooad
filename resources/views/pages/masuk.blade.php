@extends('layout.app')
@section('content')
    <div class="card bg-light" style="height: 80vh">
        <article class="card-body mx-auto" style="max-width: 400px; margin-top:8%">
            <h4 class="card-title mt-3 text-center">Masuk</h4>
            <p class="divider-text">
                <span class="bg-light"> Tijaroh </span>
            </p>
            <form>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                <input name="" class="form-control" placeholder="Alamat Email" type="email">
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input class="form-control" placeholder="Password" type="password">
            </div> <!-- form-group// -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Masuk </button>
            </div> <!-- form-group// -->
            <p class="text-center">Lupa Password? <a href=""> Klik Saya</a> </p>
        </form>
        </article>
        </div> <!-- card.// -->

        </div>
        <!--container end.//-->
        <br><br>
@endsection
