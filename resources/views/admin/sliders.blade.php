@extends('layout.adminhf')

@section('content')
<div class="content">
    <div class="contact">
        <h3>Agregar Imagen</h3>
        <br>
        <form action="{{ URL::to('admin/sliders/store') }}" enctype="multipart/form-data"  method="post">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <h4>Nueva imagen:</h4><br>
            <input type="file" name="image" id="image">
            <br><br>
            <button id="add_slider">Cargar imagen</button>
        </form>
    </div>
    <br><br>
</div>
@stop

@section('scripts')
    {!! Html::script('js/admin.app.js') !!}
@stop