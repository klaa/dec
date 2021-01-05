<section id="mainnav" class="hovernav bg-primary">
  <div class="container">
    <div class="d-flex d-md-flex">
      <div class="mobilenavbtn">
        <button class="d-md-none btn rounded-0 btn-white p-1"><img class="navicon" src="{{ asset('images/menu.png') }}" alt="Menu đại học trực tuyến"></button>
      </div>        
      <ul class="nav d-none d-md-flex bg-primary">
        <li class="nav-item d-md-none">
          <div class="d-flex closewrap p-1">
            <div class="closemenu"><img src="{{ asset('images/close.png') }}" alt="Dong menu" class="img-fluid"></div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}">{{ __('menu.trangchu') }}</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.gioithieu') }}</a>
          <ul class="dropdown-menu bg-md-primary">
            <li><a class="dropdown-item" href="{{ route('gioithieu','tong-quan') }}">{{ __('menu.tongquan') }}</a></li>
            <li><a class="dropdown-item" href="{{ route('gioithieu','chuc-nang-nhiem-vu') }}">{{ __('menu.chucnangnhiemvu') }}</a></li>
            <li><a class="dropdown-item" href="{{ route('gioithieu','so-do-to-chuc') }}">{{ __('menu.sodotochuc') }}</a></li>
            <li><a class="dropdown-item" href="{{ route('gioithieu','ban-giam-doc') }}">{{ __('menu.bangiamdoc') }}</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('news') }}">{{ __('menu.tintuc') }}</a>
        </li>
        <li><a class="nav-link" href="{{ route('regulations') }}" class="dropdown-item">{{ __('menu.quychequidinh') }}</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="/daotao" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.daotao') }}</a>
          <ul class="dropdown-menu bg-md-primary">
            <li><a class="dropdown-item" href="{{ route('daotao','chuong-trinh-dao-tao') }}">{{ __('menu.chuongtrinhdaotao') }}</a></li>
            <li><a class="dropdown-item" href="#">{{ __('menu.kehoachdaotao') }}</a></li>
            <li class="dropright">
              <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.lichhocthi') }}</a>
              <ul class="dropdown-menu bg-md-primary">
                <li><a href="{{ route('daotao','ke-hoach-thi-ha-noi') }}" class="dropdown-item">{{ __('menu.kehoachthihn') }}</a></li>
                <li><a href="{{ route('daotao','ke-hoach-hoc-tap-tai-ha-noi') }}" class="dropdown-item">{{ __('menu.kehoachhochn') }}</a></li>
                <li><a href="#" class="dropdown-item">{{ __('menu.kehoachthihcm') }}</a></li>
                <li><a href="{{ route('daotao','ke-hoach-hoc-tap-tai-ho-chi-minh') }}" class="dropdown-item">{{ __('menu.kehoachhochcm') }}</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.tuyensinh') }}</a>
          <ul class="dropdown-menu bg-md-primary">
            <li><a href="#" class="dropdown-item">{{ __('menu.thongbaotuyensinh') }}</a></li>
            <li><a href="#" class="dropdown-item">{{ __('menu.lichkhaigiang') }}</a></li>
            <li><a href="#" class="dropdown-item">{{ __('menu.tuvantuyensinh') }}</a></li>
            <li><a class="dropdown-item" href="{{ route('tuyensinh','huong-dan-hoc-vien') }}">{{ __('menu.huongdanhocvien') }}</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.tracuudiem') }}</a>
          <ul class="dropdown-menu bg-md-primary">
            <li><a href="{{ route('daotao','diem-thi-ha-noi') }}" class="dropdown-item">{{ __('menu.diemthihn') }}</a></li>
            <li><a href="#" class="dropdown-item">{{ __('menu.diemthihcm') }}</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.hocviencanbiet') }}</a>
          <ul class="dropdown-menu bg-md-primary">
            <li><a href="{{ route('hvcb','cac-mau-don') }}" class="dropdown-item">{{ __('menu.cacmaudon') }}</a></li>
            <li><a href="{{ route('hvcb','cau-hoi-thuong-gap') }}" class="dropdown-item">{{ __('menu.cauhoithuonggap') }}</a></li>
          </ul>
        </li>
        
      </ul>
      <div class="searchform ml-auto mr-1">
        <form action="{{ route('search') }}" method="POST">
          @csrf
          <div class="input-group input-group-sm mt-1">
            <input type="text" placeholder="Tim kiem" name="searchkey" class="form-control">
            <div class="input-group-append">
              <button type="submit" class="btn btn-outline-secondary bg-white"><img src="{{ asset('images/search.png') }}" alt="Tim kiem"></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>