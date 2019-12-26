@extends('admin.admin-master')

@section('body')
    <div class="container-fluid">

        @if(Session::get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <h1>View Blog</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Serial</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($blogs as $blog)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$blog->blog_title}}</td>
                    <td>{{$blog->author_name}}</td>
                    <td>{{$blog->blog_desc}}</td>
                    <td><img src="{{asset($blog->blog_image)}}" alt="" class="img-fluid img-thumbnail" width="100px" ></td>
                    <td>{{$blog->status==1?'Published':'Unpublished'}}</td>
                    <td><!-- Button trigger modal -->
                        @if($blog->status==1)
                            <a href="{{route('published-blog',['id'=>$blog->id])}}" type="button" class="btn btn-info">
                                <i class="fas fa-arrow-up"></i>
                            </a>
                        @else
                            <a href="{{route('unpublished-blog',['id'=>$blog->id])}}" type="button" class="btn btn-warning">
                                <i class="fas fa-arrow-down"></i>
                            </a>
                        @endif
                        <a type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$blog->id}}">
                            <i class="fas fa-edit"></i>
                        </a>

                        <a href="{{route('delete-blog',['id'=>$blog->id])}}" type="button" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>


                    </td>
                </tr>



                <!-- Modal -->
                <div class="modal fade" id="edit{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Blog</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('update-blog')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label>Blog Title</label>
                                        <input type="text" class="form-control" name="blog_title" value="{{$blog->blog_title}}">
                                        <input type="hidden" class="form-control" name="id" value="{{$blog->id}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Author Name</label>
                                        <input type="text" class="form-control" name="author_name" value="{{$blog->author_name}}">
                                        {{--                                        <input type="hidden" class="form-control" name="id" value="{{$blog->id}}">--}}
                                    </div>

                                    <div class="form-group">
                                        <label>Blog Description</label>
                                        <textarea class="form-control" name="blog_desc">{{$blog->blog_desc}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <h5>Previous Image</h5>
                                        <img src="{{asset($blog->blog_image)}}" alt="" width="200px" height="200px" >
                                        <br><br>
                                        <input type="file" class="form-control-file" name="blog_image">
                                    </div>
                                    <input type="submit" name="btn" class="btn btn-primary" value="update">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>



@endsection

