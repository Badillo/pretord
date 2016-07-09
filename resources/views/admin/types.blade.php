@extends('layout.adminhf')

@section('content')
<div class="content">
    <div class="contact">
        <h3>Actualizar datos</h3>
        <br>
        <form action="{{ URL::to('admin/store') }}" enctype="multipart/form-data"  method="post">
            <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
            <h4>Nombre de la empresa</h4>
            <input type="text" name="name" id="name" value="{{ $company->name }}">
            <br><br>
            <h4>Misión</h4>
            <textarea cols="50" rows="4" name="mission" id="mission">{{ $company->mission }}</textarea>
            <br><br>
            <h4>Visión</h4>
            <textarea cols="50" rows="4" name="vision" id="vision">{{ $company->vision }}</textarea>
            <br><br>
            <h4>Descripción</h4>
            <textarea cols="50" rows="4" name="description" id="description">{{ $company->description }}</textarea>
            <br><br>
            <h4>Logo</h4><br>
            <img width="300" src="{{ URL::to($company->logo) }}" alt="Logo">
            <input type="file" name="logo" id="logo">
            <br><br>
            <input type="submit" value="Actualizar datos">
        </form>
    </div>
</div>
@stop

@section('scripts')
@stop