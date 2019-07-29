<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Tijaroh">
<title>{{ config('app.name', 'Tijaroh')}}</title>
<!-- Bootstrap core CSS -->
<link href="{{asset('css/app.css')}}" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css?family=Glegoo&display=swap');
    body{
        font-family: 'Glegoo', serif;
    }
</style>
@push('style')
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/daftar.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
@endpush
@push('script')
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
@endpush
