@extends("layouts.master")

@section("title")
    StandUP
@endsection

@section("content")
    @if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{Session::get('success')}}
            </div>
        </div>
    </div>
    @endif


    @foreach($products->chunk(3) as $productsChunk)
        <div class="row">
            @foreach($productsChunk as $products)
                <div class="col-sm-6 col-md-4"> <!-- specifies how many blocks the div should be wide-->
                    <div class="thumbnail">
                        <img src="{{$products->imagePath}}" alt="..." class="img-responsive"> <!-- image responsive faz com que fique bem em todos os aparelhos por exemplo tlm, pc, etc-->
                        <div class="caption">
                            <h3>{{$products->title}}</h3>
                            <p class="description">{{$products->description}}</p>
                            <div class="clearfix"> <!--isto faz com que o botao "adicionar ao carrinha fique dentro da frame do template e não fora-->
                                <div class="pull-left price">Preço: {{$products->price}}€</div>
                                <a href="{{route('product.addToCart',['id' => $products->id]) }}" class="btn btn-success pull-right" role="button">Adicionar ao Carrinho</a>
                                <!-- success = verde -->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection

