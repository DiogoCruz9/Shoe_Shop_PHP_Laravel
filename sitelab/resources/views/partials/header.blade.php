<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('product.index')}}">StandUP</a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form action="{{ route('product.search') }}" method="post" class="navbar-form navbar-left " role = "search">
               @csrf
                <div class="form-group">
                    <input type="text"  class="form-control" placeholder="Search" name="search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>

            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="{{('contact')}}">
                        <i class="fas fa-envelope"></i> Contact Us
                    </a>
                </li>

                <li>
                    <a href="{{route('product.shoppingCart')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrinho
                        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">

                        @if(Auth::check())
                            <li><a href="{{route('user.profile')}}">User Profile</a></li>

                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('user.logout')}}">Logout</a></li>
                            @else
                            <li><a href="{{route('user.signup')}}">Sign Up</a></li>
                            <li><a href="{{route('user.signin')}}">Sign In</a></li>
                            @endif
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>




