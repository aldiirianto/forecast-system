<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="/admin" class="nav-link">
        <i class="nav-icon fas fa-th"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-folder-open"></i>
        <p>
          Products
          <i class="right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('kategori.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Category Products</p>
          </a>
        </li>
      </ul> 
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('produk.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Products</p>
          </a>
        </li>
      </ul> 
    </li>
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-shopping-cart"></i>
        <p>
          Transactions
          <i class="right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('transaksi.index' )}}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Transactions</p>
          </a>
        </li>
      </ul>

    </li>

    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-list"></i>
        <p>
          Forecast
          <i class="right"></i>
        </p>
      </a>
      <!-- <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ URL::to('admin/laporan') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Forecast</p>
          </a>
        </li>
      </ul> -->
    </li>
    <li class="nav-item">
      <a href="{{ URL::to('admin/profil') }}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>
          User Profil
        </p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Sign Out
        </p>
      </a>
    </li>
  </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>