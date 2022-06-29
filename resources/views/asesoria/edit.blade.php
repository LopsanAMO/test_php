@extends('layouts.app', ['activePage' => 'asesoria', 'titlePage' => __('Editar Asesoria')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Asesoria</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('asesoria.show', $advisory->id) }}" class="btn btn-sm btn-primary">Regresar</a>
                    </div>
                    <form action="{{ route('asesoria.update', $advisory->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <br>
                        <div class="form-group mx-3">
                            <label for="subh4" >Título</label>
                            <input name="subh4" type="text" class="form-control" id="subh4" value="{{ $advisory->subh4 }}" required>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="title" >Icono</label>
                            <table class="table">
                              <tbody>
                                <tr>
                                  @foreach ($icons as $icono)
                                    <td>
                                      <div class="form-check">
                                        <label class="form-check-label">
                                          <input class="form-check-input" type="radio" name="icons" id="icons" value="{{$icono->id}}" {{ $advisory->icon_id === $icono->id ? 'checked': ''}}>
                                          <span class="form-check-sign">
                                            <span class="check"></span>
                                          </span>
                                        </label>
                                      </div>
                                    </td>
                                    <td>
                                        <i class="lni {{ $icono->icon }}" style="font-size: 3rem"></i>
                                    </td>
                                  @endforeach
                                </tr>
                              </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="p1">Párrafo</label>
                            <textarea name="p1" class="form-control" id="p1" rows="3" required>{{ $advisory->p1 }}</textarea>
                        </div>
                        <br>
                        {{--<div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            <div class="fileinput-new thumbnail img-raised">
                                <img src="{{ asset('storage/'.$about->about) }}" style="width: 60%">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    <span class="fileinput-new">Seleccionar imágen</span>
                                    <span class="fileinput-exists">Cambiar</span>
                                    <input type="file" name="about" />
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