@extends('layouts.admin')
@section('content')
    <div class="col-md-12">
        <div class="tableContainer">
            <h4 class="title">User Profile</h4>
            <div class="infoContainer">
            <h3 class="subTitle">User Name : {{$user->name}}</h3>
            <h3 class="subTitle">Email : {{$user->email}}</h3>
            <h3 class="subTitle">Role : <?= ($user->is_Admin ==1)?"Super Admin":"Basic User"; ?></h3>
            </div>
            
        </div>
    </div>
@endsection
