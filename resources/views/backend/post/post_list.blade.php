@extends('backend.master')
@section('content')
<div class="container" >
    <div class="card">    
        <div class="card-body m-4">
          <h3 >Post List <a class="btn btn-sm btn-success" style="margin-left: 20px" href="{{route('post_create')}}">Add New Post</a> </h3>
          <table class="table" >
                <thead >
                  <tr>
                    <th style="color:rgba(70,99,202,255)">Ser No</th>
                    <th style="color:rgba(70,99,202,255)">Author Name</th>
                    <th style="color:rgba(70,99,202,255)">Title</th>
                    <th style="color:rgba(70,99,202,255)">Image</th>
                    <th style="color:rgba(70,99,202,255)">Description</th>
                    <th style="color:rgba(70,99,202,255)">Location</th>
                    <th style="color:rgba(70,99,202,255)">Actions</th>  
                                
                  </tr>
                </thead>
                <tbody>
                 @php
                   $i=1  
                 @endphp
                  @foreach ($posts as $post)           
                  <tr>
                    <td>{{$i++}}</td>
                    <td>{{$post->user->name?? ''}}</td>
                    <td>{{$post->name}}</td>
                    <td>
                        @if(file_exists(storage_path().'/app/public/posts/'.$post->image) &&(!is_null($post->image)))
                        <img src="{{asset('storage/posts/'. $post->image)}}"height="100px"width="150px">
                        @else         
                        {{-- <img src="{{asset('storage/categories/default.jpg')}}"height="100px" width="150px"> --}}
                        @endif
                      </td>
                      <td>{{$post->description}}</td>
                      <td>{{$post->location}}</td>
                      <td>
                        <a class="btn btn-sm btn-warning" href="{{route('post_edit',$post->id)}}">Edit</a>
                        <a class="btn btn-sm btn-danger" href="{{route('post_delete',$post->id)}}">Delete</a>
                      </td>   
                  </tr>   
                  @endforeach
                </tbody>
            </table>

        </div>
      </div> 
</div>
@endsection