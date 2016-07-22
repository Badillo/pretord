@extends('layout.webpagehf')

@section('content')
<div class="col-md-9">
    <div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="photo_slider_1">
        @foreach ($sliders as $slider)
            @if ($slider->image != '')
                <div data-src="{{ URL::to( $slider->image ) }}" data-thumb="{{ URL::to( $slider->thumbnail ) }}"></div>
            @endif
        @endforeach
        </div>
    </div>

    <div class="content-bottom">
        <h3>Ofertas!</h3>
        <?php $newGrid = 0; ?>
        @foreach ($cheapProducts as $cheapProduct)
            @if ($newGrid == 0)
                <div class="bottom-grid">
            @endif
        
            <div class="col-md-4 shirt">
                <div class="bottom-grid-top">
                    <a href="{{ URL::to('/productDetail/'.$cheapProduct->id )}}"><img class="img-responsive" style="height: 200px;" src="{{ URL::to($cheapProduct->image) }}" alt="{{ $cheapProduct->name }}">
                        <div class="pre">
                            <p>{{ $cheapProduct->name }}</p>
                            <span>${{ $cheapProduct->price }}</span>
                            <div class="clearfix"> </div>
                        </div>
                    </a>
                </div>
            </div>
            @if ($newGrid++ == 2)
                <div class="clearfix"></div>
                </div>
                <?php $newGrid = 0; ?>
            @endif
        @endforeach
        @if ($newGrid != 0)
            <div class="clearfix"></div>
            </div>
        @endif
    </div>
    <!--
    <ul class="start">
        <li><span>1</span></li>
        <li class="arrow"><a href="#">2</a></li>
        <li class="arrow"><a href="#">3</a></li>
        <li class="arrow"><a href="#">4</a></li>
        <li class="arrow"><a href="#">5</a></li>
        <li class="arrow"><a href="#">6</a></li>
    </ul>
    -->
</div>
<div class="col-md-3 col-md">
    <div class=" possible-about">
        <h4>Colecciones</h4>
        <div class="tab">
            <ul class="place">
                <li class="sort"><a href="{{ URL::to('/products/0')}}"><span>Todas</span></a></li>
                <li class="by"></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        @foreach ($collections as $collection)
        <div class="tab">
            <ul class="place">
                <li class="sort"><a href="{{ URL::to('/products/'.$collection->id )}}"><span>{{ $collection->name }}</span></a></li>
                <li class="by"></li>
                <div class="clearfix"> </div>
            </ul>
        </div>
        @endforeach
    </div>
    <!---->
</div>
<div class="clearfix"> </div>
@stop

@section('scripts')
<script>
    $(function() {
        $(".megamenu").megamenu();

        $('#photo_slider_1').camera({
                thumbnails: true
            });
    });
</script>
@stop