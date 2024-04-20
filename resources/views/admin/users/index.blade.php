@extends('admin.layout.app')
@section('title','Users')
@section('content')
    <div class="card">

        @if (@session('message'))
            <h1 class="text-primary">{{session('message')}}</h1>
            
            @endif
            
        
        <h1>
            User list
        </h1>
        <div>
            <a href="{{route('users.create')}}" class="btn btn-primary">Create</a>
        </div>
        <div>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
                @foreach ($user as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>
                            <a href="{{route('users.edit',$item->id)}}" class="btn btn-warning">Edit</a>
                            <form action="{{route('users.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" data-Id={{$item->id}}>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{$user->links()}}
        </div>

    </div>
    
@endsection