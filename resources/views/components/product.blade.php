        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
                <span class="saleon">top sale</span>
                <h3>{{$product->name}}</h3>
                @if($product->picture)
                    <img src="{{asset('products/'.$product->picture)}}" width="100%" />
                @endif
                <ol>
                    <li class="check"><i class="bi bi-check"></i><span><b>{{$product->name}}</b> {{$product->small_description}}</span></li>
                    <li class="check"><i class="bi bi-check"></i><span>Price: ${{$product->price}}</span></li>
                    <li class="check"><i class="bi bi-check"></i>
                        @foreach($product->catalogs as $catalog)
                            <a href="{{asset('catalog/'.$catalog->id)}}">{{$catalog->name}}</a>,
                        @endforeach
                    </li>
                    <li class="check"><i class="bi bi-check"></i><span>ID: {{$product->id}}</span></li>
                </ol>
                <button data-id="{{$product->id}}" data-price="{{$product->price}}" class="add_to_cart">Add to cart</button>
            </div>
        </div>
