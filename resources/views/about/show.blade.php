@extends('layouts.app', ['activePage' => 'about', 'titlePage' => __('Acerca de ')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Ver</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    </div>
                    <br><br>
                    <div class="row mx-1">
                        <div class="form-group col-6">
                            <label for="title" style="left: 15px;">Título</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{ $about->h4 }}" disabled>
                        </div>
                        <div class="form-group col-6">
                            <label for="title" style="left: 15px;">Título en amarillo</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{ $about->span }}" disabled>
                        </div>
                    </div>
                    <br>
                    <div class="form-group mx-3">
                            <label for="subtitle" >Párrafo 1</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="3" disabled>{{ $about->p1 }}</textarea>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle">Párrafo 2</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="3" disabled>{{ $about->p2 }}</textarea>
                        </div>
                        <br>
                    <br>
                    <!-- <div class="form-group">
                        <a href="{{ route('about.show', $about->id) }}" class="btn btn-primary btn-round">Regresar</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
