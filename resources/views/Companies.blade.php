@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-5" >
            <h3>Create Company form</h3>
            <form action="{{route('company_post')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder=" Name" required >
                </div>



                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email id</label>
                    <input type="email" class="form-control" name="email" placeholder="Email id" >
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Url</label>
                    <input type="text" class="form-control" name="url" placeholder="Url" >
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


