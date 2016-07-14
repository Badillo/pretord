@extends('layout.webpagehf')

@section('content')
<div class="content">
    <div class="content-bottom store">
        <h3>Productos</h3>
        <?php $newGrid = 0; ?>        
        @forelse ($products as $product)
            @if ($newGrid == 0)
                <div class="bottom-grid">
            @endif

            <div class="col-md-3 store-top">
                <div class="bottom-grid-top">
                    <a href="{{ URL::to('/productDetail/'.$product->id )}}"><img class="img-responsive" style="height: 200px;" src="{{ URL::to($product->image) }}" alt="{{ $product->name }}">
                        <div class="pre">
                            <p>{{ $product->name }}</p>
                            @if ($product->isOffer)
                                <span>${{ $product->price }}</span>    
                            @endif
                            <div class="clearfix"> </div>
                        </div>
                    </a>
                </div>
            </div>
        
            @if ($newGrid++ == 3)
                <div class="clearfix"></div>
                </div>
                <?php $newGrid = 0; ?>
            @endif
        @empty
            <div class="text-center">
                No hay productos en esta colección
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
<script>
    $(function() {
        $(".megamenu").megamenu();
    });
</script>
@stop