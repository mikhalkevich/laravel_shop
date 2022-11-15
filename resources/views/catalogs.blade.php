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
                                        <h2>Catalogs</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row wesome-project-1 fix">
                                <!-- Start Portfolio -page -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <ul id="portfolio-flters">
                                        <li data-filter="*" class="filter-active">for All</li>
                                        <li data-filter=".filter-app">for Men</li>
                                        <li data-filter=".filter-card">for Women</li>
                                        <li data-filter=".filter-web">for Child</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row awesome-project-content portfolio-container"
                                 style="position: relative; height: 629.594px;">
                                @foreach($catalogs as $one)
                                    <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item {{$one->filters}}"
                                         style="position: absolute; left: 760px; top: 0px;">
                                        <div class="single-awesome-project">
                                            <div class="awesome-img">
                                                <a href="{{asset('catalog/'.$one->id)}}"><img src="{{$one->picture}}" alt=""></a>
                                                <div class="add-actions text-center">
                                                    <div class="project-dec">
                                                        <a class="portfolio-lightbox" data-gallery="myGallery"
                                                           href="{{asset('catalog/'.$one->id)}}">
                                                            <h4>{{$one->name}}</h4>
                                                            <span>{{$one->small_description}}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
