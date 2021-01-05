@extends('classic.general')

@section('pagetitle', 'Quy chế - Quy định - Trung tâm Đào tạo từ xa - Đại học Thái Nguyên' )

@section('khaigiang2')
  @include('classic.khaigiang')     
@endsection

@section('maincontent')
  <div class="tab">
    <h3 class="tab-header">Quy chế - Quy định</h3>
    <div class="tab-body">
        <div class="content text-justify">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                @foreach ($categories as $item)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link @if($loop->index==0) active @endif" id="cat-{{ $item->id }}-tab" data-toggle="pill" href="#cat-{{ $item->id }}" role="tab" aria-controls="pills-profile" aria-selected="@if($loop->index==0) true @else false @endif">{{ $item->category_details()->first()->name }}</a>
                    </li>    
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
                @foreach ($categories as $item)
                    <div class="tab-pane fade @if($loop->index==0) show active @endif" id="cat-{{ $item->id }}" role="tabpanel" aria-labelledby="pills-home-tab">Danh muc {{ $item->id }}</div>
                @endforeach
            </div>    
        </div>
    </div>
  </div>
@endsection
