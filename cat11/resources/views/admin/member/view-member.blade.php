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
            <h1>View Member</h1>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Introduction</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($members as $member)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$member->full_name}}</td>
                        <td>{{$member->introduction}}</td>
                        <td><img src="{{asset($member->main_image)}}" alt="" class="img-fluid img-thumbnail" width="100px" ></td>
                        <td>{{$member->status==1?'Published':'Unpublished'}}</td>
                        <td><!-- Button trigger modal -->
                            @if($member->status==1)
                                <a href="{{route('published-member',['id'=>$member->id])}}" type="button" class="btn btn-info">
                                    <i class="fas fa-arrow-up"></i>
                                </a>
                            @else
                                <a href="{{route('unpublished-member',['id'=>$member->id])}}" type="button" class="btn btn-warning">
                                    <i class="fas fa-arrow-down"></i>
                                </a>
                            @endif
                            <a type="button" class="btn btn-success" data-toggle="modal" data-target="#edit{{$member->id}}">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="{{route('delete-member',['id'=>$member->id])}}" type="button" class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>


                        </td>
                    </tr>



                    <!-- Modal -->
                    <div class="modal fade" id="edit{{$member->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route('update-member')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" name="full_name" value="{{$member->full_name}}">
                                            <input type="hidden" class="form-control" name="id" value="{{$member->id}}">
                                        </div>

                                        <div class="form-group">
                                            <label>Introduction</label>
                                            <input type="text" class="form-control" name="introduction" value="{{$member->introduction}}">
                                            {{--                                        <input type="hidden" class="form-control" name="id" value="{{$blog->id}}">--}}
                                        </div>

                                        <div class="form-group">
                                            <label>Image</label>
                                            <h5>Previous Image</h5>
                                            <img src="{{asset($member->main_image)}}" alt="" width="200px" height="200px" >
                                            <br><br>
                                            <input type="file" class="form-control-file" name="main_image">
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


