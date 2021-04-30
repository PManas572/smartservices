<header class="style2">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ url('/') }}" class="active" title="">
                    <!-- <img src="images/logo.png" alt="" class="hide-on-sticky"> -->
                    <!-- <img src="images/logo5.png" alt="" class="visible-on-sticky"> -->
                    <h3 class="text-white">Smart Services</h3>
                </a>
            </div>
            <!--logo end-->
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}" class="active">Home</a></li>
                    <li><a href="{{ url('/about') }}" title="">About Us</a></li>
                    <li><a href="{{ url('/services') }}" title="">Services</a></li>
                   <li><a href="{{ url('/contact') }}" title="">Contact</a></li>
                </ul>
            </nav>
            <!--navigation end-->
            <ul class="icons-list ml-auto">
                <li>
                    <a href="#" title="" class="menu-btn">
                        <i class="flaticon-044-menu"></i>
                    </a>
                </li>
            </ul>
            <!--icons-list end-->
        </div>
        <!--header-content end-->
    </div>
</header>
<!--header end-->

<div class="responsive-mobile-menu d-flex flex-wrap align-items-end">
    <a href="#" title="" class="close-menu">
        <img src="images/close.png" alt="">
    </a>
    <ul class="mb-menu">
        <li><a href="{{ url('/') }}" title="">Home</a></li>
        <li><a href="{{ url('/about') }}" title="">About</a></li>
        <li><a href="{{ url('/services') }}" title="">Services</a></li>      
        <li><a href="{{ url('/contact') }}" title="">Contact</a></li>
    </ul>
    <div class="clearfix"></div>
    <ul class="social-links">
        <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" title=""><i class="fab fa-dribbble"></i></a></li>
    </ul>
    <div class="rep-copyright">
        <p>Copyright © 2020 <a href="#" title="">TexTheme</a> All Rights Reserved.</p>
    </div>
    <!--rep-copyright end-->
</div>
<!--responsive-mobile-menu end-->