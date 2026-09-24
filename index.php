    <?php
    $currentPage = 'home';
    include 'header.php'; 
    ?>
    <section class="Hero-Page container-fluid">
    <div class="hero-overlay"></div>
    <div class="d-flex flex-column align-items-start justify-content-center h-100 custom-container position-relative hero-content">
                <div class="hero-badge reveal-fade-up">Motto • Academic Excellence Through Discipline</div>
                <h1 class="display-4 fw-bold lh-1 text-light pt-3 reveal-fade-up">
                    Welcome to Heritage International College Egbe
                </h1>
                <p class="lead text-light reveal-fade-up hero-copy">
                    Discover a vibrant learning community where academic excellence, strong values and future-focused opportunities come together for every learner.
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3 reveal-fade-up">
                    <a href="./Admissions.php" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold hero-btn hero-btn-primary">Start Your Application</a>
                    <a href="./Academics.php" class="btn btn-outline-light btn-lg px-4 hero-btn">Explore Our Programs</a>
                </div>
                <div class="hero-highlights reveal-fade-up">
                    <span><i class="bi bi-check2-circle"></i> Dedicated Teachers</span>
                    <span><i class="bi bi-check2-circle"></i> Modern Learning</span>
                    <span><i class="bi bi-check2-circle"></i> Trusted Community</span>
                </div>
    </div>

   </section>
    <section class="why-choose-section py-5 reveal-fade-up">
        <div class="container">
            <div class="section-heading text-center mb-5">
                <p class="eyebrow">Why Heritage</p>
                <h2>Learning that builds confident, future-ready students</h2>
                <p>We combine strong academics, practical skills and a caring environment to help every child thrive.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card feature-card h-100 border-0 text-center">
                        <div class="card-body">
                            <div class="feature-icon"><i class="bi bi-mortarboard-fill"></i></div>
                            <h5 class="card-title">Academic Excellence</h5>
                            <p class="card-text">Structured lessons and strong support help learners achieve their best.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card feature-card h-100 border-0 text-center">
                        <div class="card-body">
                            <div class="feature-icon"><i class="bi bi-people-fill"></i></div>
                            <h5 class="card-title">Student Support</h5>
                            <p class="card-text">Our mentors and teachers guide each student with care and attention.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card feature-card h-100 border-0 text-center">
                        <div class="card-body">
                            <div class="feature-icon"><i class="bi bi-building"></i></div>
                            <h5 class="card-title">Modern Facilities</h5>
                            <p class="card-text">A vibrant campus designed to encourage learning, creativity and growth.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card feature-card h-100 border-0 text-center">
                        <div class="card-body">
                            <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                            <h5 class="card-title">Safe Learning</h5>
                            <p class="card-text">A secure and welcoming environment where students feel valued every day.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section py-4">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 g-3 text-center stat-items">
                <div class="col">
                    <div class="stat-item">
                        <h3 data-target="1000" data-suffix="+">0</h3>
                        <p>Students</p>
                    </div>
                </div>
                <div class="col">
                    <div class="stat-item">
                        <h3 data-target="50" data-suffix="+">0</h3>
                        <p>Teachers</p>
                    </div>
                </div>
                <div class="col">
                    <div class="stat-item">
                        <h3 data-target="20" data-suffix="+">0</h3>
                        <p>Years</p>
                    </div>
                </div>
                <div class="col">
                    <div class="stat-item">
                        <h3 data-target="100" data-suffix="%">0</h3>
                        <p>Commitment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="programs-section py-5 container-fluid bg-light reveal-slide-left">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <p class="eyebrow text-muted">Programs and Academics</p>
                <h2 class="text-dark">Tailored learning pathways for every stage</h2>
                <p class="text-muted">Explore our academic offerings designed to inspire curiosity and build strong foundations.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col reveal-fade-up">
                    <div class="card program-card h-100 text-center border-0 overflow-hidden">
                        <img src="./Images/Page Image/Junior SSS.jpg" alt="Junior secondary learners" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Junior Secondary School</h5>
                            <p class="card-text">A strong foundation for young learners through guided academic and personal growth.</p>
                            <a href="./Admissions.php" class="btn btn-outline-light mt-3">Inquire More</a>
                        </div>
                    </div>
                </div>

                <div class="col reveal-fade-up">
                    <div class="card program-card h-100 text-center border-0 overflow-hidden">
                        <img src="./Images/Page Image/Secondary School Student.jpg" alt="Senior secondary learners" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Senior Secondary School</h5>
                            <p class="card-text">Focused preparation for examinations, leadership and future career opportunities.</p>
                            <a href="./Admissions.php" class="btn btn-outline-light mt-3">Inquire More</a>
                        </div>
                    </div>
                </div>

                <div class="col reveal-fade-up">
                    <div class="card program-card h-100 text-center border-0 overflow-hidden">
                        <img src="./Images/Science Student.png" alt="STEM learning" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">STEM Programs</h5>
                            <p class="card-text">Hands-on projects and modern learning experiences in science, technology and maths.</p>
                            <a href="./Admissions.php" class="btn btn-outline-light mt-3">Inquire More</a>
                        </div>
                    </div>
                </div>

                <div class="col reveal-fade-up">
                    <div class="card program-card h-100 text-center border-0 overflow-hidden">
                        <img src="./Images/Home Management Practical 1.png" alt="Home economics learning" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Home Economics</h5>
                            <p class="card-text">Practical skills and creativity that prepare students for everyday life and careers.</p>
                            <a href="./Admissions.php" class="btn btn-outline-light mt-3">Inquire More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="admissions-cta py-5 reveal-fade-up">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <p class="eyebrow">Admissions</p>
                    <h2>Start your journey with Heritage International College</h2>
                    <p>Join a community where academic excellence, values and opportunities come together for your child’s future.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="./Admissions.php" class="btn btn-light btn-lg px-4 fw-bold">Apply Now</a>
                    <a href="./Contact_Us.php" class="btn btn-outline-light btn-lg px-4 mt-3 mt-lg-0 ms-lg-2">Visit Us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section py-5 reveal-fade-up">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <p class="eyebrow">Moments from campus</p>
                <h2 class="text-dark">Photo Gallery</h2>
                <p class="text-muted">A glimpse into our vibrant classrooms, events and school life.</p>
            </div>
       <div id="photoGalleryCarousel" class="carousel slide shadow" data-bs-ride="carousel" style="max-width: 800px; margin: 0 auto;">
            <div class="carousel-inner rounded" style="height: 400px;">
                <div class="carousel-item active h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                    <img src="./Images/School Building.png" alt="School Building" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                    <img src="./Images/Pupils.jpg" alt="Pupils" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>

                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                    <img src="./Images/Student Presentation.jpg" alt="Student Presentation" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                   <img src="./Images/Cultural Day 2.jpg" alt="Cultural Day" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                   <img src="./Images/Graduating Students.jpg" alt="Graduating Students" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                    <img src="./Images/Inter House 6.jpg" alt="Inter House" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                    <img src="./Images/1st SP Boy Graduation.jpg" alt="First Senior Prefect Boy" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                    <img src="./Images/Home Management Practical.png" alt="Home Management Practical" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                   <img src="./Images/Students during a chapel function.jpg" alt="Students during a chapel function" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>
                <div class="carousel-item h-100">
                    <div class="d-flex justify-content-center align-items-center h-100 text-white fs-4">
                   <img src="./Images/Social Night.jpg" alt="Social Night" class="img-fluid rounded" style="max-height: 100%; max-width: 100%;">
                    </div>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#photoGalleryCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>  
        </div>

    </section>
    <section class="container-fluid testimonies py-5 reveal-fade-up">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <p class="eyebrow">What families say</p>
                <h2 class="text-dark">Testimonies</h2>
                <p class="text-muted">Parents and students share the impact of learning at Heritage.</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col reveal-slide-left">
                    <div class="card testimonial-card h-100 border-0">
                        <div class="card-body">
                            <p class="card-text">"The foundation of my journey was forged in Heritage College, where heritage became my foundation, built upon the solid rock of excellence through discipline. Those formative years taught me that success is the fruit of focus and perseverance, a bedrock I carry into everything I do today."</p>
                            <p class="card-subtitle mt-3"><strong>Adewumi Precious Oreoluwa</strong></p>
                            <p class="card-subtitle">- HC 620</p>
                        </div>
                    </div>
                </div>
                <div class="col reveal-slide-left">
                    <div class="card testimonial-card h-100 border-0">
                        <div class="card-body">
                            <p class="card-text">"I am grateful for the opportunities and support I received at this institution. It has shaped my future in meaningful ways."</p>
                            <p class="card-subtitle mt-3">- Jane Smith</p>
                        </div>
                    </div>
                </div>
                <div class="col reveal-slide-left">
                    <div class="card testimonial-card h-100 border-0">
                        <div class="card-body">
                            <p class="card-text">"The faculty and staff are incredibly dedicated to student success. I feel supported and inspired every day."</p>
                            <p class="card-subtitle mt-3">- Mike Johnson</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row d-flex justify-content-center align-items-center m-3 reveal-fade-up">
        <div class="col-md-6 reveal-fade-up">
             <form action="#" class="form-control m-auto m-5 p-5 reveal-fade-up">
                <h3 class="text-light text-center">Subscribe to Our Newsletter</h3>
                <div class="mb-3">
                    <label for="name" class="form-label text-light">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-light">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
                </div>
                <div class="mb-3">
                    <label for="telephone" class="form-label text-light">Telephone</label>
                    <input type="tel" class="form-control" id="telephone" placeholder="08123456789" required>
                </div>
                <button type="submit" class="btn btn-outline-light">Subscribe</button>
            </form>
        </div>
            <div class="col-md-6 reveal-fade-up">
                <div class="card m-auto mt-5 mb-5 reveal-fade-up">
                    <img src="./Images/Baptism 3.jpg" alt="Cross-section-graduating-students" class="card-img-top">
                    <div class="card-body">
                    <h5 class="card-title text-light">Faith & Spiritual Growth</h5>
                    <p class="card-text text-light">
                        We nurture moral integrity and spiritual grounding alongside academic excellence. Through meaningful traditions and shared faith experiences, we encourage students to build a strong personal foundation rooted in truth, devotion, and community.
                    </p>
                </div>
            </div>

        </div>
    </div>

<?php include 'footer.php'; ?>
        