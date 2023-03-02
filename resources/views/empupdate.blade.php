@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-5" >
            <h1>Update form</h1>
            <form action="{{route('employeupdate_post')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname" placeholder="Name" value="{{$data->fname}}"   >
                    <input type="hidden" name="id" value="{{$data->id}}">
                  </div>



                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Last Name</label>
                      <input type="text" class="form-control" name="lname" placeholder="Last Name" value="{{$data->lname}}"  >
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="Email" value="{{$data->email}}"  >
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Phone</label>
                      <input type="number" class="form-control" name="phone" placeholder="Phone" value="{{$data->phone}}"  >
                    </div>


                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


        </div>
    </div>
</div>

@endsection
