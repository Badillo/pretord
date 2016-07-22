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
    <div class="content-bottom store">
        <h3>Productos</h3>
        <?php $newGrid = 0; ?>        
        @forelse ($sliders as $slider)
            @if ($newGrid == 0)
                <div class="bottom-grid">
            @endif

            <div class="col-md-3 store-top">
                <div class="bottom-grid-top">
                    <img class="img-responsive" style="height: 200px;" src="{{ URL::to($slider->image) }}">
                    <div class="pre">
                        <button data-id="{{ $slider->id }}" class='delete_image'>Eliminar</button>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        
            @if ($newGrid++ == 3)
                <div class="clearfix"></div>
                </div>
                <?php $newGrid = 0; ?>
            @endif
        @empty
            <div class="text-center">
                No hay Imagenes
            </div>
        @endforelse
        @if ($newGrid != 0)
            <div class="clearfix"></div>
            </div>
        @endif
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@stop

@section('scripts')
    {!! Html::script('js/admin.app.js') !!}
@stop