@extends('layouts.admin')
@section('content')
    <div class="col-md-12">
@if(session('success'))
                <div  id ="mailSuccess" class="alert alert-success" role="alert">
                    <strong><i style="color: #fff;" class="fa fa-check"></i> {{ session('success') }}</strong>
                </div>
                @endif
            
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
                        <th class="text-right">Operations</th>
                        </tr>
                       </thead>
                      <tbody>
                        <?php $i = 1; foreach($users as $user): ?>
                          <tr>
                            <td><?=$i++;?></td>
                            <td><?=$user->name?></td>
                            <td><?=$user->email?></td>
                            <td><?php if($user->is_Admin == 1){echo "Super Admin";}else{echo "Basic User";}?></td>
                           
                               <td class="td-actions text-right">
                                   <span class="insideTd">   
                            <form onsubmit="return confirm('Are you sure you want to delete this user?');" action="{{ route('user.destroy',$user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" rel="tooltip" title="Delete Raffle" class="btn btn-danger  btn-sm roundBtn"><i class="material-icons myIcon">close</i></button>
                                </form>
                              </span>
                              <span class="insideTd">
                                <?php if($user->is_Admin == 0): ?>
                                    <a href="/user/{{$user->id}}/edit" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                      <i class="material-icons">edit</i>
                                    </a>
                                  <?php endif;?>
                              </span>
                            
                            </td>
                            
                          </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            
@endsection
