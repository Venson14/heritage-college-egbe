
<?php 
$currentPage = 'about';
include 'header.php'; 
?>
    <section class="about-hero">
        <div class="hero-overlay"></div>
        <div class="container py-5 h-100">
            <div class="row align-items-center h-100 py-5 gy-4">
                <div class="col-lg-7 hero-content">
                    <div class="hero-badge reveal-fade-up">About Heritage • A school built on purpose</div>
                    <h1 class="display-5 fw-bold reveal-fade-up text-light">Learning with purpose, shaping lives with care</h1>
                    <p class="lead hero-copy reveal-fade-up">Heritage International College Egbe has built a reputation for strong academics, values-based leadership and a nurturing environment where every student can grow with confidence.</p>
                    <div class="d-flex flex-wrap gap-2 reveal-fade-up">
                        <a href="#story" class="btn hero-btn hero-btn-primary">Discover Our Story</a>
                        <a href="#team" class="btn hero-btn btn-outline-light">Meet the Team</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-card reveal-fade-up">
                        <h3 class="text-white">Our Promise</h3>
                        <ul class="list-unstyled mb-0 text-white">
                            <li><i class="bi bi-check-circle-fill"></i> Excellence in academics</li>
                            <li><i class="bi bi-check-circle-fill"></i> Character and leadership development</li>
                            <li><i class="bi bi-check-circle-fill"></i> A safe and inspiring learning community</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="story" class="container py-5">
        <div class="section-heading text-center mb-4">
            <p class="eyebrow">About Us</p>
            <h2>Guided by values, driven by excellence</h2>
            <p class="text-muted">Heritage International College blends academic rigor, creativity and character development for every learner.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 reveal-slide-left">
                <div class="about-info-card h-100">
                    <h3>Our Vision</h3>
                    <p>To be a leading educational institution recognized for academic excellence, innovation and the holistic development of students.</p>
                </div>
            </div>
            <div class="col-lg-6 reveal-slide-left">
                <div class="about-info-card h-100">
                    <h3>Our Mission</h3>
                    <p>To provide a nurturing learning environment that encourages critical thinking, creativity and lifelong learning, preparing students for global challenges.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7 reveal-fade-up">
                    <div class="about-story-card h-100">
                        <p class="eyebrow">Our History</p>
                        <h2>Built on a commitment to opportunity</h2>
                        <p>Founded with a clear purpose, Heritage International College has grown through years of dedication to academic excellence, community impact and student development. Our journey continues as we expand our programs and strengthen our learning environment.</p>
                    </div>
                </div>
                <div class="col-lg-5 reveal-fade-up">
                    <div class="about-values-card h-100">
                        <p class="eyebrow">Our Values</p>
                        <ul class="list-unstyled mb-0">
                            <li><strong>Integrity:</strong> High standards of honesty and ethical behavior.</li>
                            <li><strong>Excellence:</strong> A commitment to continuous improvement.</li>
                            <li><strong>Innovation:</strong> Creativity and modern learning approaches.</li>
                            <li><strong>Inclusivity:</strong> A welcoming environment for all learners.</li>
                            <li><strong>Community:</strong> Service, responsibility and shared growth.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team" class="container py-5">
        <div class="section-heading text-center mb-4">
            <p class="eyebrow">Leadership</p>
            <h2>Meet the people guiding the school</h2>
            <p class="text-muted">A dedicated team of leaders and educators committed to student growth.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 reveal-fade-up">
                <div class="team-card h-100 text-center">
                    <img src="./Images/Page Image/Proprietor R.jpg" alt="Image of Proprietor" class="rounded-circle mb-3" width="120" height="120">
                    <h5>HRH Oba Adedoyin Bolaji</h5>
                    <p>Proprietor</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal-fade-up">
                <div class="team-card h-100 text-center">
                    <img src="./Images/Page Image/Principal 7.jpg" alt="Image of Principal" class="rounded-circle mb-3" width="120" height="120">
                    <h5>Mrs. Oyinlola Akindejoye</h5>
                    <p>Principal</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal-fade-up">
                <div class="team-card h-100 text-center">
                    <img src="./Images/Page Image/Uncle Adodo.jpg" alt="Image of Vice Principal - Admin" class="rounded-circle mb-3" width="120" height="120">
                    <h5>Mr. Oluwole Adodo</h5>
                    <p>Vice Principal - Admin</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 reveal-fade-up">
                <div class="team-card h-100 text-center">
                    <img src="./Images/Page Image/Uncle Sam.jpg" alt="Image of Vice Principal - Academics" class="rounded-circle mb-3" width="120" height="120">
                    <h5>Uncle Samson</h5>
                    <p>Vice Principal - Academics</p>
                </div>
            </div>
        </div>
    </section>

    <?php
    $galleryCategories = [
        'graduation' => 'Graduation',
        'cultural day' => 'Cultural Day',
        'inter house' => 'Inter House',
        'others' => 'Others'
    ];

    $galleryDirectory = __DIR__ . '/Images';
    $galleryImages = array_fill_keys(array_keys($galleryCategories), []);

    if (is_dir($galleryDirectory)) {
        $files = scandir($galleryDirectory);

        if ($files !== false) {
            sort($files, SORT_NATURAL | SORT_FLAG_CASE);

            foreach ($files as $file) {
                if ($file === '.' || $file === '..') {
                    continue;
                }

                $filePath = $galleryDirectory . DIRECTORY_SEPARATOR . $file;
                if (is_dir($filePath)) {
                    continue;
                }

                $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (!in_array($extension, ['jpg', 'jpeg', 'png', 'gif', 'webp'], true)) {
                    continue;
                }

                $fileName = strtolower($file);
                $category = 'others';

                if (preg_match('/graduat|gradut|grad/i', $fileName)) {
                    $category = 'graduation';
                } elseif (preg_match('/cultural/i', $fileName)) {
                    $category = 'cultural day';
                } elseif (preg_match('/inter house|inter-house|interhouse|house/i', $fileName)) {
                    $category = 'inter house';
                }

                $galleryImages[$category][] = './Images/' . rawurlencode($file);
            }
        }
    }
    ?>

    <section class="gallery-section py-5">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <p class="eyebrow">Campus Life</p>
                <h2>Moments that reflect our school spirit</h2>
            </div>

            <div class="gallery-filter-bar d-flex flex-wrap justify-content-center gap-2 mb-4">
                <?php
                $firstGalleryCategory = null;
                foreach ($galleryCategories as $slug => $label):
                    if (empty($galleryImages[$slug])) continue;
                    if ($firstGalleryCategory === null) {
                        $firstGalleryCategory = $slug;
                    }
                ?>
                    <button type="button" class="btn gallery-filter-btn <?php echo $slug === $firstGalleryCategory ? 'active' : ''; ?>" data-gallery-filter="<?= htmlspecialchars($slug) ?>">
                        <?= htmlspecialchars($label) ?>
                    </button>
                <?php endforeach; ?>
            </div>

            <?php foreach ($galleryCategories as $slug => $label): ?>
                <?php if (empty($galleryImages[$slug])) continue; ?>
                <div class="gallery-group <?php echo $slug === $firstGalleryCategory ? 'is-active' : ''; ?>" data-gallery-group="<?= htmlspecialchars($slug) ?>">
                    <div class="text-center mb-3">
                        <h3 class="fw-bold"><?= htmlspecialchars($label) ?></h3>
                    </div>
                    <div class="row g-4">
                        <?php foreach ($galleryImages[$slug] as $image): ?>
                            <div class="col-sm-6 col-lg-3 reveal-fade-up">
                                <div class="gallery-card">
                                    <img src="<?= htmlspecialchars($image) ?>" alt="<?= htmlspecialchars($label) ?> school event" class="img-fluid">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const filterButtons = document.querySelectorAll('.gallery-filter-btn');
            const galleryGroups = document.querySelectorAll('.gallery-group');

            filterButtons.forEach(function (button) {
                button.addEventListener('click', function () {
                    const selectedFilter = this.dataset.galleryFilter;

                    filterButtons.forEach(function (btn) {
                        btn.classList.toggle('active', btn === button);
                    });

                    galleryGroups.forEach(function (group) {
                        const shouldShow = group.dataset.galleryGroup === selectedFilter;
                        group.classList.toggle('is-active', shouldShow);
                    });
                });
            });
        });
    </script>

    <?php include 'footer.php'; ?>