@extends('classic.general')

@section('pagetitle', 'Trung tâm Đào tạo Từ xa - Đại học Thái Nguyên')

@section('slide')
  @include('classic.slide')   
@endsection

@section('khaigiang')
  @include('classic.khaigiang')     
@endsection

@section('maincontent')
  <div class="tab">
    <h3 class="tab-header">Đào tạo</h3>
    <div class="tab-body">
      <!-- Đổ danh sách bài viết -->
      @foreach ($items as $item)
        <div class="row mb-3">
          <div class="col-4 col-md-3">
            <a href="{{ route('daotao',$item->alias) }}"><img src="{{ asset('storage/pexels-photo-1634279-2.jpg') }}" class="img-fluid" title="{{ $item->post_details->first()->name }}" alt="{{ $item->post_details->first()->name }}"></a>
          </div>
          <div class="col-8 col-md-9">
            <h5><a href="{{ route('daotao',$item->alias) }}">{{ $item->post_details->first()->name }}</a></h5>
            <p class="d-none d-md-block">{{ Str::words(strip_tags($item->post_details->first()->body) , 50, '...') }}</p>
            {{-- <p class="d-none d-md-block">{{ $item->category->category_details->first()->name }}</p> --}}
          </div>
        </div>
      @endforeach      
      <!-- Kết thúc danh sach bài viết -->
    </div>
  </div>
@endsection