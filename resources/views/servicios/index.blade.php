@extends('layouts.app', ['activePage' => 'teso_inv', 'titlePage' => __('Tesorería e Inversión')])

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
                                        @foreach ($services as $service)
                                            <tr>
                                                <td width="20%">
                                                    <a href="{{ route('servicios.show', $service->id) }}">
                                                        <b>{{ $service->h4 }}</b><br>
                                                        {{ $service->span }}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('servicios.show', $service->id) }}">
                                                        <b>{{ $service->service1 }}</b><br>
                                                        {{ $service->service2 }}<br>
                                                        ...
                                                    </a>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a href="{{ route('servicios.edit', $service->id ) }}" type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                                                        <i class="material-icons">edit</i>
                                                    </a>

                                                    <form action="{{ route('servicios.destroy', $service->id) }}" method="POST">
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
