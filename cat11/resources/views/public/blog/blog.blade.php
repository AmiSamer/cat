@extends('public.master')

@section('title')
    Cat Life || Our Blog
@endsection


@section('body')
    <!-- blog -->
    <div class="blog" id="blog">
        <div class="container">
            <h3 class="agile-title">Our Blog</h3>
            @php($i=1)
            @foreach($blogs as $blog)
            <div class="col-md-5 col-xs-6 blog-grids">

                <div class="blog-full-wthree">
                    <div class="blog-left-agileits">
                        <span>Blog</span>
                        <p>{{$i++}}</p>
                    </div>
                    <div class="blog-right-agileits-w3layouts">
                        <h4>
                            <a href="#" data-toggle="modal" >{{$blog->blog_title}}</a>
                        </h4>
                        <p>
                            <a href="#" data-toggle="modal" data-target="#myModal2{{$blog->id}}">Read</a>
                        </p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
<br>
            </div>

                <!-- Modal5 -->
                <div class="modal fade" id="myModal2{{$blog->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="modal-info">
                                    <h4>{{$blog->blog_title}}</h4>
                                    <h3 style=" font-family:'Comic Sans MS'; color: darkviolet"   class="text-right">- by {{$blog->author_name}}</h3>
                                    <br>
                                    <img src="{{$blog->blog_image}}" alt=" " class="img-responsive" />
                                    <p class="para-agileits-w3layouts">{{$blog->blog_desc}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //Modal5 -->
            @endforeach
            <div class="clearfix"> </div>
        </div>
        <div class="blog-grids mid-blog-agile">
            <img src="{{asset('/public/public')}}/images/cat2.png" class="img-responsive" alt="">
        </div>
    </div>
    <!-- //blog -->
@endsection
