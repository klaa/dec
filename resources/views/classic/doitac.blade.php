<section id="doitac">
    <div class="container">
        <div class="bg-white p-2 border border-gray rounded dt-wrap">
            <div class="row">
                @foreach ($doitac as $item)
                    <div class="col-2 dt-item dt-item-{{ $loop->iteration }} @if($loop->iteration>6) d-none @else d-block @endif">
                        <div class="doitac-item">
                            <a href="{{ $item->link }}"><img class="img-thumbnail" src="{{ asset($item->image) }}" alt="{{ $item->description }}" title="{{ $item->description }}"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>        
    </div>
</section>
