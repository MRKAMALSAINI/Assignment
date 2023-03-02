@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-5" >
            <h1>Update form</h1>
            <form action="{{route('update_post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Company Name" value="{{$data->name}}" >
                    <input type="hidden" name="id" value="{{$data->id}}">
                  </div>



                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email id</label>
                      <input type="email" class="form-control" name="email" placeholder="Email id" value="{{$data->email}}" >
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Url</label>
                      <input type="text" class="form-control" name="url" placeholder="Url" value="{{$data->url}}" >
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logo</label>
                      <input type="file" class="form-control" name="file" placeholder="Image" >
                    </div>


                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


        </div>
    </div>
</div>

@endsection
