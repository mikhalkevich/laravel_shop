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
                                @foreach($maintexts as $main)
                                    <p>{{$main->name}} <a href="{{asset('adminka/maintext/'.$main->id)}}">Edit</a></p>
                                @endforeach
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">Leave a Reply </h3>
                                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4">
                                                <p>Name *</p>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <p>Email *</p>
                                                <input type="email">
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <p>Website</p>
                                                <input type="text">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                                <p>Website</p>
                                                <textarea id="message-box" cols="30" rows="10"></textarea>
                                                <input type="submit" value="Post Comment">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- single-blog end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
