@extends('layouts.app', ['activePage' => 'asesoria', 'titlePage' => __('Ver Asesoria')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Ver Texto # {{$asesorium->id}}</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('asesoria.edit', $asesorium->id) }}" class="btn btn-sm btn-primary">Editar</a>
                    </div>
                    <br>
                    <div class="form-group mx-3">
                        <label for="title" >Título</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{ $asesorium->subh4 }}" disabled>
                    </div>
                    <br>
                    <div class="form-group mx-3">
                        <label for="title" >Icono</label><br>
                        @foreach ($icons as $icono)
                            @if ($asesorium->icon_id == $icono->id)
                                <i class="lni {{ $icono->icon }}" style="font-size: 3rem"></i>
                            @endif
                        @endforeach
                    </div>
                    <br>
                    <div class="form-group mx-3">
                        <label for="subtitle">Párrafo</label>
                        <textarea name="subtitle" class="form-control" id="subtitle" rows="3" disabled>{{ $asesorium->p1 }}</textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="{{ route('asesoria.index') }}" class="btn btn-primary btn-round">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection