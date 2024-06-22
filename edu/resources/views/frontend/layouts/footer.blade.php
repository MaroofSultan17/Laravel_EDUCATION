<footer class="site_footer">
    <div class="footer_top">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col col-lg-3 col-md-6 col-sm-6">
                    <div class="site_logo">
                        <a class='site_link' href='index.html'>
                            <img src="{{ url('frontend/images/logo/site_logo_white.png') }}"
                                alt="Education, Online Course, LMS Creative">
                        </a>
                    </div>
                    <p>
                        Not everyone can afford to quit their job to learn full-time. We’re here to make coding
                        more flexible and accessible
                    </p>
                    <ul class="social_icon unordered_list">
                        <li>
                            <a href="{{ constant('sitefacebook') }}">
                                <i class="fab fa-facebook-f"></i>
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ constant('sitetwitter') }}">
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ constant('sitelinkedin') }}">
                                <i class="fab fa-linkedin-in"></i>
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ constant('siteyoutube') }}">
                                <i class="fab fa-youtube"></i>
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col col-lg-2 col-md-6 col-sm-6">
                    <div class="widget text-center">
                        <h3 class="widget_title">Resources</h3>
                        <ul class="page_list unordered_list_block">
                            <li><a href="#!">Projects</a></li>
                            <li><a href="#!">Challenges</a></li>
                            <li><a href="#!">Pro Membership</a></li>
                            <li><a href="#!">For Business</a></li>
                            <li><a href="#!">Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-6 col-sm-6">
                    <div class="widget text-center">
                        <h3 class="widget_title">Information</h3>
                        <ul class="page_list unordered_list_block">
                            <li><a href="#!">Privacy Policy</a></li>
                            <li><a href="#!">Terms & Conditions</a></li>
                            <li><a href="#!">FAQ's</a></li>
                            <li><a href="#!">Contact Us</a></li>
                            <li><a href="#!">Forums</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col col-lg-2 col-md-6 col-sm-6">
                    <div class="widget text-center">
                        <h3 class="widget_title">Courses</h3>
                        <ul class="page_list unordered_list_block">
                            <li><a href="#!">Web Development</a></li>
                            <li><a href="#!">Data Science</a></li>
                            <li><a href="#!">Machine Learning</a></li>
                            <li><a href="#!">Developer Tools</a></li>
                            <li><a href="#!">Web Design</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col col-lg-2 col-md-6 col-sm-6">
                    <div class="widget">
                        <h3 class="widget_title">Download Now</h3>
                        <ul class="store_btns unordered_list_block">
                            <li>
                                <a href="https://www.apple.com/app-store/" target="_blank">
                                    <img src="{{ url('frontend/images/app_store.png') }}" alt="App Store">
                                </a>
                            </li>
                            <li>
                                <a href="https://play.google.com/store/" target="_blank">
                                    <img src="{{ url('frontend/images/google_play.png') }}" alt="Google Play">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer_bottom" style="margin-top: -30px">
            <div class="container text-center mt-2" style="margin-bottom: -40px">
                <p> © 2024 Developed by <a href="{{ env('GITHUB ') }}" style="color: #1c45ef;">Maroof
                        Sultan</a> Under the Supervision of<br><a style="color: #1c45ef;" href="{{ env('GITHUB') }}">Mr.
                        Muhammad Jamil</a>
                </p>
            </div>
        </div>
    </div>
    </div>
</footer>
</div>
<script src="{{ url('frontend/js/jquery.min.js') }}"></script>
<script src="{{ url('frontend/js/popper.min.js') }}"></script>
<script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ url('frontend/js/bootstrap-dropdown-ml-hack.js') }}"></script>
<script src="{{ url('frontend/js/cursor.js') }}"></script>
<script src="{{ url('frontend/js/slick.min.js') }}"></script>
<script src="{{ url('frontend/js/tilt.min.js') }}"></script>
<script src="{{ url('frontend/js/parallax.min.js') }}"></script>
<script src="{{ url('frontend/js/parallax-scroll.js') }}"></script>
<script src="{{ url('frontend/js/wow.min.js') }}"></script>
<script src="{{ url('frontend/js/magnific-popup.min.js') }}"></script>
<script src="{{ url('frontend/js/waypoint.js') }}"></script>
<script src="{{ url('frontend/js/counterup.min.js') }}"></script>
<script src="{{ url('frontend/js/main.js') }}"></script>
</body>

</html>
