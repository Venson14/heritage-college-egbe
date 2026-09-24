<?php
$currentPage = 'admissions';
include 'header.php';
?>

<?php
function clean_input($value)
{
    if ($value === null) {
        return '';
    }

    return trim(htmlspecialchars(strip_tags($value), ENT_QUOTES, 'UTF-8'));
}

function validate_phone_number($phone)
{
    $digits = preg_replace('/\D+/', '', $phone);
    return strlen($digits) >= 10 && strlen($digits) <= 15;
}

function validate_upload_file($file, $fieldLabel)
{
    if (!isset($file['name']) || $file['name'] === '') {
        return "Please choose a {$fieldLabel}.";
    }

    if ($file['error'] !== UPLOAD_ERR_OK) {
        return "There was a problem uploading your {$fieldLabel}.";
    }

    if ($file['size'] > 2 * 1024 * 1024) {
        return "{$fieldLabel} must be less than 2MB.";
    }

    $allowedExtensions = ['jpg', 'jpeg', 'pdf'];
    $extension = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    if (!in_array($extension, $allowedExtensions, true)) {
        return "{$fieldLabel} must be a JPG, JPEG, or PDF file.";
    }

    return '';
}

$errors = [];
$successMessage = '';
$formData = [
    'firstName' => '',
    'middleName' => '',
    'surname' => '',
    'emailAdd' => '',
    'phoneNumber' => '',
    'dateOfBirth' => '',
    'homeAddress' => '',
    'city' => '',
    'stateOrigin' => '',
    'localGov' => '',
    'fatherName' => '',
    'fatherTel' => '',
    'motherName' => '',
    'motherPhone' => '',
    'fatherAddress' => '',
    'motherAddress' => '',
    'guardianName' => '',
    'guardianPhone' => '',
    'guardianAddress' => '',
    'PreviousSchool' => '',
    'classSelect' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($formData as $key => $value) {
        if (isset($_POST[$key])) {
            $formData[$key] = clean_input($_POST[$key]);
        }
    }

    if ($formData['firstName'] === '') {
        $errors[] = 'First name is required.';
    }

    if ($formData['surname'] === '') {
        $errors[] = 'Surname is required.';
    }

    if ($formData['emailAdd'] === '') {
        $errors[] = 'Email address is required.';
    } elseif (!filter_var($formData['emailAdd'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }

    if ($formData['phoneNumber'] === '') {
        $errors[] = 'Phone number is required.';
    } elseif (!validate_phone_number($formData['phoneNumber'])) {
        $errors[] = 'Please enter a valid phone number.';
    }

    if ($formData['dateOfBirth'] === '') {
        $errors[] = 'Date of birth is required.';
    } else {
        $birthDate = DateTime::createFromFormat('Y-m-d', $formData['dateOfBirth']);
        $today = new DateTime('today');

        if (!$birthDate || $birthDate > $today) {
            $errors[] = 'Date of birth cannot be in the future.';
        }
    }

    if ($formData['homeAddress'] === '') {
        $errors[] = 'Home address is required.';
    }

    if ($formData['city'] === '') {
        $errors[] = 'City is required.';
    }

    if ($formData['stateOrigin'] === '') {
        $errors[] = 'Please select your state.';
    }

    if ($formData['localGov'] === '') {
        $errors[] = 'Please select your local government area.';
    }

    if ($formData['fatherName'] === '') {
        $errors[] = 'Father\'s name is required.';
    }

    if ($formData['fatherTel'] === '') {
        $errors[] = 'Father\'s phone number is required.';
    } elseif (!validate_phone_number($formData['fatherTel'])) {
        $errors[] = 'Please enter a valid father\'s phone number.';
    }

    if ($formData['motherName'] === '') {
        $errors[] = 'Mother\'s name is required.';
    }

    if ($formData['motherPhone'] === '') {
        $errors[] = 'Mother\'s phone number is required.';
    } elseif (!validate_phone_number($formData['motherPhone'])) {
        $errors[] = 'Please enter a valid mother\'s phone number.';
    }

    if ($formData['classSelect'] === '') {
        $errors[] = 'Please select the class applying for.';
    }

    $passportError = validate_upload_file($_FILES['passportPhoto'] ?? null, 'Passport photograph');
    if ($passportError !== '') {
        $errors[] = $passportError;
    }

    $transcriptError = validate_upload_file($_FILES['trascript'] ?? null, 'Academic transcript');
    if ($transcriptError !== '') {
        $errors[] = $transcriptError;
    }

    if (empty($errors)) {
        $uploadDir = __DIR__ . '/uploads';

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $passportFile = $uploadDir . '/passport_' . time() . '_' . basename($_FILES['passportPhoto']['name']);
        $transcriptFile = $uploadDir . '/transcript_' . time() . '_' . basename($_FILES['trascript']['name']);

        if (move_uploaded_file($_FILES['passportPhoto']['tmp_name'], $passportFile) && move_uploaded_file($_FILES['trascript']['tmp_name'], $transcriptFile)) {
            $successMessage = 'Your admission form was submitted successfully. We will contact you soon.';
        } else {
            $errors[] = 'The files could not be uploaded. Please try again.';
        }
    }
}
?>

<?php include 'header.php'; ?>
    <section class="admissions-hero">
        <div class="hero-overlay"></div>
        <div class="container h-100 py-5">
            <div class="row h-100 align-items-center gy-4 py-5">
                <div class="col-lg-7 text-white hero-content">
                    <div class="hero-badge reveal-fade-up">Admissions • Step into a brighter future</div>
                    <h1 class="display-5 fw-bold reveal-fade-up">Begin your child's journey with Heritage International College</h1>
                    <p class="lead hero-copy reveal-fade-up">We make the admissions experience simple, welcoming and transparent from your first inquiry to your child's first day on campus.</p>
                    <div class="d-flex flex-wrap gap-2 reveal-fade-up">
                        <a href="#admission-form" class="btn hero-btn hero-btn-primary">Apply Now</a>
                        <a href="#requirements" class="btn hero-btn btn-outline-light">View Requirements</a>
                    </div>
                    <div class="hero-highlights reveal-fade-up">
                        <span><i class="bi bi-check2-circle"></i> Guided Support</span>
                        <span><i class="bi bi-check2-circle"></i> Clear Process</span>
                        <span><i class="bi bi-check2-circle"></i> Trusted School</span>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-card reveal-fade-up">
                        <h3>Why families choose Heritage</h3>
                        <ul class="list-unstyled mb-0">
                            <li><i class="bi bi-check-circle-fill"></i> Structured academic support</li>
                            <li><i class="bi bi-check-circle-fill"></i> Safe and encouraging learning environment</li>
                            <li><i class="bi bi-check-circle-fill"></i> Strong values and future-ready programs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="requirements" class="container py-5">
        <div class="section-heading text-center mb-4">
            <p class="eyebrow">Admissions</p>
            <h2>Simple steps, clear requirements</h2>
            <p class="text-muted">Everything you need to know to begin the process with confidence.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6 reveal-slide-left">
                <div class="info-card h-100">
                    <h3>Admission Requirements</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-user"></i> Passport photograph</li>
                        <li><i class="fas fa-id-card"></i> Completed application form</li>
                        <li><i class="fas fa-file-alt"></i> Academic transcripts or report cards</li>
                        <li><i class="fas fa-user-graduate"></i> Recommendation letters where applicable</li>
                        <li><i class="fas fa-file-signature"></i> Birth certificate or age proof</li>
                        <li><i class="fas fa-vial"></i> Health records and immunization documents</li>
                        <li><i class="fas fa-money-bill-wave"></i> Application and enrollment fees</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 reveal-slide-left">
                <div class="info-card h-100">
                    <h3>Admission Process</h3>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-paper-plane"></i> Submit your application online</li>
                        <li><i class="fas fa-folder"></i> Provide required documents and details</li>
                        <li><i class="fas fa-calendar-alt"></i> Attend an entrance examination</li>
                        <li><i class="fas fa-user-check"></i> Complete assessments or interviews if needed</li>
                        <li><i class="fas fa-envelope-open-text"></i> Receive your admission decision</li>
                        <li><i class="fas fa-file-signature"></i> Complete enrollment paperwork and pay the deposit</li>
                        <li><i class="fas fa-graduation-cap"></i> Join orientation and begin your academic journey</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="fee-structure py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <p class="eyebrow">Fee Structure</p>
                    <h2>Transparent next steps for enrollment</h2>
                    <p class="text-muted">Admissions details, deposit requirements and payment guidance are shared directly with applicants so the journey stays clear and stress-free.</p>
                </div>
                <div class="col-lg-5">
                    <div class="fee-card reveal-fade-up">
                        <h4 class="text-light">Enrollment Deposit</h4>
                        <div class="fee-amount">₦10,000</div>
                        <p>Payable once admission is confirmed.</p>
                        <a href="#admission-form" class="btn btn-outline-light mt-2">Start Application</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="admission-form" class="online-admission-form py-5">
        <div class="container">
            <div class="section-heading text-center mb-4">
                <p class="eyebrow">Application Form</p>
                <h2>Start your application today</h2>
                <p class="text-muted">Please fill in the form below to get the process started.</p>
            </div>
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger mt-4" role="alert">
                    <strong>Please fix the following:</strong>
                    <ul class="mb-0 mt-2">
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if ($successMessage !== ''): ?>
                <div class="alert alert-success mt-4" role="alert">
                    <?php echo $successMessage; ?>
                </div>
            <?php endif; ?>

            <form id="admissionForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" method="post" class="admission-form shadow reveal-slide-left" novalidate>
                <div class="form-brand">
                    <img src="./Images/Page Image/Logo.png" alt="logo" class="rounded-circle" width="56" height="56">
                    <div>
                        <h3>Online Admission Application Form</h3>
                        <p>Complete the form below to begin your application.</p>
                    </div>
                </div>

                <div id="clientValidationMessage" class="alert alert-danger d-none" role="alert"></div>

                <div class="row mb-3 g-2">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="First Name" name="firstName" id="firstName" value="<?php echo htmlspecialchars($formData['firstName']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Middle Name" name="middleName" id="middleName" value="<?php echo htmlspecialchars($formData['middleName']); ?>">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Surname" name="surname" id="surname" value="<?php echo htmlspecialchars($formData['surname']); ?>" required>
                    </div>
                </div>

                <div class="row mb-3 g-2">
                    <div class="col-md-4">
                        <input type="email" class="form-control" placeholder="Email" name="emailAdd" id="emailAdd" value="<?php echo htmlspecialchars($formData['emailAdd']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <input type="tel" class="form-control" placeholder="Phone Number" name="phoneNumber" id="phoneNumber" value="<?php echo htmlspecialchars($formData['phoneNumber']); ?>" required>
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control" placeholder="Date of Birth" name="dateOfBirth" id="dateOfBirth" value="<?php echo htmlspecialchars($formData['dateOfBirth']); ?>" required>
                    </div>
                </div>

                <div class="row mb-3 g-2">
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Home-Address" name="homeAddress" id="homeAddress" value="<?php echo htmlspecialchars($formData['homeAddress']); ?>" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="City" name="city" id="city" value="<?php echo htmlspecialchars($formData['city']); ?>" required>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" placeholder="State-of-Origin" name="stateOrigin" id="state-of-origin" onchange="updateLGAOptions()" required>
                            <option value="">-- Select State --</option>
                            <option value="Abia" <?php echo ($formData['stateOrigin'] === 'Abia') ? 'selected' : ''; ?>>Abia</option>
                            <option value="Adamawa" <?php echo ($formData['stateOrigin'] === 'Adamawa') ? 'selected' : ''; ?>>Adamawa</option>
                            <option value="Akwa Ibom" <?php echo ($formData['stateOrigin'] === 'Akwa Ibom') ? 'selected' : ''; ?>>Akwa Ibom</option>
                            <option value="Anambra" <?php echo ($formData['stateOrigin'] === 'Anambra') ? 'selected' : ''; ?>>Anambra</option>
                            <option value="Bauchi" <?php echo ($formData['stateOrigin'] === 'Bauchi') ? 'selected' : ''; ?>>Bauchi</option>
                            <option value="Bayelsa" <?php echo ($formData['stateOrigin'] === 'Bayelsa') ? 'selected' : ''; ?>>Bayelsa</option>
                            <option value="Benue" <?php echo ($formData['stateOrigin'] === 'Benue') ? 'selected' : ''; ?>>Benue</option>
                            <option value="Borno" <?php echo ($formData['stateOrigin'] === 'Borno') ? 'selected' : ''; ?>>Borno</option>
                            <option value="Cross River" <?php echo ($formData['stateOrigin'] === 'Cross River') ? 'selected' : ''; ?>>Cross River</option>
                            <option value="Delta" <?php echo ($formData['stateOrigin'] === 'Delta') ? 'selected' : ''; ?>>Delta</option>
                            <option value="Ebonyi" <?php echo ($formData['stateOrigin'] === 'Ebonyi') ? 'selected' : ''; ?>>Ebonyi</option>
                            <option value="Edo" <?php echo ($formData['stateOrigin'] === 'Edo') ? 'selected' : ''; ?>>Edo</option>
                            <option value="Ekiti" <?php echo ($formData['stateOrigin'] === 'Ekiti') ? 'selected' : ''; ?>>Ekiti</option>
                            <option value="Enugu" <?php echo ($formData['stateOrigin'] === 'Enugu') ? 'selected' : ''; ?>>Enugu</option>
                            <option value="FCT" <?php echo ($formData['stateOrigin'] === 'FCT') ? 'selected' : ''; ?>>Federal Capital Territory</option>
                            <option value="Gombe" <?php echo ($formData['stateOrigin'] === 'Gombe') ? 'selected' : ''; ?>>Gombe</option>
                            <option value="Imo" <?php echo ($formData['stateOrigin'] === 'Imo') ? 'selected' : ''; ?>>Imo</option>
                            <option value="Jigawa" <?php echo ($formData['stateOrigin'] === 'Jigawa') ? 'selected' : ''; ?>>Jigawa</option>
                            <option value="Kaduna" <?php echo ($formData['stateOrigin'] === 'Kaduna') ? 'selected' : ''; ?>>Kaduna</option>
                            <option value="Kano" <?php echo ($formData['stateOrigin'] === 'Kano') ? 'selected' : ''; ?>>Kano</option>
                            <option value="Katsina" <?php echo ($formData['stateOrigin'] === 'Katsina') ? 'selected' : ''; ?>>Katsina</option>
                            <option value="Kebbi" <?php echo ($formData['stateOrigin'] === 'Kebbi') ? 'selected' : ''; ?>>Kebbi</option>
                            <option value="Kogi" <?php echo ($formData['stateOrigin'] === 'Kogi') ? 'selected' : ''; ?>>Kogi</option>
                            <option value="Kwara" <?php echo ($formData['stateOrigin'] === 'Kwara') ? 'selected' : ''; ?>>Kwara</option>
                            <option value="Lagos" <?php echo ($formData['stateOrigin'] === 'Lagos') ? 'selected' : ''; ?>>Lagos</option>
                            <option value="Nasarawa" <?php echo ($formData['stateOrigin'] === 'Nasarawa') ? 'selected' : ''; ?>>Nasarawa</option>
                            <option value="Niger" <?php echo ($formData['stateOrigin'] === 'Niger') ? 'selected' : ''; ?>>Niger</option>
                            <option value="Ogun" <?php echo ($formData['stateOrigin'] === 'Ogun') ? 'selected' : ''; ?>>Ogun</option>
                            <option value="Ondo" <?php echo ($formData['stateOrigin'] === 'Ondo') ? 'selected' : ''; ?>>Ondo</option>
                            <option value="Osun" <?php echo ($formData['stateOrigin'] === 'Osun') ? 'selected' : ''; ?>>Osun</option>
                            <option value="Oyo" <?php echo ($formData['stateOrigin'] === 'Oyo') ? 'selected' : ''; ?>>Oyo</option>
                            <option value="Plateau" <?php echo ($formData['stateOrigin'] === 'Plateau') ? 'selected' : ''; ?>>Plateau</option>
                            <option value="Rivers" <?php echo ($formData['stateOrigin'] === 'Rivers') ? 'selected' : ''; ?>>Rivers</option>
                            <option value="Sokoto" <?php echo ($formData['stateOrigin'] === 'Sokoto') ? 'selected' : ''; ?>>Sokoto</option>
                            <option value="Taraba" <?php echo ($formData['stateOrigin'] === 'Taraba') ? 'selected' : ''; ?>>Taraba</option>
                            <option value="Yobe" <?php echo ($formData['stateOrigin'] === 'Yobe') ? 'selected' : ''; ?>>Yobe</option>
                            <option value="Zamfara" <?php echo ($formData['stateOrigin'] === 'Zamfara') ? 'selected' : ''; ?>>Zamfara</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" placeholder="LGA" id="lga" name="localGov" required>
                            <option value="">Select LGA</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fatherName" id="fatherName" placeholder="Father's Name" value="<?php echo htmlspecialchars($formData['fatherName']); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fatherTel" id="fatherTel" placeholder="Father's Phone Number" value="<?php echo htmlspecialchars($formData['fatherTel']); ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="motherName" id="motherName" placeholder="Mother's Name" value="<?php echo htmlspecialchars($formData['motherName']); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="motherPhone" id="motherPhone" placeholder="Mother's Phone Number" value="<?php echo htmlspecialchars($formData['motherPhone']); ?>" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="fatherAddress" id="fatherAddress" placeholder="Father's Address" value="<?php echo htmlspecialchars($formData['fatherAddress']); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="motherAddress" id="motherAddress" placeholder="Mother's Address" value="<?php echo htmlspecialchars($formData['motherAddress']); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="text" class="form-control" name="guardianName" id="guardianName" placeholder="Guardian's Name" value="<?php echo htmlspecialchars($formData['guardianName']); ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" class="form-control" name="guardianPhone" id="guardianPhone" placeholder="Guardian's Phone Number" value="<?php echo htmlspecialchars($formData['guardianPhone']); ?>">
                    </div>
                    <div class="col-md-4 mb-3">
                        <input type="text" class="form-control" name="guardianAddress" id="guardianAddress" placeholder="Guardian's Address" value="<?php echo htmlspecialchars($formData['guardianAddress']); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" name="PreviousSchool" id="PreviousSchool" placeholder="Previous School Attended" value="<?php echo htmlspecialchars($formData['PreviousSchool']); ?>">
                    </div>
                    <div class="col-md-6 mb-3">
                        <select class="form-control" name="classSelect" id="classSelect" placeholder="Class Applying For" required>
                            <option value="">Select Class</option>
                            <option value="JSS 1" <?php echo ($formData['classSelect'] === 'JSS 1') ? 'selected' : ''; ?>>JSS 1</option>
                            <option value="JSS 2" <?php echo ($formData['classSelect'] === 'JSS 2') ? 'selected' : ''; ?>>JSS 2</option>
                            <option value="JSS 3" <?php echo ($formData['classSelect'] === 'JSS 3') ? 'selected' : ''; ?>>JSS 3</option>
                            <option value="SSS 1" <?php echo ($formData['classSelect'] === 'SSS 1') ? 'selected' : ''; ?>>SSS 1</option>
                            <option value="SSS 2" <?php echo ($formData['classSelect'] === 'SSS 2') ? 'selected' : ''; ?>>SSS 2</option>
                            <option value="SSS 3" <?php echo ($formData['classSelect'] === 'SSS 3') ? 'selected' : ''; ?>>SSS 3</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="passport">Upload Passport Photograph</label>
                        <input type="file" class="form-control" name="passportPhoto" id="passport" accept=".pdf, .jpg, .jpeg" placeholder="Upload Passport Photograph" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="transcripts">Upload Academic Transcripts</label>
                        <input type="file" class="form-control" name="trascript" id="transcripts" accept=".pdf, .jpg, .jpeg" placeholder="Upload Academic Transcripts" required>
                    </div>
                </div>

                <div class="d-flex flex-wrap justify-content-between align-items-center mt-4 gap-3">
                    <p class="mb-0 text-muted small">We’ll contact you after submission.</p>
                    <input type="submit" value="Submit Application" name="submitBTN" class="btn btn-primary btn-lg">
                </div>
            </form>

        </div>
    </section>
<?php include 'footer.php';?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('admissionForm');

    if (!form) {
        return;
    }

    const messageBox = document.getElementById('clientValidationMessage');

    form.addEventListener('submit', function (event) {
        const errors = [];

        const fieldsToCheck = [
            { id: 'firstName', label: 'First name' },
            { id: 'surname', label: 'Surname' },
            { id: 'emailAdd', label: 'Email address' },
            { id: 'phoneNumber', label: 'Phone number' },
            { id: 'dateOfBirth', label: 'Date of birth' },
            { id: 'homeAddress', label: 'Home address' },
            { id: 'city', label: 'City' },
            { id: 'state-of-origin', label: 'State of origin' },
            { id: 'lga', label: 'Local government area' },
            { id: 'fatherName', label: 'Father\'s name' },
            { id: 'fatherTel', label: 'Father\'s phone number' },
            { id: 'motherName', label: 'Mother\'s name' },
            { id: 'motherPhone', label: 'Mother\'s phone number' },
            { id: 'classSelect', label: 'Class' }
        ];

        fieldsToCheck.forEach(function (field) {
            const element = document.getElementById(field.id);
            if (!element) {
                return;
            }

            if (element.value.trim() === '') {
                errors.push(field.label + ' is required.');
            }
        });

        const emailField = document.getElementById('emailAdd');
        if (emailField && emailField.value.trim() !== '') {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailField.value.trim())) {
                errors.push('Please enter a valid email address.');
            }
        }

        const phoneFields = ['phoneNumber', 'fatherTel', 'motherPhone'];
        phoneFields.forEach(function (fieldId) {
            const element = document.getElementById(fieldId);
            if (!element || element.value.trim() === '') {
                return;
            }

            const digits = element.value.replace(/\D/g, '');
            if (digits.length < 10 || digits.length > 15) {
                errors.push('Please enter a valid phone number.');
            }
        });

        const birthDate = document.getElementById('dateOfBirth');
        if (birthDate && birthDate.value) {
            const selectedDate = new Date(birthDate.value);
            const today = new Date();

            if (selectedDate > today) {
                errors.push('Date of birth cannot be in the future.');
            }
        }

        const passportFile = document.getElementById('passport');
        if (passportFile && passportFile.files.length === 0) {
            errors.push('Please choose a passport photograph.');
        }

        const transcriptFile = document.getElementById('transcripts');
        if (transcriptFile && transcriptFile.files.length === 0) {
            errors.push('Please choose an academic transcript.');
        }

        if (passportFile && passportFile.files.length > 0) {
            const file = passportFile.files[0];
            const allowedTypes = ['image/jpeg', 'application/pdf'];
            const allowedExtensions = ['jpg', 'jpeg', 'pdf'];
            const fileName = file.name.toLowerCase();
            const extension = fileName.split('.').pop();

            if (!allowedTypes.includes(file.type) && !allowedExtensions.includes(extension)) {
                errors.push('Passport photograph must be a JPG, JPEG, or PDF file.');
            }

            if (file.size > 2 * 1024 * 1024) {
                errors.push('Passport photograph must be less than 2MB.');
            }
        }

        if (transcriptFile && transcriptFile.files.length > 0) {
            const file = transcriptFile.files[0];
            const allowedTypes = ['image/jpeg', 'application/pdf'];
            const allowedExtensions = ['jpg', 'jpeg', 'pdf'];
            const fileName = file.name.toLowerCase();
            const extension = fileName.split('.').pop();

            if (!allowedTypes.includes(file.type) && !allowedExtensions.includes(extension)) {
                errors.push('Academic transcript must be a JPG, JPEG, or PDF file.');
            }

            if (file.size > 2 * 1024 * 1024) {
                errors.push('Academic transcript must be less than 2MB.');
            }
        }

        if (errors.length > 0) {
            event.preventDefault();
            messageBox.classList.remove('d-none');
            messageBox.innerHTML = '<strong>Please fix the following:</strong><ul class="mb-0 mt-2">' + errors.map(function (error) {
                return '<li>' + error + '</li>';
            }).join('') + '</ul>';
            window.scrollTo({ top: 0, behavior: 'smooth' });
            return;
        }

        messageBox.classList.add('d-none');
        messageBox.innerHTML = '';
    });
});
</script>
