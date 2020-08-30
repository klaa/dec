<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet"> --}}
    @stack('styles')

    <title>@yield('pagetitle',"Trung tâm Đào tạo Từ xa - Đại học Thái Nguyên")</title>
    @yield('metatag')
  </head>
  <body>
    
    <div class="sticky-top">
      @include('classic.header')

      @include('classic.navigation')
    </div>

    @yield('slide')

    @yield('khaigiang')

    <section id="maincontent" class="my-2">
      <div class="container">
        <div class="row">
            <div class="col-md-9">
                @yield('maincontent')
            </div>
            <div class="col-md-3">
                @include('classic.sidebar')
            </div>          
        </div>
      </div>
    </section>
    
    @include('classic.doitac')

    @include('classic.footer')

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @stack('scripts')
  </body>
</html>