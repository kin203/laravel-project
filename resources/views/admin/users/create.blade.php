@extends('admin.layout.app')
@section('title','Create User')
@section('content')
    <div class="card">
        <h1>
            Create User
        </h1>
        <div>
            <form action="{{route('users.store')}}" method="POST">
                @csrf

                <div class="col-md-6">
                    
                      <div class="row">
                        @error('image')
                          <span class="text-danger">{{$message}}</span>
                      @enderror
                    <div class="input-group input-group-outline my-3">
                      <label class="form-label">Profile Picture</label>
                    </div>
                    <input name="image" type="file" accept="image/*" class="form-control">
                        <div class="col-5">
                            <img src="" id="show-image" alt="">
                          </div>
                      
                    </div>
                    
                </div>


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
                    @error('email')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="text" value="{{old('email')}}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    @error('phone')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Phone</label>
                        <input name="phone" type="text" value="{{old('phone')}}" class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    @error('gender')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    <div class="input-group input-group-static mb-4">
                        <label for="exampleFormControlSelect1"  class="ms-0" >Gender</label>
                        <select name="gender" class="form-control">
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    @error('password')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                </div>


                <div class="col-md-6">
                    @error('address')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                    <div class="input-group input-group-outline my-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control">{{old('address')}} </textarea>
                    </div>
                </div>

                
                <div class="form-group">
                    <label >Roles</label>
                    <div class="row">
                        @foreach ($roles as $groupName=>$role)
                            <div class="col-5">
                                <h4>{{$groupName}}</h4>
                                @foreach($role as $item)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{$item->id}}" name="role_ids[]" >
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