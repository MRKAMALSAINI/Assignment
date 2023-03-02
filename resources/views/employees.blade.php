@extends('layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-5" >
            <h3>Create Employess form</h3>
            <form action="{{route('employess_post')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="fname" placeholder="Name" required >
                </div>



                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required >
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email" >
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="number" class="form-control" name="phone" placeholder="Phone" >
                  </div>




                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


        </div>
    </div>
</div>




@endsection


