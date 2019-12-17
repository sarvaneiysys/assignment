
@extends('/layouts/layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-6">
                <form action="{{url('/editregisteruser')}}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" value="{{$data->name}}" required />
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{$data->email}}" required />
                    </div>

                    <div class="form-group">
                        <img src="{{url('/').'/uploads/'.$data->photo}}" height="100" width="100"><br>
                        <label for="name">Photo</label>
                        <input type="file" name="photo"  placeholder="Photo" />
                        <input type="hidden" name="recordid" value="{{$data->id}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection