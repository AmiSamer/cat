@extends('admin.admin-master')

@section('body')
    <div class="container-fluid">
        <h3 style="color: magenta">{{Session::get('message')}}</h3>
        <h1>New Member</h1>
        <form action="{{route('save-member')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" name="full_name" id="fullname">
            </div>

            <div class="form-group">
                <label for="intro">Introduction</label>
                <textarea class="form-control" name="introduction" id="intro"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Image</label>

                <input type="file" class="form-control-file" name="main_image" id="exampleFormControlFile1">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="text" class="form-control" name="email_address" id="email">
            </div>

            <div class="form-group">
                <label for="phone">Contact Number</label>
                <input type="text" class="form-control" name="phone_no" id="phone">
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


