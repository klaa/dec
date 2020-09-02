@extends('classic.general')

@section('pagetitle', 'Đội ngũ cán bộ')

@section('khaigiang')
  @include('classic.khaigiang')     
@endsection

@section('maincontent')
<div class="tab">
    <h3 class="tab-header">Đội ngũ cán bộ</h3>
    <div class="tab-body">
        <div class="row">
            @foreach ($items as $item)
                <div class="mb-2 col-md-6">
                    <div class="item border">
                        <div class="row">
                            <div class="col-3"><a class="text-primary" target="_blank" href="http://mysite.tnu.edu.vn/vi/{{ $item->alias }}"><img class="img-fluid" src="{{ empty($item->image)?'https://image.flaticon.com/icons/svg/906/906175.svg':'http://mysite.tnu.edu.vn/'.$item->image }}" alt="{{ $item->name }}"></a></div>
                            <div class="col-9">
                                <h5 class="mb-0"><a class="text-primary" target="_blank" href="http://mysite.tnu.edu.vn/vi/{{ $item->alias }}">{{ $item->name }}</a></h5>
                                @if ($item->hocvi)
                                    <p class="mb-0">Học vị: {{ $item->hocvi }}</p>
                                @endif
                                
                                @if ($item->chucvu)
                                    <p class="mb-0">Chức vụ: {{ $item->chucvu }}</p>
                                @endif

                                @if ($item->tel)
                                    <p class="mb-0">Điện thoại: {{ $item->tel }}</p>
                                @endif

                                @if ($item->diachi)
                                    <p class="mb-0">Địa chỉ: {{ $item->diachi }}</p>
                                @endif
                            </div>
                        </div>
                    </div>    
                </div>    
            @endforeach
        </div>
        {{ $items->links() }}
    </div>
</div>
@endsection