@extends('layout.adminhf')

@section('content')
<div class="content">
    <div class="contact">
        <h3>Agregar colección</h3>
        <br>
        <form onclick="return false;">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <h4>Nombre:</h4>
            <input type="text" name="name" id="name" value="">
            <br>
            <input type="submit" id="add_collection" value="Agregar colección">
        </form>
    </div>
    <br><br>
    <div class="contact">
        <table class="table table-bordered">
            <thead>
                <th>Colección</th>
                <th width="100">Opciones</th>
            </thead>
            <tbody id="collections-table">
                @forelse ($collections as $collection)
                    <tr>
                        <td id="collection_name_{{ $collection->id }}" >{{ $collection->name }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a data-id="{{ $collection->id }}" class="btn btn-xs btn-default edit_collection" data-original-title="Editar">Editar</a>
                                <a data-id="{{ $collection->id }}" title="Eliminar" class="btn btn-danger delete_collection">X</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>Sin colecciones</tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="contact">
        <h4>Edición de colección</h4>
        <br>
        <form onclick="return false;">
            <h4>Nombre:</h4>
            <input type="text" name="edit_name" id="edit_name" value="">
            <input type="hidden" name="edit_id" id="edit_id" value="">
            <br>
            <input type="submit" id="edit_collection" value="Editar colección">
        </form>
    </div>
</div>
@stop

@section('scripts')
    {!! Html::script('js/admin.app.js') !!}
@stop