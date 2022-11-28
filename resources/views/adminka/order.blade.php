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
                                <table class="table">
                                    <tr>
                                        <td>Email</td>
                                        <td>Phone</td>
                                        <td>Order</td>
                                        <td>Status</td>
                                        <td>Action</td>
                                    </tr>
                                @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->order}}</td>
                                            <td>{{$order->data}}</td>
                                            <td><b>{{$order->status}}</b></td>
                                            <td>
                                                <a href="{{asset('adminka/order/'.$order->id)}}">Change</a>
                                            </td>
                                        </tr>
                                @endforeach
                                </table>

                            </div>
                            <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
