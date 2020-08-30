@extends('admin.dashboard')

@section('pagetitle',__('admin.partner_create'))

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-control').on('focus',function() {
                $(this).removeClass('is-invalid');
            });
            $('#button-image').click(function(event) {
                event.preventDefault();
                window.open('/file-manager/fm-button', '{{ __("admin.media_manager") }}', 'width=800,height=600,menubar=0,scrollbars=0,resizable=0,location=0,toolbar=0,titlebar=0');
            });    
        });
        function fmSetLink($url) {
            var link = $url.replace('{{ config("app.url") }}/','');
            document.getElementById('mediaAdd').value = link;
            // $('#mediaList').prepend('<div class="col-3 mb-2"><img src="'+$url+'" class="img-fluid" /><input type="hidden" name="medialist[]" value="'+link+'"><button type="button" class="deleteMedia btn btn-sm btn-danger mt-1 btn-block"><i class="fas fa-trash"></i> {{ __("admin.delete") }}</button>  </div>');            
        }
    </script>
@endpush

@section('pageheading')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{ __('admin.partner_management') }}</h1>
</div>    
@endsection

@section('content')
<form action="{{ route('admin.partners.store') }}" method="POST">
    @csrf
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{ __('admin.partner_create') }}</h6>
        </div>
        <div class="card-body">                
            <div class="form-row">
                <div class="form-group col">
                    <label for="formLink">{{ __('admin.link') }}</label>
                    <input type="text" name="link" value="{{ old('link') }}" class="form-control @error('link') is-invalid @enderror" id="formLink" aria-describedby="nameHelp" required autofocus>
                    {{-- <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="formImage">{{ __('admin.image') }}</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span id="button-image" class="btn btn-info">{{ __('admin.media_add') }}</span>
                        </div>
                        <input type="text" id="mediaAdd" class="form-control" name="image" aria-label="Image" aria-describedby="button-image">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="formAlias">{{ __('admin.description') }}</label>
                    <input type="text" name="description" value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror" id="formAlias" aria-describedby="aliasHelp">
                    {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                </div>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label for="itemPublished">{{ __('admin.published') }}</label>
                    <div class="form-control border-0 px-0">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="published" id="publishYes" value="1" checked>
                            <label class="form-check-label" for="publishYes">{{ __('admin.yes') }}</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="published" id="publishNo" value="0">
                            <label class="form-check-label" for="publishNo">{{ __('admin.no') }}</label>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label for="itemOrdering">{{ __('admin.ordering') }}</label>
                    <input type="number" name="ordering" id="itemOrdering" class="form-control" value="{{ old('ordering')?old('ordering'):0 }}">
                </div>
            </div>                        
        </div>
        <div class="card-footer">
            <button name="task" value="save" type="submit" class="btn btn-success"><i class="far fa-save text-white-50"></i> {{ __('admin.save') }}</button>
            <button name="task" value="saveandexit" type="submit" class="btn btn-success"><i class="fas fa-file-export text-white-50"></i> {{ __('admin.saveandexit') }}</button>
            <a href="{{ route('admin.partners.index') }}" class="btn btn-warning"><i class="far fa-window-close text-white-50"></i> {{ __('admin.cancel') }}</a>
        </div>
    </div>
</form>
@endsection