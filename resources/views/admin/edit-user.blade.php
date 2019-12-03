@extends('layouts.admin')
@section('content')
    <div class="col-md-12">
        <div class="tableContainer">
            <h4 class="title">Update User Profile</h4>
            <div class="infoContainer">
                <form method="post" action="{{ route('user.update', $user->id) }}" class="form">
                       @csrf
                        @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" placeholder="Name" name="name" value="<?=$user->name?>" class="inputField" required>
                            </div>
                        </div>
                       <div class="col-md-6">
                            <div class="form-group">
                              <input type="email" placeholder="Email Address" name="email" value="<?=$user->email?>" class="inputField" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="role" id="selectRole" class="inputField" style="background-image:url({{asset('images/arr.png')}})">
                                    <option selected  value="<?=$user->is_Admin?>"><?= ($user->is_Admin ==1)?"Super Admin":"Basic User"; ?></option>
                                    <option value="0">Basic User</option>
                                    <option value="1">Admin User</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-default myBtn">
                                    {{ __('Add User') }}
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            
        </div>
    </div>
@endsection