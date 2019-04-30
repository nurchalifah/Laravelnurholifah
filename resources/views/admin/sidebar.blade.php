<ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
<<<<<<< HEAD
<<<<<<< HEAD

        @if(Auth::user()->akses == 'admin')
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.user')}}">
=======
      

        @if(Auth::user()->akses == 'admin')
        <li class="nav-item">
          <a href="nav-link" href="{{route('admin.user')}}">
>>>>>>> c3ef07fcdcda99f9c9a154becd23aaad128a8511
=======
      

        @if(Auth::user()->akses == 'admin')
        <li class="nav-item">
          <a href="nav-link" href="{{route('admin.user')}}">
>>>>>>> c3ef07fcdcda99f9c9a154becd23aaad128a8511
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
          </a>
        </li>
        @endif


<<<<<<< HEAD
</ul>
=======
      </ul>
>>>>>>> c3ef07fcdcda99f9c9a154becd23aaad128a8511
