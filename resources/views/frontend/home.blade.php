@extends('master')
@include('layouts.navigation')
@section('content')

<div class="container mt-5">

        <div class="row p-4">
         
            <div class="col-4">
              <form action="" method="POST">
                @csrf
                <div class="card">
                    <img src="{{asset('storage/users/'.  Auth::user()->image)}}" style=" height:250px"class="card-img-top" alt="...">
                    <div class="card-body">

                      <input type="text"name="name" hidden value="{{ Auth::user()->name }}">
                      <h5 class="card-title" >Name: {{ Auth::user()->name }}</h5>

                      <input type="text"name="email" hidden value="{{ Auth::user()->email }}">
                      <p class="card-text" >Email: {{ Auth::user()->email }}</p>

                      <input type="text"name="location" hidden value="{{ Auth::user()->location }}">
                      <p class="card-text" >Location: {{ Auth::user()->location }}</p>

                      <a href="{{route('f_profile')}}" class="btn btn-sm btn-success">My Profile</a>
                    
                    </div>
                  </div>

                </form>
            </div>
            <div class="col-8 ">
                <div class="col ">
                    <form action="" method="POST">
                        @csrf
                        <div class="card-body">
                            <h5 class="card-title" >{{ Auth::user()->name }}</h5>
                            <p class="card-text" >{{ Auth::user()->location }}</p>
                            <p class="card-text" > {{ Auth::user()->location }}</p>
                            <img src="{{asset('storage/users/'.  Auth::user()->image)}}" style=" height:450px"class="card-img-top" alt="...">
                            <div class="input-group mt-3">
                                <input type="text" class="form-control" placeholder="comment here.................">
                                <div class="input-group-append">
                                    <button type="submit" class="btn  btn-success ">Comment</button>
                                </div>
                              </div>
                          
                              </div>
                        
                      </form>
                </div>
           
            </div>
       
         </div>

</div>
    
@endsection
