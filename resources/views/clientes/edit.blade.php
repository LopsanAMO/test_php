@extends('layouts.app', ['activePage' => 'clientes', 'titlePage' => __('Editar Clientes')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Cliente # {{ $client->id }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('clientes.update', $client->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <br>
                        <div class="row mx-1">
                            <div class="form-group col-3">
                                <label for="h4" style="left: 15px;">Título</label>
                                <input name="h4" type="text" class="form-control" id="h4" value="{{ $client->h4 }}" required>
                            </div>
                            <div class="form-group col-4">
                                <label for="span" style="left: 15px;">texto en amarillo</label>
                                <input name="span" type="text" class="form-control" id="span" value="{{ $client->span }}">
                            </div>
                            <div class="form-group col-5">
                                <label for="h4_2" style="left: 15px;"></label>
                                <input name="h4_2" type="text" class="form-control" id="h4_2" value="{{ $client->h4_2 }}">
                            </div>
                        </div>
                        <div class="form-group mr-auto ml-auto">
                            <button type="submit" class="btn btn-primary btn-round">Actualizar valores</button>
                        </div>
                        <br>
                    </form>
                    <div class="form-group mx-3">
                        <div class="row">
                            <div class="col-md-10">
                                <label for="subtitle" >Imágenes</label>
                            </div>
                            <div class="col-md-2"><a href="{{ route('imagenes.create', $client->id ) }}" class="btn btn-success btn-round  ">Nueva imagen</a></div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th style="width:4%" class="text-center">
                                    ID
                                </th>
                                <th style="width:30%" class="text-center">
                                    Imagen
                                </th>
                                <th style="width:20%" class="text-center">
                                    Imagen
                                </th>
                                <th style="width:10%">

                                </th>
                                </thead>
                                <tbody>
                                @foreach ($client->images as $image)
                                    <tr>
                                    <td class="text-center">
                                        {{$image->id}}
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/'.$image->image) }}" style="width: 30%">
                                    </td>
                                    <td class="text-center">
                                        {{$image->name}} <br>
                                        {{$image->text}} <br>
                                        {{$image->year}} <br>
                                        {{$image->money}}
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('imagenes.destroy', $image->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                            </button>
                                        </form>
                                    </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
