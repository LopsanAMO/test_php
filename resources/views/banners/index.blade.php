@extends('layouts.app', ['activePage' => 'banners', 'titlePage' => __('Banners')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Todos los banners:</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-12 text-right">
                                <a href="{{ route('banners.create') }}" class="btn btn-sm btn-primary">Añadir</a>
                            </div>
                            <div class="tab-content">
                                <table class="table">
                                    <tbody>
                                        @foreach ($banners as $banner)
                                            <tr>
                                                <td width="20%">
                                                    <a href="{{ route('banners.show', $banner->id) }}">
                                                        <img src="{{ asset('storage/'.$banner->banner) }}" alt="" style="width: 100%">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('banners.show', $banner->id) }}">
                                                        <b>{{ $banner->title }}</b><br>
                                                        {{ $banner->subtitle }}
                                                    </a>
                                                </td>
                                                <td class="td-actions text-right">
                                                    <a href="{{ route('banners.edit', $banner->id ) }}" type="button" rel="tooltip" title="Editar" class="btn btn-primary btn-link btn-sm">
                                                    <i class="material-icons">edit</i>
                                                    </a>

                                                    <form action="{{ route('banners.destroy', $banner->id) }}" method="POST">
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
