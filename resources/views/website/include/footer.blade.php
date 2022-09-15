<footer class="footer bg-dark">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Address:</span>123 Street Name, City, England
                            </li>
                            <li>
                                <span class="contact-info-label">Phone:</span><a href="tel:">(123)
                                    456-7890</a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">mail@example.com</a>
                            </li>
                            <li>
                                <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                            </li>
                        </ul>
                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Pages</h4>

                        <ul class="links">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('categories') }}">Categories</a></li>
                            <li><a href="{{url('/products')}}">Shop</a></li>
                            <li><a href="{{ url('/about-us') }}">About Us</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                            <li><a href="{{ url('user-dashboard') }}">My Account</a></li>

                            <li><a href="{{ url('cart') }}">Cart</a></li>
                            <li><a href="{{ url('login') }}">Login</a></li>
                            <li><a href="{{ url('/privacy-and-policy') }}">Privacy</a></li>
                        </ul>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Popular Categories</h4>

                        <div class="tagcloud">
                            @foreach ($categories as $catlist )
                            <a href="{{url('category=' .$catlist->name)}}">{{$catlist->name}}</a>
                            @endforeach

                        </div>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Subscribe newsletter</h4>
                        <p>Get all the latest information on events, sales and offers. Sign up for newsletter:
                        </p>
                        <form action="#" class="mb-0">
                            <input type="email" class="form-control m-b-3" placeholder="Email address" required>

                            <input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
                        </form>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .footer-middle -->

    <div class="container">
        <div class="footer-bottom">
            <div class="container d-sm-flex align-items-center">
                <div class="footer-left">
                    <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                </div>

                <div class="footer-right ml-auto mt-1 mt-sm-0">
                    <div class="payment-icons">
                        <span class="payment-icon visa" style="background-image: url({{asset('website/assets/images/payments/payment-visa.svg')}})"></span>
                        <span class="payment-icon paypal" style="background-image: url({{asset('website/assets/images/payments/payment-paypal.svg')}})"></span>
                        <span class="payment-icon stripe" style="background-image: url({{asset('website/assets/images/payments/payment-stripe.png')}})"></span>
                        <span class="payment-icon verisign" style="background-image:  url({{asset('website/assets/images/payments/payment-verisign.svg')}})"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .footer-bottom -->
    </div>
    <!-- End .container -->
</footer>
<!-- End .footer -->
