@extends('layouts.app', ['activePage' => 'banners', 'titlePage' => __('Banners')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Ver</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="title">Título</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{ $banner->title }}" disabled>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="subtitle">Subtítulo</label>
                        <textarea name="subtitle" class="form-control" id="subtitle" rows="3" disabled>{{ $banner->subtitle }}</textarea>
                    </div>
                    <br>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail img-raised">
                            <img src="{{ asset('storage/'.$banner->banner) }}" style="width: 60%">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="{{ route('banners.index') }}" class="btn btn-primary btn-round">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
