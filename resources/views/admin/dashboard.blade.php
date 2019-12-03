@extends('layouts.admin')
@section('content')
<div class="height30px"></div>
<div class="row">
<div class="col-md-2"><strong>Dashboard</strong></div>
 <div class="col-lg-5 col-md-6 col-sm-6">
    
      <select class="" id="sel1">
        <option>Last 60 Days</option>
        <option>Last 30 Days</option>
        <option>Last 15 Days</option>
        <option>Last 7 Days</option>
    </select>

 
 </div>
</div>
<div class="height30px"></div>
<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
             
              <div class="cardContainer">
                <div class="row">
                  <div class="col s10">
                    <h4>$35,890 / 255 (CH)</h4>
                    <small>Total Load</small>
                  </div>
                  <div class="col s20">
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
                  <div class="col s10">
                    <h4>$21,324/ 155 (CH)</h4>
                    <small>Total Spend</small>
                  </div>
                  <div class="col s2">
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
                  <div class="col s10">
                    <h4>2532</h4>
                    <small>New Accounts</small>
                  </div>
                  <div class="col s2">
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
    <h5>Performance</h5>
    <div class="chartImage">
      <img src="{{asset('images/charts.png')}}" class="img img-responsive" alt="">   
      </div>  
    </div>
  
  </div>   
  <div class="height30px"></div>
<div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Users</h4>
                 </div>
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="">
                       <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                       </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; foreach($users as $user): ?>
                          <tr>
                            <td><?=$i++;?></td>
                            <td><?=$user->name?></td>
                            <td><?=$user->email?></td>
                            <td class="text-danger"><?php if($user->is_Admin == 1){echo "Admin";}else{echo "Basic User";}?></td>
                                                   
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>      
@endsection

