@extends('admin.layout.app')
@section('title','Create Roles')
@section('content')
    <div class="card">
        <h1>
            Create Roles
        </h1>
        <div>
            <form action="{{route('roles.store')}}" method="POST">
                @csrf
                <div class="col-md-6">
                    @error('name')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Name</label>
                      <input name="name" type="text" value="{{old('name')}}" class="form-control">
                    </div>
                    
                </div>

                <div class="col-md-6">
                    @error('display_name')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Display Name</label>
                        <input name="display_name" type="text" value="{{old('display_name')}}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    @error('group')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1"  class="ms-0" >Group</label>
                        <select name="group" class="form-control">
                            <option value="system">system</option>
                            <option value="user">user</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label >Permission</label>
                    <div class="row">
                        @foreach ($permissions as $groupName=>$permission)
                            <div class="col-5">
                                <h4>{{$groupName}}</h4>
                                @foreach($permission as $item)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$item->id}}" name="permission_ids[]" >
                                        <label class="custom-control-label" for="customCheck1">{{$item->display_name}}</label>
                                    </div>
                                @endforeach
                            </div>
                    @endforeach
                    </div>
                    

                <button class="btn btn-icon btn-3 btn-primary" type="submit">
                    <span class="btn-inner--icon"><i class="material-icons">play_arrow</i></span>
                  <span class="btn-inner--text">Submit</span>
                </button>
            </form>
        </div>
        
    </div>
@endsection