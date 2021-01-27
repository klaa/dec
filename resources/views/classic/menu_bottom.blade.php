<section id="menubottom" class="d-none d-md-flex bg-primary hovernav mt-2">
    <div class="container">
        <ul class="nav">
            <li class="nav-item dropup">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.bacongkhai') }}</a>
                <ul class="dropdown-menu bg-md-primary">
                    <li><a href="{{ route('bck','co-so-vat-chat') }}" class="dropdown-item">{{ __('menu.cosovatchat') }}</a></li>
                    <li><a href="{{ route('staff') }}" class="dropdown-item">{{ __('menu.doingucanbo') }}</a></li>
                    <li class="dropright">
                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">{{ __('menu.doingugiaovien') }}</a>
                        <ul class="dropdown-menu bg-md-primary">
                            <li><a href="{{ route('bck','giao-vien-giang-day') }}" class="dropdown-item">{{ __('menu.gvgiangday') }}</a></li>    
                            <li><a href="{{ route('bck','chuyen-gia-huong-dan') }}" class="dropdown-item">{{ __('menu.chuyengiahd') }}</a></li>    
                        </ul>
                    </li>
                </ul>
                {{-- <ul class="dropdown-menu bg-md-primary">
                    <li class="dropright">
                        <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">{{ __('menu.chatluonggiaoduc') }}</a>
                        <ul class="dropdown-menu bg-md-primary">
                            <li><a href="#" class="dropdown-item">{{ __('menu.camketclgd') }}</a></li>
                            <li class="dropright">
                                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.clgdthucte') }}</a>
                                <ul class="dropdown-menu bg-md-primary">
                                    <li><a href="#" class="dropdown-item">{{ __('menu.clgdthucte') }}</a></li>
                                    <li><a href="#" class="dropdown-item">{{ __('menu.khungctvadecuong') }}</a></li>
                                    <li><a href="#" class="dropdown-item">{{ __('menu.danhmucgttailieu') }}</a></li>
                                    <li><a href="#" class="dropdown-item">{{ __('menu.chitieuts') }}</a></li>
                                    <li><a href="#" class="dropdown-item">{{ __('menu.kiemdinh') }}</a></li>
                                    <li><a href="#" class="dropdown-item">{{ __('menu.hdcapphatvb') }}</a></li>
                                    <li><a href="#" class="dropdown-item">{{ __('menu.hdlkdaotao') }}</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropright">
                        <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.dieukiendambaoclgd') }}</a>
                        <ul class="dropdown-menu bg-md-primary">
                            <li><a href="{{ route('bck','co-so-vat-chat') }}" class="dropdown-item">{{ __('menu.cosovatchat') }}</a></li>
                            <li><a href="{{ route('staff') }}" class="dropdown-item">{{ __('menu.doingucanbo') }}</a></li>
                            <li><a href="#" class="dropdown-item">{{ __('menu.chuandaura') }}</a></li>
                            <li><a href="#" class="dropdown-item">{{ __('menu.lylichkhgv') }}</a></li>
                            <li><a href="#" class="dropdown-item">{{ __('menu.daotaoboiduong') }}</a></li>
                        </ul>
                    </li>
                    <li class="dropright">
                        <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ __('menu.thuchitaichinh') }}</a>
                        <ul class="dropdown-menu bg-md-primary">
                            <li><a href="#" class="dropdown-item">{{ __('menu.cktccsgd') }}</a></li>
                            <li><a href="#" class="dropdown-item">{{ __('menu.cshocbong') }}</a></li>
                        </ul>
                    </li>
                </ul> --}}
            </li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">{{ __('menu.lienhe') }}</a></li>
            <li class="nav-item"><a href="#" class="nav-link">{{ __('menu.tienich') }}</a></li>
        </ul>
    </div>
</section>