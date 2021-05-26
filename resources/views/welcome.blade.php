@extends('layout')

@section('content')
    <!-- Start Loading -->
    
    <!-- end header -->

    <!-- start main content -->
    <main class="main-container">
        <!-- new collection directory -->
        @include('home/_containt')
        <!-- end new collection directory -->


        <!-- Shop Filter
        ============================================= -->
        @include('home/_allsell')


        <!-- Start Our Shop Items -->

        

        


        <section class="block gray no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box no-margin go-simple">
                            <div class="mini-service-sec">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i class="fa fa-paper-plane"></i>
                                            <div class="mini-service-info">
                                                <h3>Worldwide Delivery</h3>
                                                <p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i class="fa  fa-newspaper-o"></i>
                                            <div class="mini-service-info">
                                                <h3>Worldwide Delivery</h3>
                                                <p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i class="fa fa-medkit"></i>
                                            <div class="mini-service-info">
                                                <h3>Friendly Stuff</h3>
                                                <p>unc tincidunt, on cursusau gmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mini-service">
                                            <i class="fa  fa-newspaper-o"></i>
                                            <div class="mini-service-info">
                                                <h3>24/h Support</h3>
                                                <p>unc tincidunt, on cursusa ugmetus, lorem Hore</p>
                                            </div>
                                        </div><!-- Mini Service -->
                                    </div>
                                </div>
                            </div><!-- Mini Service Sec -->
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
    <!-- end main content -->



    <div class="container">

    </div>



    <!-- start footer area -->
    <footer class="footer-area-content">

        <div class="container">
            <div class="footer-wrapper style-3">
                <div class="type-1">
                    <div class="footer-columns-entry">
                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="text-white">BIG SHOP</h3>
                                <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod.</div>
                                <div class="footer-address">30 South Avenue San Francisco<br> Phone: +123 123 123 123<br>
                                    Email: <a href="mailto:Support@demo.com">Support@demo.com</a><br>
                                    <a target="_blank" href="http://iglyphic.com/"><b>www.bigshop.com</b></a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h3 class="column-title">Customer Care</h3>
                                <ul class="column">
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Shipping Charge</a></li>
                                    <li><a href="#">Shipping Track</a></li>
                                    <li><a href="#">Payment Method</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h3 class="column-title">Your Account</h3>
                                <ul class="column">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Wishlist</a></li>
                                    <li><a href="#">Affiliate Dashboard</a></li>
                                    <li><a href="#">Billing Address</a></li>
                                    <li><a href="#">Cancel Order</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="col-md-2 col-sm-4">
                                <h3 class="column-title">Shop Information</h3>
                                <ul class="column">
                                    <li><a href="#">About Company</a></li>
                                    <li><a href="#">Become Member</a></li>
                                    <li><a href="#">License Details</a></li>
                                    <li><a href="#">Custom Service</a></li>
                                    <li><a href="#">Tax Information</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Job & Vacancies</a></li>
                                </ul>
                                <div class="clear"></div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-md-3">
                                <h3 class="column-title">Company working hours</h3>
                                <div class="footer-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod.</div>
                                <div class="footer-description">
                                    <b>Monday-Friday:</b> 8.30 a.m. - 5.30 p.m.<br>
                                    <b>Saturday:</b> 9.00 a.m. - 2.00 p.m.<br>
                                    <b>Sunday:</b> Closed
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>
    <!-- footer area end -->


    
@endsection
