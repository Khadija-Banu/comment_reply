@extends('backend.master')
@section('content')
<div class="container" >
    <div class="card">
        <div class="card-body m-4 ">
        <h3 style="color:rgba(55,180,236,255)">Edit Post</h3>
            
        <form action="{{route('post_update',$post->id)}}" method="post" class="mt-4" enctype="multipart/form-data">
            @csrf
                <div class="form-group mt-2">
                    <select class="form-select" name="user_id" >
                    <option value="">Select user name</option>
                    @foreach ($users as $user)
                    <option value="{{$user->id}}" >{{$user->name}}</option>
                    @endforeach        
                    </select>

                    @error('user_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text " name="name" value="{{$post->name}}" placeholder="post name">
    
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
    
                </div>
                <div class="form-group mt-2">
                    <input type="file" name="image" class="form-control"  >
    
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group mt-2">
                    <input class="form-control" type="text " name="description" value="{{$post->description}}" placeholder="post description">
    
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
    
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text " name="location" value="{{$post->location}}" placeholder="post location">
    
                    @error('location')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
    
                </div>
                  <button type="submit" class="btn btn-success mt-2">Submit</button>
                </form>
            </div>
        </div>
</div>
@endsection