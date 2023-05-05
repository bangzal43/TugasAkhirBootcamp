 <ul class="nav">
          <li class="active ">
            <a href="{{url('dashboard')}}">
              <i class="glyphicon glyphicon-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{url('buku')}}">
              <i class="glyphicon glyphicon-book"></i>
              <p>Buku</p>
            </a>
          </li>
          <li>
            <a href="{{url('kategori')}}">
              <i class="glyphicon glyphicon-list"></i>
              <p>Kategori</p>
            </a>
          </li>
          <li>
            <a href="{{url('peminjaman')}}">
              <i class="glyphicon glyphicon-bookmark"></i>
              <p>Peminjaman</p>
            </a>
          </li>
          <li>
            <a href="{{url('pengembalian')}}">
              <i class="glyphicon glyphicon-tasks"></i>
              <p>Pengembalian</p>
            </a>
          </li>
          <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="glyphicon glyphicon-user"></i>
                  <snap>Pengguna</snap>
                    <span class="d-lg-none d-md-block"></span>
                </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{url('mahasiswa')}}">Mahasiswa</a>
                  <a class="dropdown-item" href="{{url('petugas')}}">Petugas</a>
            </div>
          </li>
        </ul>