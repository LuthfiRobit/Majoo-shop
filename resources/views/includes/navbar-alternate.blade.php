<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
            <a href="{{route('home')}}" class="navbar-brand">
                <img src="https://majoo.id/assets/dist/img/majoo@2x.png" alt="">
            </a>
        </div>
        <ul class="navbar-nav mr-auto d-none d-lg-block">
            <li>
                <span class="text-muted">
                    | &nbsp; Beyond The World Explore
                </span>
            </li>
        </ul>
        <form class="form-inline d-sm-block d-md-none" action="{{url('logout')}}" method="POST">
            @csrf
            <button class="btn btn-login my-2 my-sm-0" type="submit">Keluar</button>
        </form>
        <!-- Desktop Button -->
        <div class="copyright text-center my-auto mr-3">
            <span>Hello {{Auth::user()->name}}</span>
        </div>
        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{url('logout')}}" method="POST">
            @csrf
            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">Keluar</button>
        </form>
    </nav>
</div>