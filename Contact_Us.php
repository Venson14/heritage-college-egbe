<?php
$currentPage = 'contact';
include 'header.php';
?>

    <section class="contact-hero">
        <div class="hero-overlay"></div>
        <div class="container py-5 h-100">
            <div class="row align-items-center h-100 py-5 gy-4">
                <div class="col-lg-7 hero-content">
                    <div class="hero-badge reveal-fade-up">Contact Us • We’re here to help</div>
                    <h1 class="display-5 fw-bold reveal-fade-up text-white">Reach out to Heritage International College</h1>
                    <p class="lead hero-copy reveal-fade-up">Whether you are enquiring about admissions, school programs or visits, our team is ready to assist you.</p>
                    <div class="hero-highlights reveal-fade-up">
                        <span><i class="bi bi-telephone"></i> Quick Response</span>
                        <span><i class="bi bi-envelope"></i> Direct Support</span>
                        <span><i class="bi bi-geo-alt"></i> Campus Visits Welcome</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-card reveal-fade-up">
                        <h3 class="text-white">Contact Details</h3>
                        <ul class="list-unstyled mb-0 text-white">
                            <li><i class="bi bi-telephone-fill text-white"></i> +234 805 055 5480, +234 802 344 7265, +234 705 726 7215</li>
                            <li><i class="bi bi-envelope-fill text-white"></i> info@heritagecollege.edu.ng</li>
                            <li><i class="bi bi-geo-alt-fill text-white"></i> 8, Doyin Bolaji Close, Egbe, Kogi State</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row g-4">
            <div class="col-lg-6 reveal-slide-left">
                <div class="contact-card h-100">
                    <h3>Send us a message</h3>
                    <form class="mt-3 text-white container-fluid rounded" action="#">
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telephone</label>
                            <input type="tel" class="form-control" id="phone" placeholder="08123456789" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" class="form-control" rows="5" placeholder="Type your message here..."></textarea>
                        </div>
                        <button type="button" class="btn btn-primary mb-3">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 reveal-slide-left">
                <div class="contact-card h-100">
                    <h3>Opening Hours</h3>
                    <div class="row g-3 mt-2">
                        <div class="col-6 col-md-4">
                            <div class="hours-pill">Monday <span>8:00 AM - 5:00 PM</span></div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hours-pill">Tuesday <span>8:00 AM - 5:00 PM</span></div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hours-pill">Wednesday <span>8:00 AM - 5:00 PM</span></div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hours-pill">Thursday <span>8:00 AM - 5:00 PM</span></div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hours-pill">Friday <span>8:00 AM - 5:00 PM</span></div>
                        </div>
                        <div class="col-6 col-md-4">
                            <div class="hours-pill">Saturday <span>10:00 AM - 3:00 PM</span></div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h5>Quick Contact</h5>
                        <p class="mb-1"><i class="bi bi-telephone"></i> Bursar: +234 805 055 5480</p>
                        <p class="mb-1"><i class="bi bi-telephone"></i> VP-Academics: +234 705 726 7215</p>
                         <p class="mb-1"><i class="bi bi-telephone"></i> General enquiries: +234 802 344 7265</p>
                        <p class="mb-0"><i class="bi bi-envelope"></i> info@heritagecollegeegbe.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container pb-5">
        <div class="row g-4">
            <div class="col-lg-6 reveal-slide-left">
                <div class="contact-card h-100">
                    <h3>Connect with us</h3>
                    <div class="d-flex flex-wrap gap-3 mt-3">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 reveal-slide-left">
                <div class="contact-card h-100">
                    <h3>Our Location</h3>
                    <div class="map-wrapper mt-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.939116201968!2d5.500317473156315!3d8.208877891823303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1048444f00000001%3A0xa5ebc86d969d5c43!2sHeritage%20college!5e0!3m2!1sen!2sng!4v1783362324483!5m2!1sen!2sng" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <?php include 'footer.php';?>