@extends('/layouts/layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-6">
                <form action="{{url('/registeruser')}}" method="post" enctype="multipart/form-data">
                    @csrf()
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" required />
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required />
                    </div>

                    <div class="form-group">
                        <label for="name">Photo</label>
                        <input type="file" name="photo"  placeholder="Photo" required />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection