 <div class="container">
     <img src="{{ asset('admin/assets/img/logo2.jpg') }}" height="100px" alt="">
     <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="navbar-collapse collapse" id="navbarContent">
         <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="/dashboard">Dashboard</a>
             </li>
             @if (auth()->user()->role == 'admin')
                 <li class="nav-item active">
                     <a class="nav-link" href="/dataUser">Data User</a>
                 </li>
             @endif
             @if (auth()->user()->role == 'user')
                 <li class="nav-item active">
                     <a class="nav-link" href="/perjalanan">Perjalanan</a>
                 </li>
             @endif
             <li class="nav-item active">
                 <a class="nav-link" href="/propil/edit/{{ Auth::user()->id }}">Profile</a>
             </li>
             <li class="nav-item active">
                 <a class="nav-link" href="/logout">Logout</a>
             </li>
         </ul>
     </div>

 </div>
