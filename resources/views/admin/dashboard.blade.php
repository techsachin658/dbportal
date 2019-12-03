@extends('layouts.admin')
@section('content')
<div class="height30px"></div>
<div class="row">
<div class="col-md-12">
<form action="">
<div class="col-md-7">
  <div class="selectContainer">
   <span><strong class="dboard">Dashboard</strong></span>
      <span><select class="inputfield" id="selectRole" style="background-image:url({{asset('images/arr.png')}});background-position:97%">
        <option>Last 60 Days</option>
        <option>Last 30 Days</option>
        <option>Last 15 Days</option>
        <option>Last 7 Days</option>
      </span>
    </select>
  </div>
</div>
</form>

 
 </div>
</div>
<div class="height30px"></div>
<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
             
              <div class="cardContainer">
                <div class="row">
                  <div class="LeftDiv">
                    <h4 class="title">$35,890 / 255 (CH)</h4>
                    <small>Total Load</small>
                  </div>
                  <div class="RightDiv">
                      <div class="iconC">
                       <i class="fa fa-upload text-success pull-right" aria-hidden="true"></i>
                      </div>                    
                  </div>
                </div>
              </div>
               
              </div>
           
            <div class="col-lg-4 col-md-6 col-sm-6">
              
              <div class="cardContainer">
                <div class="row">
                  <div class="LeftDiv">
                    <h4 class="title">$21,324/ 155 (CH)</h4>
                    <small>Total Spend</small>
                  </div>
                  <div class="RightDiv">
                      <div class="iconC">
                       <i class="fa fa-usd pull-right text-warning" aria-hidden="true"></i>
                      </div>                    
                  </div>
                </div>
              </div>
         
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
             
              <div class="cardContainer">
                <div class="row">
                  <div class="LeftDiv">
                    <h4 class="title">2532</h4>
                    <small>New Accounts</small>
                  </div>
                  <div class="RightDiv">
                      <div class="iconC">
                       <i class="fa fa-user-circle text-primary pull-right" aria-hidden="true"></i>
                      </div>                    
                  </div>
                </div>
              </div>
            </div>
</div>
   <div class="height30px"></div>
   <div class="row">
    <div class="col-md-12">
    <h4 class="title">Performance</h4>
    <div class="chartImage">
      <img src="{{asset('images/charts.png')}}" class="img img-responsive" alt="">   
      </div>  
    </div>
  
  </div>   
  <div class="height30px"></div>
<div class="row">
         <div class="col-md-12">
              <div class="tableContainer">
               <div class="titleContainer">
                  <h4 class="title">Recent Users</h4>
               </div>
                 
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="">
                       <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th></th>
                       </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach($users as $user): ?>
                          <tr>
                            <td><?=$i++;?></td>
                            <td><?=$user->name?></td>
                            <td style="color:grey"><?=$user->email?></td>
                            <td style="color:grey"><?php if($user->is_Admin == 1){echo "Admin";}else{echo "Basic User";}?></td>
                          <td ><a href="/show-user/{{$user->id}}" class="text-danger">Details</a></td>                      
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
            
         </div> 
</div>      
@endsection

