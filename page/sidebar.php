<aside class="myside-bar px-2 d-flex flex-column position-fixed  vh-100">
    <h3>
        <span class="fw-bold border-start border-5 ps-2 toggle-font"
            style="border-left-color: #00c1fe !important;">E-classe</span>
    </h3>

    <div class="d-flex flex-column  align-items-center">
        <img src="img/youcode.png" class=" rounded-circle w-50" alt="Admin image">
    </div>

    <div class="d-flex flex-column align-items-center">
        <p class="text-black fw-bold toggle-hide pt-3">  
            <?= $_SESSION['user_full_name']; ?>
        </p>
        <a href="#" class="text-primary nav-link"> Admin </a>
    </div>

    <ul class="nav flex-column">
        <li class="link-hover">
            <a href="dashboard.php" aria-label="home link"
                class="nav-link text-black d-flex justify-content-evenly align-items-center">
                <i class="fas fa-home-lg-alt"></i>
                <span class="toggle-hide">
                    Home
                </span>

            </a>
        </li>
        <li class="link-hover">
            <a href="course.php" aria-label="course link"
                class="nav-link  text-black d-flex justify-content-evenly align-items-center">
                <i class="far fa-bookmark"></i>
                <span class="toggle-hide">
                    Course
                </span>

            </a>
        </li>
        <li class="link-hover">
            <a href="student.php" aria-label="student link"
                class="nav-link text-black d-flex justify-content-evenly align-items-center">
                <i class="fal fa-graduation-cap"></i>
                <span class="toggle-hide">
                    Students
                </span>
            </a>
        </li>
        <li class="link-hover">
            <a href="Payment.php" aria-label="payment link"
                class="nav-link text-black  d-flex justify-content-evenly align-items-center">
                <i class="fas fa-file-invoice-dollar"></i>
                <span class="toggle-hide">
                    Payment
                </span>
            </a>
        </li>
        <li class="link-hover">
            <a href="#" aria-label="report link"
                class="nav-link text-black d-flex justify-content-evenly align-items-center">
                <i class="fas fa-chart-line"></i>
                <span class="toggle-hide">
                    Report
                </span>
            </a>
        </li>
        <li class="link-hover">
            <a href="#" aria-label="setting link"
                class="nav-link text-black d-flex  justify-content-evenly align-items-center">
                <i class="fas fa-cogs"></i>

                <span class="toggle-hide">
                    Settings
                </span>
            </a>
        </li>

    </ul>
    <div class="link-hover mt-4">
        <a href="index.php" aria-label="logout link"
            class="text-black nav-link d-flex justify-content-evenly align-items-center">
            <i class="fas fa-sign-out-alt"></i>

            <span class="toggle-hide">
                logout
            </span>
        </a>

    </div>
</aside>