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
                <div class="mb-2 col-6">
                    <div class="item border">
                        <div class="row">
                            <div class="col-3"><img class="img-fluid" src="{{ empty($item->image)?'https://image.flaticon.com/icons/svg/906/906175.svg':'http://mysite.tnu.edu.vn/'.$item->image }}" alt="{{ $item->ft_name }}"></div>
                            <div class="col-9">
                                <h5>{{ $item->name }}</h5>
                                <p class="mb-0">{{ $item->hocvi }}</p>
                                <p class="mb-0">{{ $item->chucvu }}</p>
                                <p class="mb-0">{{ $item->diachi }}</p>
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