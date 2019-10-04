<ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>

        @if(Auth::user()->akses == 'admin')
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.user')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>User</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.kategori')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Kategori</span>
          </a>
        </li>

                <li class="nav-item">
          <a class="nav-link" href="{{route('admin.produk')}}">
            <i class="fas fa-fw fa-cube"></i>
            <span>Produk</span>
          </a>
        </li>
        @endif


</ul>