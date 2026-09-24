<?php
$currentPage = 'academics';
include 'header.php';
?>
    <section class="academics-hero">
        <div class="hero-overlay"></div>
        <div class="container py-5 h-100">
            <div class="row align-items-center h-100 py-5 gy-4">
                <div class="col-lg-7 hero-content">
                    <div class="hero-badge reveal-fade-up">Academics • Excellence in every lesson</div>
                    <h1 class="display-5 fw-bold reveal-fade-up text-light">A strong academic journey for every learner</h1>
                    <p class="lead hero-copy reveal-fade-up">Our curriculum is designed to build knowledge, confidence and real-world skills from junior secondary through senior secondary studies.</p>
                    <div class="d-flex flex-wrap gap-2 reveal-fade-up">
                        <a href="#programs" class="btn hero-btn hero-btn-primary">Explore Programs</a>
                        <a href="#activities" class="btn hero-btn btn-outline-light">View Activities</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-card reveal-fade-up">
                        <h3 class="text-light">What students gain</h3>
                        <ul class="list-unstyled mb-0 text-light">
                            <li><i class="bi bi-check-circle-fill"></i> Strong subject foundations</li>
                            <li><i class="bi bi-check-circle-fill"></i> University-entry preparation</li>
                            <li><i class="bi bi-check-circle-fill"></i> Balanced learning and growth</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="programs" class="container py-5">
        <div class="section-heading text-center mb-4">
            <p class="eyebrow">Our Academic Program</p>
            <h2>Structured pathways for success</h2>
            <p class="text-muted">A carefully designed curriculum that supports learners at every stage of school life.</p>
        </div>

        <div class="row g-4 reveal-slide-left">
            <div class="col-lg-6">
                <div class="academic-card h-100">
                    <h3>Junior Secondary (JSS 1-3)</h3>
                    <p>Our junior secondary program focuses on a broad curriculum including Mathematics, English, Basic Science and Pre-Vocational studies to build a strong foundation.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle"></i> Holistic skill development</li>
                        <li><i class="bi bi-check-circle"></i> Solid grounding in core subjects</li>
                        <li><i class="bi bi-check-circle"></i> Early exposure to practical learning</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="academic-card h-100">
                    <h3>Senior Secondary (SSS 1-3)</h3>
                    <p>Specialized streams in Sciences, Arts and Commercial subjects prepare students for NECO, WAEC and JAMB success with confidence.</p>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check-circle"></i> Advanced core subjects</li>
                        <li><i class="bi bi-check-circle"></i> University entrance preparation</li>
                        <li><i class="bi bi-check-circle"></i> Focused academic guidance</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="downloads/School_Curriculum_2026.pdf" download="School_Curriculum_2026.pdf" class="btn btn-primary btn-lg">
                Download Academic Curriculum (PDF)
            </a>
        </div>
    </section>

    <section id="activities" class="py-5 bg-light">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <p class="eyebrow">Beyond the Classroom</p>
                <h2>Activities that build character and confidence</h2>
                <p class="text-muted">Learning at Heritage goes beyond examinations and lessons.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 reveal-slide-left">
                    <div class="activity-card h-100">
                        <h5>Sports</h5>
                        <p>Students take part in active competition, teamwork and physical wellbeing.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal-slide-left">
                    <div class="activity-card h-100">
                        <h5>Clubs and Societies</h5>
                        <p>Opportunities for leadership, discovery and shared interests across many student groups.</p>
                    </div>
                </div>
                <div class="col-md-4 reveal-slide-left">
                    <div class="activity-card h-100">
                        <h5>Arts and Music</h5>
                        <p>Creative expression is encouraged through arts, performance and cultural activities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row align-items-center g-4">
            <div class="col-lg-7 reveal-fade-up">
                <div class="calendar-card">
                    <p class="eyebrow">School Calendar</p>
                    <h2>Stay connected with academic dates and events</h2>
                    <p class="text-light">Keep track of important school dates, activities and milestones throughout the year.</p>
                    <a href="downloads/School_Curriculum_2026.pdf" download="School_Curriculum_2026.pdf" class="btn btn-outline-primary mt-2">
                        Download Academic Calendar (PDF)
                    </a>
                </div>
            </div>
            <div class="col-lg-5 reveal-fade-up">
                <div class="calendar-highlight">
                    <h4>Academic Year Highlights</h4>
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-calendar2-week"></i> Termly assessments</li>
                        <li><i class="bi bi-calendar2-week"></i> Co-curricular events</li>
                        <li><i class="bi bi-calendar2-week"></i> Parent engagement sessions</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
  <?php include 'footer.php';?>