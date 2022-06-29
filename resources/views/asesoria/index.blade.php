@extends('layouts.app', ['activePage' => 'asesoria', 'titlePage' => __('Asesoria')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Todos los servicios:</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-12 text-right">
                                {{--<a href="{{ route('servicios.index') }}" class="btn btn-sm btn-primary">Añadir</a>--}}
                            </div>
                            <div class="tab-content">
                                <table class="table">
                                    <tbody>
                                        @foreach ($advisories as $advisory)
                                            <tr>
                                                <td width="20%" style="text-align: center;">
                                                    <a href="{{ route('asesoria.show', $advisory->id) }}">
                                                        @foreach ($icons as $icono)
                                                            @if ($advisory->icon_id == $icono->id)
                                                                <i class="lni {{ $icono->icon }}" style="font-size: 3rem"></i>
                                                            @endif
                                                        @endforeach
                                                        <br>
                                                        <b>{{ $advisory->subh4 }}</b>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('asesoria.show', $advisory->id) }}">
                                                        <b>{{ $advisory->p1 }}</b>
                                                    </a>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a href="{{ route('asesoria.edit', $advisory->id ) }}" type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </a>

                                                    <form action="{{ route('asesoria.destroy', $advisory->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
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
    </div>
@endsection

@push('js')

@endpush
