@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Editar Clientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Ver Cliente # {{ $client->id }}</h4>
                </div>
                <div class="card-body">
                        <br>
                        <div class="row mx-1">
                          <div class="form-group col-3">
                              <label for="h4" style="left: 15px;">Título</label>
                              <input name="h4" type="text" class="form-control" id="h4" value="{{ $client->h4 }}" disabled>
                          </div>
                          <div class="form-group col-4">
                              <label for="span" style="left: 15px;">texto en amarillo</label>
                              <input name="span" type="text" class="form-control" id="span" value="{{ $client->span }}" disabled>
                          </div>
                          <div class="form-group col-5">
                              <label for="h4_2" style="left: 15px;"></label>
                              <input name="h4_2" type="text" class="form-control" id="h4_2" value="{{ $client->h4_2 }}" disabled>
                          </div>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="subtitle" >Imágenes</label>
                            <div style="display:flex; flex-wrap:wrap;justify-content: center;align-items: center;">
                                @foreach ($client->images as $image)
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 25%">
                                            <img src="{{ asset('storage/'.$image->image) }}" style="width: 70%">
                                        <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group mr-auto ml-auto">
                            <a href="{{ route('clientes.edit', $client->id ) }}" type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-round">Editar</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
