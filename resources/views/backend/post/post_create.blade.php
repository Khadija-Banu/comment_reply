@extends('backend.master')
@section('content')
<div class="container" >
    <div class="card">
        <div class="card-body m-4 ">
        <h3 style="color:rgba(55,180,236,255)">Create Post</h3>
            
        <form action="{{route('post_store')}}" method="post" class="mt-4" enctype="multipart/form-data">
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
                    <input class="form-control" type="text " name="name" value="{{old('name')}}" placeholder="post name">
    
                    @error('name')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
    
                </div>
                <div class="form-group mt-2">
                    <input type="file" name="image" class="form-control" value="{{old('image')}}" >
    
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group mt-2">
                    <input class="form-control" type="text " name="description" value="{{old('description')}}" placeholder="post description">
    
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
    
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text " name="location" value="{{old('location')}}" placeholder="post location">
    
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