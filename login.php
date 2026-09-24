<?php
$currentPage = 'login';
include 'header.php';
?>
    <main class="login-page">
        <section class="container py-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="login-intro">
                        <p class="eyebrow">Student Portal</p>
                        <h1>Access your personal student profile</h1>
                        <p>Log in to view your academic record, class updates, fees information and school notices in one place.</p>
                        <ul class="list-unstyled mt-3">
                            <li><i class="bi bi-check-circle-fill"></i> Secure student account access</li>
                            <li><i class="bi bi-check-circle-fill"></i> Instant access to profile details</li>
                            <li><i class="bi bi-check-circle-fill"></i> Friendly support for new and returning students</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-card shadow">
                        <form action="#" method="post" novalidate class="container-fluid text-light rounded-3">
                            <div class="text-center mb-3">
                                <img src="./Images/Page Image/Logo.png" alt="Heritage College Logo" class="rounded-circle border border-2 border-light shadow-sm" width="64" height="64">
                                <h2 class="mt-3">Student Login</h2>
                                <p class="text-light mb-0">Use your student ID and password to continue</p>
                            </div>

                            <div class="mb-3">
                                <label for="studentId" class="form-label">Student ID</label>
                                <input type="text" class="form-control" id="studentId" placeholder="e.g. STU-1001" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>
                        </form>

                        <p class="small text-muted mt-3 mb-0">Student login form design only; functionality will be added later.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<script src="./bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>
