<!-- Header
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar bg-dark navbar-default attr-border navbar-sticky bootsnav">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{ asset('front/img/logo.png')}}" class="logo" alt="Logo">
                            </a>
                        </div>
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-left" data-in="#" data-out="#">
                                <li>
                                    <a href="#">Solution</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Product</a>
                                    <ul class="dropdown-menu">
                                        @foreach (getProduct() as $product)
                                            <li><a href="{{url('detail/2/'.$product->id)}}">{{$product->subtitle}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Why Larch?</a>
                                </li>
                                <li>
                                    <a href="{{url('team')}}">Team</a>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->

                    </div>
                    <div class="col-md-4 text-right">
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <div class="btn-toolbar navbar-right" style="margin-top: 20px;">
                                <a type="button" class="btn btn-light border" target="_blank" href='https://wa.me/{{$dt_setting->whatsapp}}'>Contact us</a>
                                <button type="button" class="btn btn-theme" onclick="window.location='{{url('signup')}}'">Sign up</button>
                            </div>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div>

            </div>

            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title">Additional Links</h4>
                    <ul>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Check you SEO score</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h4 class="title">Contact Info</h4>
                    <div class="address">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span>Address</span> California, TX 70240
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> info@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> +123 456 7890
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget social">
                    <h4 class="title">Connect With Us</h4>
                    <ul class="link">
                        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Side Menu -->

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
