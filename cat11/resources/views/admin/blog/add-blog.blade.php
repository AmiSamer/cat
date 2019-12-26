@extends('admin.admin-master')

@section('body')
    <div class="container-fluid">
        <h3 style="color: magenta">{{Session::get('message')}}</h3>
        <h1>Our Blog</h1>
        <form action="{{route('save-blog')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="blogtitle">Blog Title</label>
                <input type="text" class="form-control" name="blog_title" id="blogtitle">

            </div>
            <div class="form-group">
                <label for="authorname">Author Name</label>
                <input type="text" class="form-control" name="author_name" id="authorname">

            </div>
            <div class="form-group">
                <label for="blogdesc">Blog Description</label>
                <textarea class="form-control" name="blog_desc" id="blogdesc"></textarea>

            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>

                <input type="file" class="form-control-file" name="blog_image" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="status">Publication Status</label>
                <div class="radio">
                    <input type="radio" name="status" value="1">Published
                    <input type="radio" name="status" value="0">Unpublished
                </div>
            </div>
            <input type="submit" name="btn" class="btn btn-primary">
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection

