<?= $this->extend('arsip/layout/template'); ?>

<?= $this->section('content'); ?>

<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
  <div class="container-fluid px-0 pt-2">
    <div
      class="d-flex justify-content-between w-100"
      id="navbarSupportedContent"
    >
      <div class="d-flex align-items-center">
          <div class="px-3 col-12 col-xl-12">
              <div class="mb-3 mb-lg-0">
                  <h2 class="fw-bolder">About me</h2>
              </div>
          </div>
      </div>
      <!-- Navbar links -->
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown ms-lg-3">
          <a
            class="nav-link dropdown-toggle pt-1 px-0"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <div class="media d-flex align-items-center">
              <img
                class="avatar rounded-circle"
                alt="Image placeholder"
                src="assets/img/user.jpg"
              />
              <div
                class="media-body ms-2 text-dark align-items-center d-none d-lg-block"
              >
                <span class="mb-0 font-small fw-bold text-gray-900"
                  >Admin</span
                >
              </div>
            </div>
          </a>
          <div
            class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1"
          >
            <a class="dropdown-item d-flex align-items-center" href="/logout">
              <svg
                class="dropdown-icon text-danger me-2"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                ></path>
              </svg>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="pb-2 px-3 col-12 col-xl-12">
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-lg-0">
            <p>Biodata singkat mengenai pembuat aplikasi</p>
        </div>
    </div>
</div>

<!-- <form action="/save" method="post" class="px-3" enctype="multipart/form-data"> -->
  <div class="row">
    <div class="col-12 col-xl-12">
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="assets/img/paspoto_bg_biru.jpeg" class="rounded-circle" alt="Adine Pramesti">
                    </div>
                    <div class="col-8">
                        <h5>Yang membuat aplikasi ini :</h5>
                        <table>
                          <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>Adine Pramesti Gitaswari</td>
                          </tr>
                          <tr>
                            <td>NIM</td>
                            <td>:</td>
                            <td>2031730121</td>
                          </tr>
                          <tr>
                            <td>Tanggal &nbsp;</td>
                            <td>: &nbsp;</td>
                            <td>02 November 2022 - 08 November 2022</td>
                          </tr>
                        </table>
                        <a href="https://github.com/tataadn" target="_blank" class="btn btn-github d-inline-flex align-items-center mt-2" type="button">
                          <svg class="icon icon-xxs me-2" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                          You can find me here!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <!-- <div class="row">
      <div class="col-12 mb-2">
        <a href="/home" class="btn btn-gray-500 d-inline-flex align-items-center me-2">
          <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>
          Kembali
        </a>
        <a href="" class="btn btn-warning d-inline-flex align-items-center me-2">
          <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg>
          Unduh
        </a>
        <button class="btn btn-info d-inline-flex align-items-center me-2" type="submit" >
            <svg class="icon icon-xs me-1" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>
            Edit File
        </button>
    </div>
  </div> -->
<!-- </form> -->

<?= $this->endSection(); ?>