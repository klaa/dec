@extends('classic.general')

@section('pagetitle', 'Trung tâm Đào tạo Từ xa - Đại học Thái Nguyên')

@section('maincontent')
  <div class="tab">
    <h3 class="tab-header">{{ $post->post_details->first()->name }}</h3>
    <div class="tab-body">
        <div class="content text-justify">
            {!! $post->post_details->first()->body !!}
        </div>
    </div>
  </div>
@endsection
