@extends('classic.general')

@section('pagetitle', 'Trung tâm Đào tạo Từ xa - Đại học Thái Nguyên')

@section('slide')
  @if (session('message'))
  <div class="alert alert-success my-2 text-center">
      {{ session('message') }}
  </div>    
  @endif
  @include('classic.news')   
@endsection

@section('thongtinsuutam')
  @include('classic.thongtinsuutam')
@endsection

@section('khaigiang')
  @include('classic.khaigiang')     
@endsection

@section('nganhdaotao')
  @include('classic.nganhdaotao')
@endsection

{{-- @section('introvideo')
      <div class="ratio ratio-16x9">
        <iframe src="https://www.youtube.com/embed/A6LitFDXzUY?controls=0" width="100%"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div> 
@endsection --}}

@section('maincontent')
  <div class="tab">
    <h3 class="tab-header">Đào tạo</h3>
    <div class="tab-body">
      <!-- Đổ danh sách bài viết -->
      @foreach ($items as $item)
        <div class="row mb-3">
          <div class="col-4 col-md-3">
            <a href="{{ route('daotao',$item->alias) }}"><img src="{{ asset(empty($item->media->first()->link)?'images/noimage.jpg':$item->media->first()->link) }}" class="img-fluid" title="{{ $item->post_details->first()->name }}" alt="{{ $item->post_details->first()->name }}"></a>
          </div>
          <div class="col-8 col-md-9">
            <h5><a href="{{ route('daotao',$item->alias) }}">{{ $item->post_details->first()->name }}</a></h5>
            <p class="d-none d-md-block">{!! Str::words(strip_tags($item->post_details->first()->body) , 50, '...') !!}</p>
            {{-- <p class="d-none d-md-block">{{ $item->category->category_details->first()->name }}</p> --}}
          </div>
        </div>
      @endforeach      
      <!-- Kết thúc danh sach bài viết -->
    </div>
  </div>
@endsection