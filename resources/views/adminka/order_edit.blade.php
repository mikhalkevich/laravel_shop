<x-guest-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                @include('adminka.template')
            </div>
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="clear"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="single-post-comments">
                                <form action="{{asset('adminka/order/'.$order->id)}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <p>Status</p>
                                            <input type="text" name="status" value="{{$order->status}}" />
                                        </div>
                                        <input type="submit" value="Change">
                                    </div>
                                </form>
                            </div>
                            <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
