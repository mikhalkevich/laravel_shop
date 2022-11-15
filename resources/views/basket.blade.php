<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="portfolio" class="portfolio-area area-padding fix">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-headline text-center">
                                        <h2>Basket</h2>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <table class="table table-bordered">
                                <tr>
                                    <th>id</th>
                                    <th width="200px">picture</th>
                                    <th>name</th>
                                    <th>count</th>
                                    <th>actions</th>
                                </tr>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td width="200px">
                                            <img src="{{asset('products/'.$product->picture)}}" width="100%">
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td><input type="number" value="1" min="1" max="100"></td>
                                        <td>change, delete</td>
                                    </tr>
                                @endforeach
                            </table>
                            <form method="post" action="{{asset('basket/order')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <button type="submit" class="btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
