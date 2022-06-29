@extends('layouts.app', ['activePage' => 'banners', 'titlePage' => __('Banners')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Añadir</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('banners.store', 1) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Algo lindo..." required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="subtitle">Subtítulo</label>
                            <textarea name="subtitle" class="form-control" id="subtitle" rows="3" required></textarea>
                        </div>
                        <br>
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                            {{-- <div class="fileinput-new thumbnail img-raised">
                                <img src="http://style.anu.edu.au/_anu/4/images/placeholders/person_8x10.png" alt="...">
                            </div> --}}
                            <div class="fileinput-preview fileinput-exists thumbnail img-raised"></div>
                            <div>
                                <span class="btn btn-raised btn-round btn-default btn-file">
                                    {{-- <span class="fileinput-new">Seleccionar imágen</span>
                                    <span class="fileinput-exists">Cambiar</span> --}}
                                    <input type="file" name="banner" required />
                                </span>
                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-round">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
