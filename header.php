<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Heritage International College Egbe</title>
    <link rel="shortcut icon" href="./Images/Page Image/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
    <header> 
        <nav class="navbar navbar-expand-lg fixed-top premium-nav">
            <div class="container-fluid px-3 px-lg-5">
                <a class="navbar-brand text-light d-flex align-items-center gap-2" id="home-link" href="index.php">
                    <img src="./Images/Page Image/Logo.png" alt="Logo" width="52" height="52" class="rounded-circle border border-light border-2 shadow-sm">
                    <span class="brand-text">
                        <span class="brand-title">Heritage College</span>
                        <span class="brand-subtitle">Excellence in Education</span>
                    </span>
                </a>
                <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage ?? '') === 'home' ? 'active' : '' ?>" <?= ($currentPage ?? '') === 'home' ? 'aria-current="page"' : '' ?> href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage ?? '') === 'about' ? 'active' : '' ?>" <?= ($currentPage ?? '') === 'about' ? 'aria-current="page"' : '' ?> href="About_Us.php" target="_self">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage ?? '') === 'academics' ? 'active' : '' ?>" <?= ($currentPage ?? '') === 'academics' ? 'aria-current="page"' : '' ?> href="Academics.php" target="_self">Academics</a>
                        </li>
                        <li class="nav-item d-none">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage ?? '') === 'admissions' ? 'active' : '' ?>" <?= ($currentPage ?? '') === 'admissions' ? 'aria-current="page"' : '' ?> href="Admissions.php">Admissions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($currentPage ?? '') === 'contact' ? 'active' : '' ?>" <?= ($currentPage ?? '') === 'contact' ? 'aria-current="page"' : '' ?> href="./Contact_Us.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn bg-danger <?= ($currentPage ?? '') === 'login' ? 'active' : '' ?>" <?= ($currentPage ?? '') === 'login' ? 'aria-current="page"' : '' ?> href="login.php">Log-In</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>