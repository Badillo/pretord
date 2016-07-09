@extends('layout.adminhf')

@section('content')
<div class="content">
    <div class="contact">
        <h3>Agregar categoria</h3>
        <br>
        <form onclick="return false;">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <h4>Nombre:</h4>
            <input type="text" name="name" id="name" value="">
            <br>
            <input type="submit" id="add_category" value="Agregar categoria">
        </form>
    </div>
    <br><br>
    <div class="contact">
        <table class="table table-bordered">
            <thead>
                <th>Categoria</th>
                <th width="100">Opciones</th>
            </thead>
            <tbody id="categories-table">
                @forelse ($categories as $category)
                    <tr>
                        <td id="category_name_{{ $category->id }}" >{{ $category->name }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a data-id="{{ $category->id }}" class="btn btn-xs btn-default edit_category" data-original-title="Editar">Editar</a>
                                <a data-id="{{ $category->id }}" title="Eliminar" class="btn btn-danger delete_category">X</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>Sin categorias</tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="contact">
        <h4>Edición de categoria</h4>
        <br>
        <form onclick="return false;">
            <h4>Nombre:</h4>
            <input type="text" name="edit_name" id="edit_name" value="">
            <input type="hidden" name="edit_id" id="edit_id" value="">
            <br>
            <input type="submit" id="edit_category" value="Editar categoria">
        </form>
    </div>
</div>
@stop

@section('scripts')
    {!! Html::script('js/admin.app.js') !!}
@stop