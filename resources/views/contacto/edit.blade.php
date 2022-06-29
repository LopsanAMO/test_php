@extends('layouts.app', ['activePage' => 'contacto', 'titlePage' => __('Contacto')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Editar Contacto</h4>
                </div>
                <div class="card-body">
                    <div class="col-12 text-right">
                        <a href="{{ route('contacto.show', $contact->id) }}" class="btn btn-sm btn-primary">Regresar</a>
                    </div>
                    <form action="{{ route('contacto.update',1) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <br>
                        <div class="form-group mx-3">
                            <label for="corporate">Edificio / Corporativo</label>
                            <input name="corporate" type="text" class="form-control" id="corporate" value="{{ $contact->corporate }}" >
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="address">Dirección</label>
                            <input name="address" type="text" class="form-control" id="address" value="{{ $contact->address }}" >
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="phone1">Teléfono 1</label>
                            <input name="phone1" type="text" class="form-control" id="phone1" value="{{ $contact->phone1 }}">
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="phone2" >Teléfono 2</label>
                            <input name="phone2" type="text" class="form-control" id="phone2" value="{{ $contact->phone2 }}">
                        </div>
                        <br>
                        <div class="form-group mx-3">
                            <label for="email">Correo Electrónico</label>
                            <input name="email" type="text" class="form-control" id="email" value="{{ $contact->email }}">
                        </div>
                        <br>
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