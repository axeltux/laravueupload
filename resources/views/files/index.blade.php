@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Archivos <a href="{{ url('files/create') }}" class="btn btn-info">Agregar archivos</a> </div>

                <div class="card-body">
                    @if($files->count())
                        <table class="table">
                            <th>Nombre</th>
                            <th>Tamaño</th>
                            @foreach($files as $file)
                                <tr>
                                    <td><a href="{{ url('files/'.$file->path.'/'.$file->filename) }}">{{ $file->filename }}</a></td>
                                    <td>{{ $file->size }} Bytes</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        No se han subido archivos!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
