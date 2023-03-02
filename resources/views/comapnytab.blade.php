@extends('layout')
@section('content')
    <div class="container">
        <div class="row">


            <div class="col-12 mt-5" >
                <div class="button">
                    <a class="btn btn-info" href="{{route('companytable')}}">Back</a>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email Id</th>
                        <th scope="col">Url</th>
                        <th scope="col">Image</th>
                        <th scope="col">Create</th>

                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ( $data as $comp )

                        <tr>
                            <th scope="row">{{$comp->id}}</th>
                            <td>{{$comp->name}}</td>
                            <td>{{$comp->email}}</td>
                            <td>{{$comp->url}}</td>


                            <td><img style="height: 50px;width:50px;" src="{{asset('images/'.$comp->file)}}" alt=""></td>
                            <td> <a class="btn btn-success" href="{{route('company')}}">Create</a></td>
                            <td><a class="btn btn-primary" href="{{route('update',$comp->id)}}">Update</a></td>
                            <td><a  class="btn btn-primary"  href="{{route('delete', $comp->id)}}">Delete</a></td>

                        </tr>
                        @endforeach



                    </table>
                        {{$data}}
                </div>
        </div>
    </div>
@endsection
