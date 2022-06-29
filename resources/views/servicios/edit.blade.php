@extends('layouts.app', ['activePage' => 'teso_inv', 'titlePage' => __('Tesorería e Inversión')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Acerca de</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('servicios.show', $services->id) }}" class="btn btn-sm btn-primary">Regresar</a>
                    </div>
                    <form action="{{ route('servicios.update', $services->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <br>
                        <div class="row mx-1">
                          <div class="form-group col-6">
                              <label for="h4" style="left: 15px;">Título</label>
                              <input name="h4" type="text" class="form-control" id="h4" value="{{ $services->h4 }}" required>
                          </div>
                          <div class="form-group col-6">
                              <label for="span" style="left: 15px;">Título en amarillo</label>
                              <input name="span" type="text" class="form-control" id="span" value="{{ $services->span }}">
                          </div>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="service1" >Servicio 1</label>
                            <textarea name="service1" class="form-control" id="service1" rows="2" required>{{ $services->service1 }}</textarea>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="service2">Servicio 2</label>
                            <textarea name="service2" class="form-control" id="service2" rows="2" required>{{ $services->service2 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="service3">Servicio 3</label>
                            <textarea name="service3" class="form-control" id="service3" rows="2" required>{{ $services->service3 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="service4">Servicio 4</label>
                            <textarea name="service4" class="form-control" id="service4" rows="2" required>{{ $services->service4 }}</textarea>
                        </div>
                        <div class="form-group mx-3">
                            <label for="service5">Servicio 5</label>
                            <textarea name="service5" class="form-control" id="service5" rows="2" required>{{ $services->service5 }}</textarea>
                        </div>
                        <br>
                        {{--<div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ asset('storage/'.$services->services) }}" style="width: 60%">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <span class="fileinput-new">Seleccionar imágen</span>
                                    <span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="services" />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>--}}
                        <br>
                        <div class="form-group mr-auto ml-auto">
                            <button type="submit" class="btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection