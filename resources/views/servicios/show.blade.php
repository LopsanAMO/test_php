@extends('layouts.app', ['activePage' => 'teso_inv', 'titlePage' => __('Tesorería e Inversión')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Ver Texto #{{$servicio->id}}</h4>
                </div>
                <div class="card-body">
                        <div class="col-12 text-right">
                            <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-sm btn-primary">Editar</a>
                        </div>
                        <br>
                        <div class="row mx-1">
                          <div class="form-group col-6">
                              <label for="title" style="left: 15px;">Título</label>
                              <input name="title" type="text" class="form-control" id="title" value="{{ $servicio->h4 }}" disabled>
                          </div>
                          <div class="form-group col-6">
                              <label for="title" style="left: 15px;">Título en amarillo</label>
                              <input name="title" type="text" class="form-control" id="title" value="{{ $servicio->span }}" disabled>
                          </div>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle" >Servicio 1</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" disabled>{{ $servicio->service1 }}</textarea>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle">Servicio 2</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" disabled>{{ $servicio->service2 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="subtitle">Servicio 3</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" disabled>{{ $servicio->service3 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="subtitle">Servicio 4</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" disabled>{{ $servicio->service4 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="subtitle">Servicio 5</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="2" disabled>{{ $servicio->service5 }}</textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <a href="{{ route('servicios.index') }}" class="btn btn-primary btn-round">Regresar</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection