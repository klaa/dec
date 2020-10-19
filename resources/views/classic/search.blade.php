@extends('classic.general')

@section('pagetitle', 'Tìm kiếm '.$keyword)

@section('khaigiang')
  @include('classic.khaigiang')     
@endsection

@section('maincontent')
<div class="tab">
    <h3 class="tab-header">Kết quả tìm kiếm cho {{ $keyword }}</h3>
    <div class="tab-body">
        @foreach ($items as $item)
            <div class="item border-bottom mb-2">
                <div class="row">
                    <div class="col-3"><img class="img-fluid" src="{{ empty($item->media->first()->link)?'https://image.flaticon.com/icons/svg/2990/2990729.svg':asset($item->media->first()->link) }}" alt="{{ $item->post_details->first()->name }}"></div>
                    <div class="col-9">
                        <h4>{{ $item->post_details->first()->name }}</h4>
                        <p>{!! Str::words(strip_tags($item->post_details->first()->body), 50, '...') !!}</p>
                    </div>
                </div>    
            </div>    
        @endforeach
        {{ $items->links() }}
    </div>
</div>
@endsection