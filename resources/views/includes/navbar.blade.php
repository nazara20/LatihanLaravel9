<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
        <div class="row">          
            <a class="navbar-brand" href="#">
              <img src="{{ asset('assets/image/logo-kampus-merdeka.png') }}" alt="" width="70px">
            </a>

        </div>
          <div class="col">
              <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav  me-auto mb-2 mb-lg-0">   
                  <li class="nav-item">
                    <a class="nav-link {{  (request()->routeIs('beranda')) ? 'active' : ''  }} " aria-current="page" href="{{ route('beranda') }}">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  (request()->routeIs('buku')) ? 'active' : ''  }} " href="{{ route('buku') }}">Buku</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{  (request()->routeIs('kategori')) ? 'active' : ''  }} " href="{{ route('kategori') }}">Kategori</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       John Doe
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="#">Dashboard</a></li>
                      <li><a class="dropdown-item" href="#">Profile </a></li>
                      <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                  </li>
                </ul>
              
              </div>
              
          </div>
    </div>
    
</div>
  </nav>
