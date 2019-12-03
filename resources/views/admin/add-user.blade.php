@extends('layouts.admin')
@section('content')
<div class="col-md-12">
            @if(session('success'))
                <div  id ="mailSuccess" class="alert alert-success" role="alert">
                    <strong><i style="color: #fff;" class="fa fa-check"></i> {{ session('success') }}</strong>
                </div>
                @endif
     <div class="tableContainer">
           <h4 class="title">Add New User</h4>
            <div class="infoContainer">
                <form method="POST" action="{{route('admin.addnewuser')}}" class="form">
                        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                           <input id="name" type="text" placeholder="Name" class="inputField @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <input id="email" placeholder="Email" type="email" class="inputField @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>
                    </div>    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                               <input id="password" placeholder="Password" type="password" class="inputField @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="inputField" name="password_confirmation" required autocomplete="new-password">
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