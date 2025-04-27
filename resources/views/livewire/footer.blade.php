<div>
    <!-- resources/views/components/FooterSection.blade.php -->
<section class="rts-footer-area rts-section-gapTop bg_footer-1 bg_image">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-area-footer-top">
                    <div class="single-contact-area-box">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h6 class="title">Call Us Now</h6>
                        <a href="tel:+918608905570">+91 86089 05570</a>
                        <a href="tel:+918939924280">+91 89399 24280</a>
                    </div>
                    <div class="single-contact-area-box">
                        <div class="icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h6 class="title">Office Time</h6>
                        <a href="#">Mon-Sat: 9:00 am to 6:00 pm <br> Sun: Closed</a>
                    </div>
                    <div class="single-contact-area-box">
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h6 class="title">Need Support</h6>
                        <a href="mailto:Srithiruthanifoundation@gmail.com">Srithiruthanifoundation@gmail.com</a>
                    </div>
                    <div class="single-contact-area-box">
                        <div class="icon">
                            <i class="fa-sharp fa-solid fa-location-dot"></i>
                        </div>
                        <h6 class="title">Our Address</h6>
                        <a href="#">R71/3, 1st Main Road, TNHB, <br> Ayapakkam, Chennai - 600077</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div class="row">
            <div class="col-lg-12">
                <div class="nav-footer-wrapper-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="footer-float-nav">
                                    <li><a href="">Home</a></li>
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Services</a></li>
                                    <li><a href="">Projects</a></li>
                                    <li><a href="">Blog</a></li>
                                    <li><a href="">Free Quote</a></li>
                                    <li><a href="">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-wrapper-left-one">
                    <a href="{{ route('index') }}" class="logo">
                        <img src="{{ asset('/assets/r_files/logo-1.webp') }}" alt="SRI Thiruthani Builders & Foundation">
                    </a>
                    <p class="disc">
                        SRI Thiruthani Builders & Foundation is dedicated to delivering high-quality construction and innovative design solutions, transforming your vision into reality with precision and care.
                    </p>
                    <div class="social-area-wrapper-one">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="footer-wrapper-right">
                    <div class="single-nav-area-footer use-link">
                        <h4 class="title">Useful Links</h4>
                        <ul>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>About Us</a></li>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>Projects</a></li>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>Services</a></li>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>Blog</a></li>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="single-nav-area-footer use-link">
                        <h4 class="title">Our Services</h4>
                        <ul>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>All Types of Building Construction</a></li>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>Interiors</a></li>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>Renovation</a></li>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>Architectural Planning (2D & 3D)</a></li>
                            <li><a href=""><i class="fa-regular fa-arrow-right-long"></i>Bank Loan Estimation</a></li>
                        </ul>
                    </div>
                    <div class="single-nav-area-footer news-letter">
                        <h4 class="title">Newsletter</h4>
                        <p>Stay updated with our latest projects and services.</p>
                        <form action="" method="POST">
                            @csrf
                            <input type="email" name="email" placeholder="Email Address" required>
                            <button class="btn-subscribe mt--15" type="submit">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full copyright-area-one">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-wrapper">
                                <p class="mb-0">Copyright &copy; {{ now()->year }} Sri Thiruthani Builders & Foundation. All Rights Reserved. <br> Developed By <a href="https://bumblebees.co.in" style="color:#FFCC00;" target="_blank"> Bumble Bees IT Solutions </a></p>
                                <div class="right-nav">
                                    <ul>
                                        <li><a href="">Terms of Use</a></li>
                                        <li><a href="">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
