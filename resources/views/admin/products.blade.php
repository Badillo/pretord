@extends('layout.adminhf')

@section('content')
<div class="content">
    <div class="contact">
        <h3>Agregar producto</h3>
        <br>
        <form>
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <h4>Producto</h4>
            <input type="text" name="name" id="name" value="">
            <br><br>
            <h4>Descripción</h4>
            <textarea cols="50" rows="4" name="description" id="description"></textarea>
            <br><br>
            <h4>Precio</h4>
            <input type="number" name="price" id="price" value="0" min="0">
            <br><br>
            <h4>¿Es oferta?</h4>
            <input type="checkbox" name="isOffer" id="isOffer">
            <br>
            <h4>¿Es dúo?</h4>
            <input type="checkbox" name="isDuo" id="isDuo">
            <br><br>
            <input type="hidden" name="type" id="type" value="1">
            <h4>Categoria</h4>
            <select name="category" id="category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <br><br>
            <h4>Colección</h4>
            <select name="collection" id="collection">
                @foreach ($collections as $collection)
                    <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                @endforeach
            </select>
            <br><br>
            <h4>Fotografia</h4><br>
            <img width="300" src="" alt="Logo">
            <input type="file" name="image" id="image">
            <br><br>
            <input type="submit" id="add_product" value="Agregar producto">
        </form>
    </div>
    <br><br>
    <div class="contact">
        <table class="table table-bordered">
            <thead>
                <th>Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Fotografia</th>
                <th>¿Es oferta?</th>
                <th>¿Es dúo?</th>
                <th>Tipo</th>
                <th>Categoria</th>
                <th>Colección</th>
                <th width="100">Opciones</th>
            </thead>
            <tbody id="products-table">
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td><img width="150" src="{{ URL::to($product->image) }}" alt="Fotografia Producto"></td>
                        <td>
                            @if($product->isOffer)
                                Si
                            @else
                                No
                            @endif
                        </td>
                        <td>
                            @if($product->isDuo)
                                Si
                            @else
                                No
                            @endif
                        </td>
                        <td>{{ $product->type->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->collection->name }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a data-id="{{ $product->id }}" class="btn btn-xs btn-default edit_product" data-original-title="Editar">Editar</a>
                                <a data-id="{{ $product->id }}" title="Eliminar" class="btn btn-danger delete_product">X</a>
                            </div>
                        </td>
                        <input type="hidden" name="product_data_{{ $product->id }}" id="product_data_{{ $product->id }}" 
                            data-id="{{ $product->id }}"
                            data-name="{{ $product->name }}"
                            data-description="{{ $product->description }}"
                            data-price="{{ $product->price }}"
                            data-image="{{ $product->image }}"
                            data-isoffer="{{ $product->isOffer }}"
                            data-isduo="{{ $product->isDuo }}"
                            data-type="{{ $product->type->id }}"
                            data-category="{{ $product->category->id }}"
                            data-collection="{{ $product->collection->id }}"
                        >
                    </tr>
                @empty
                    <tr>Sin productos</tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="contact">
        <h4>Edición de producto</h4>
        <br>
        <form>
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <h4>Producto</h4>
            <input type="text" name="edit_name" id="edit_name" value="">
            <br><br>
            <h4>Descripción</h4>
            <textarea cols="50" rows="4" name="edit_description" id="edit_description"></textarea>
            <br><br>
            <h4>Precio</h4>
            <input type="number" name="edit_price" id="edit_price" value="0" min="0">
            <br><br>
            <h4>¿Es oferta?</h4>
            <input type="checkbox" name="edit_isOffer" id="edit_isOffer">
            <br>
            <h4>¿Es dúo?</h4>
            <input type="checkbox" name="edit_isDuo" id="edit_isDuo">
            <br><br>
            <input type="hidden" name="edit_type_product" id="edit_type_product" value="1">
            <h4>Categoria</h4>
            <select name="edit_category_product" id="edit_category_product">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <br><br>
            <h4>Colección</h4>
            <select name="edit_collection_product" id="edit_collection_product">
                @foreach ($collections as $collection)
                    <option value="{{ $collection->id }}">{{ $collection->name }}</option>
                @endforeach
            </select>
            <br><br>
            <h4>Fotografia</h4><br>
            <img id="logo_image" width="300" src="" alt="Logo">
            <input type="file" name="edit_image" id="edit_image">
            <br><br>
            <input type="submit" id="edit_product" value="Editar producto">
        </form>
    </div>
</div>
@stop

@section('scripts')
    {!! Html::script('js/admin.app.js') !!}
@stop