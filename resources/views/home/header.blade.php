<!-- header section starts -->
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{url('/')}}">
                <h2>Ecom</h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('show_order')}}">Order</a>
                    </li>

                    @auth
                    <!-- User is logged in, display username in cyan color and logout button in red -->
                    <li class="nav-item">
                        <span class="nav-link" style="color: blue;">Welcome, {{ Auth::user()->name }}</span>
                    </li>

                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>
                    </li>
                    @else
                    <!-- User is not logged in, display login and register buttons -->
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}" id="logincss">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- end header section -->