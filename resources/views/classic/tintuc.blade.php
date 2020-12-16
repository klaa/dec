@extends('classic.general')

@section('pagetitle', 'Tin tức - Trung tâm Đào tạo từ xa - ĐHTN' )

@section('maincontent')
    @if ($tinnoibat->count()>0)
    <h3 class="text-uppercase text-primary">Tin nổi bật</h3>
    <div id="tinnoibat" class="carousel slide mb-2" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($tinnoibat as $item)
            <div class="carousel-item @if($loop->index==0) active @endif">
                <a href="{{ route('newsdetail',$item->alias) }}"><img src="{{ asset(empty($item->media->first()->link)?'images/noimage.jpg':$item->media->first()->link) }}" class="d-block w-100" alt="{{ $item->post_details->first()->name }}"></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5><a class="text-white" href="{{ route('newsdetail',$item->alias) }}">{{ $item->post_details->first()->name }}</a></h5>
                    <p>{!! Str::words(strip_tags($item->post_details->first()->body) , 10, '...') !!}</p>
                </div>
            </div>    
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#tinnoibat" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#tinnoibat" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>   
    @endif
    
    <div class="tab">
        <h3 class="tab-header">Tin tức</h3>
        <div class="tab-body">
            <div class="content text-justify">
                <!-- Đổ danh sách bài viết -->
                @foreach ($news as $item)
                <div class="row mb-3">
                    <div class="col-4 col-md-3">
                    <a href="{{ route('newsdetail',$item->alias) }}"><img src="{{ asset(empty($item->media->first()->link)?'images/noimage.jpg':$item->media->first()->link) }}" class="img-fluid" title="{{ $item->post_details->first()->name }}" alt="{{ $item->post_details->first()->name }}"></a>
                    </div>
                    <div class="col-8 col-md-9">
                    <h5><a href="{{ route('newsdetail',$item->alias) }}">{{ $item->post_details->first()->name }}</a></h5>
                    <p class="d-none d-md-block">{!! Str::words(strip_tags($item->post_details->first()->body) , 50, '...') !!}</p>
                    </div>
                </div>
                @endforeach      
                <!-- Kết thúc danh sach bài viết -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $news->onEachSide(1)->links() }}
                </div> 
            </div>
        </div>
    </div>
@endsection