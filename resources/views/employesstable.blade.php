@extends('layout')
@section('content')
    <div class="container">
        <div class="row">


            <div class="col-12 mt-5" >
                <div class="button">
                    <a class="btn btn-info" href="{{route('employtable')}}">Back</a>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Create</th>

                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $data as $emp )

                        <tr>
                            <th scope="row">{{$emp->id}}</th>
                            <td>{{$emp->fname}}</td>
                            <td>{{$emp->lname}}</td>
                            <td>{{$emp->email}}</td>
                            <td>{{$emp->phone}}</td>

                            <td> <a class="btn btn-success" href="{{route('employess')}}">Create</a></td>
                             <td><a class="btn btn-primary" href="{{route('empupdate',$emp->id)}}">Update</a></td>
                         <td><a  class="btn btn-primary"  href="{{route('empdelete', $emp->id)}}">Delete</a></td>

                        </tr>
                        @endforeach


                  </table>
                  {{$data}}
            </div>
        </div>
    </div>
@endsection
