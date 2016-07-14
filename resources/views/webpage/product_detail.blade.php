@extends('layout.webpagehf')

@section('content')
<div class="content">
    <div class="col-md-12">
        <div class="col-md-5 single-top">
            <img class="etalage_thumb_image img-responsive" src="{{ URL::to($product->image) }}" alt="">
        </div>
        <div class="col-md-7 single-top-in">
            <div class="single-para">
                <h4>{{ $product->name }}</h4>
                <div class="para-grid">
                    @if ($product->isOffer)
                        <span class="add-to">${{ $product->price }}</span>
                    @endif
                    <div class="clearfix"></div>
                </div>
                <h5>{{ $product->description }}</h5>
            </div>
        </div>
        <div class="clearfix"> </div>        
    </div>
    <div class="clearfix"> </div>
</div>
@stop

@section('scripts')
<script type="text/javascript">
$(window).load(function() {
    $("#flexiselDemo1").flexisel({
        visibleItems: 5,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2
            },
            tablet: {
                changePoint: 768,
                visibleItems: 3
            }
        }
    });

});
</script>
{!! Html::script('js/jquery.flexisel.js') !!}
<script>
    $(function() {
        $(".megamenu").megamenu();
    });
</script>
@stop