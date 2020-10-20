@extends('classic.general')

@section('pagetitle', $post->post_details->first()->name . ' - Trung tâm Đào tạo từ xa - ĐHTN' )

@section('maincontent')
  <div class="tab">
    <h3 class="tab-header">{{ $post->post_details->first()->name }}</h3>
    <div class="tab-body">
        <div class="content text-justify">
            {!! $post->post_details->first()->body !!}
        </div>
        @if ($post->attachments->count()>0)
        <h4>Đính kèm:</h4>
        <div class="content text-justify">
          @foreach ($post->attachments as $item)
            <div class="row item">
              <div class="col-12">
                <a href="{{ $item->link }}" alt="{{ $item->name}}" title="{{ $item->name }}">{{ $item->name }}</a>  
              </div>  
            </div>      
          @endforeach
        </div>
        @endif
    </div>
  </div>
@endsection
