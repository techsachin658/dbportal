<div class="sidebar" >
    <div class="logo">
    <a href="{{route('dashboard')}}" class="simple-text logo-normal">
          Portal
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active ">
          <a class="nav-link" href="{{route('dashboard')}}">
             <i class="material-icons">insert_chart</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('add-user') }}" class="nav-link">
              <i class="material-icons">add_circle</i>
              <p>Add User</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('user')}}">
              <i class="material-icons">person</i>
              <p>Users List</p>
            </a>
          </li>
          </ul>
      </div>
    </div>