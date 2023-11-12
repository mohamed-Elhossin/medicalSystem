<?php

include_once("C:/xampp/htdocs/medical/admin/genral/functions.php");
?>
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href=" <?= url() ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#doctor" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Doctors</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="doctor" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= url("doctors/add.php") ?>">
                        <i class="bi bi-circle"></i><span>Add Doctors</span>
                    </a>
                    <a href="<?= url("doctors/list.php") ?>">
                        <i class="bi bi-circle"></i><span>List Doctors</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed"  href="<?= url("date/list.php") ?>">
                <i class="bi bi-journal-text"></i><span>Date</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
         
        </li><!-- End Forms Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#doctorDate" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Doctor's Dates</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="doctorDate" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= url("doctor_dates/add.php") ?>">
                        <i class="bi bi-circle"></i><span>Add doctor_dates</span>
                    </a>
                    <a href="<?= url("doctor_dates/list.php") ?>">
                        <i class="bi bi-circle"></i><span>List doctor_dates</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#adminData" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Admin's Page</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="adminData" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= url("admin/add.php") ?>">
                        <i class="bi bi-circle"></i><span>Add Admin</span>
                    </a>
                    <a href="<?= url("admin/list.php") ?>">
                        <i class="bi bi-circle"></i><span>List Admin</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->



        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= url("forms-validation.php") ?>">
                        <i class="bi bi-circle"></i><span>Form Validation</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?= url("tables-data.php") ?>">
                        <i class="bi bi-circle"></i><span>Data Tables</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->



        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= url("users-profile.php") ?>">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= url("pages-contact.php") ?>">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= url("pages-register.php") ?>">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?= url("pages-login.php") ?>">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->


    </ul>

</aside><!-- End Sidebar-->