<?php
    // echo "<pre>";
    // print_r($data);
    // die;
?>

@extends('/layouts/layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-6">
                <a href="{{'/registeruser'}}" class="btn btn-primary">Add New User</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Photo</th>
                            <th>Action<th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $value)
                            <tr>
                                <th>{{$value->name}}</th>
                                <th>{{$value->email}}</th>
                                <th><img src="{{url('/').'/uploads/'.$value->photo}}" height="100" width="100"></th>
                                <th>
                                    <a href="{{'edit/'.$value->id}}"><button type="button" class="btn btn-primary">Edit</button></a>
                                    <a href="{{'delete/'.$value->id}}"><button type="button" class="btn btn-danger">Delete</button></a>

                                    <!-- <button type="button" class="btn btn-danger" onclick="deleteuser(this,'{{$value->id}}')">Delete</button> -->
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <script>
    function deleteuser($thisid, id){
        
    }
    </script>  -->
@endsection