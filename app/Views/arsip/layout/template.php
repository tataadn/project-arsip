<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Arsip Kelurahan Pakisaji</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard" />
    <meta name="author" content="Themesberg" />
    <meta
      name="description"
      content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS."
    />
    <meta
      name="keywords"
      content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard"
    />
    <link
      rel="canonical"
      href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard"
    />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/logo-kelurahan.svg">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest" />
    <link
      rel="mask-icon"
      href="assets/img/favicon/safari-pinned-tab.svg"
      color="#ffffff"
    />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Sweet Alert -->
    <link
      type="text/css"
      href="vendor/sweetalert2/dist/sweetalert2.min.css"
      rel="stylesheet"
    />

    <!-- Notyf -->
    <link
      type="text/css"
      href="vendor/notyf/notyf.min.css"
      rel="stylesheet"
    />

    <!-- Volt CSS -->
    <link type="text/css" href="css/volt.css" rel="stylesheet" />

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
  </head>

  <body>
    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
      <a class="navbar-brand me-lg-5" href="index.html">
        <img
          class="navbar-brand-dark"
          src="assets/img/brand/light.svg"
          alt="Volt logo"
        />
        <img
          class="navbar-brand-light"
          src="assets/img/brand/dark.svg"
          alt="Volt logo"
        />
      </a>
      <div class="d-flex align-items-center">
        <button
          class="navbar-toggler d-lg-none collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#sidebarMenu"
          aria-controls="sidebarMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <nav
      id="sidebarMenu"
      class="sidebar d-lg-block bg-gray-800 text-white collapse"
      data-simplebar
    >
      <div class="sidebar-inner px-4 pt-3">
        <ul class="nav flex-column pt-3 pt-md-0">
          <li class="nav-item">
            <a
              href="#"
              class="nav-link d-flex align-items-center"
            >
              <span class="sidebar-icon">
                <img
                  src="assets/img/logo-kelurahan.svg"
                  width="40"
                  alt="Kelurahan"
                />
              </span>
              <span class="mt-1 ms-1 sidebar-text"><h4>ARSIP DESA</h4></span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="/dashboard" class="nav-link">
              <span class="sidebar-icon">
                <svg
                  class="icon icon-xs me-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
              </span>
              <span class="sidebar-text">Arsip</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/about" class="nav-link">
              <span class="sidebar-icon">
                <svg
                  class="icon icon-xs me-2"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
              </span>
              <span class="sidebar-text">About</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="content">
    <?= $this->renderSection('content'); ?>

      <footer class="bg-white rounded shadow p-4 mb-4 mt-4">
        <div class="row">
          <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
            <p class="mb-0 text-center text-lg-start">
              © <span class="current-year"></span>
              Adine Pramesti G
            </p>
          </div>
        </div>
      </footer>
    </main>

    <!-- Core -->
    <script src="vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <script src="vendor/chartist/dist/chartist.min.js"></script>
    <script src="vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Notyf -->
    <script src="vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- Volt JS -->
    <script src="assets/js/volt.js"></script>
  </body>
</html>
