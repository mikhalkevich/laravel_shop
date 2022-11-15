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
                                        <h2>Catalog - {{$catalog->name}}</h2>
                                    </div>
                                </div>
                            </div>
                            {!! $catalog->description !!}
                            <div class="container">
                                <div class="row">
                                    @foreach($catalog->products as $product)
                                        <x-product :product="$product"/>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
