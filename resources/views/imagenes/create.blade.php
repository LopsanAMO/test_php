@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Clientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Crear Nueva Imagen</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('clientes.index') }}" class="btn btn-sm btn-primary">Regresar</a>
                    </div>
                    <form action="{{ route('imagenes.store', 1) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <div class="form-group mx-3">
                            <div class="form-group col-10">
                                <label for="name" style="left: 15px;">Nombre del Cliente</label>
                                <input name="name" type="text" class="form-control" id="name" value=" ">
                            </div>
                            <br>
                            <div class="form-group col-10">
                                <label for="text" style="left: 15px;">Tipo de inversión o Actividad realizada</label>
                                <input name="text" type="text" class="form-control" id="text" value=" ">
                            </div>
                            <br>
                            <div class="form-group col-10">
                                <label for="year" style="left: 15px;">Años</label>
                                <input name="year" type="text" class="form-control" id="year" value=" ">
                            </div>
                            <br>
                            <div class="form-group col-10">
                                <label for="money" style="left: 15px;">Monto de dinero</label>
                                <input name="money" type="text" class="form-control" id="money" value=" ">
                            </div>
                            <br>
                            <div class="form-group col-10">
                                <label for="subtitle" >Lista de clientes a donde lo agregará</label> <br>
                                <select name="cliente" class="select_cliente col">
                                    @foreach ($clients as $cliente)
                                        <option class="form-control" value="{{ $cliente->id }}">{{ $cliente->id }} {{ $cliente->h4 }} {{ $cliente->span }} {{ $cliente->h4_2 }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group col-10">
                                <label for="subtitle" >Imágen</label>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput" style="width: 60%">
                                    <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                                    <div>
                                        <label class="btn btn-raised btn-round btn-default btn-file" for="img">Seleccionar imágen:</label>
                                        <input type="file" id="img" name="img">
                                        <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Borrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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