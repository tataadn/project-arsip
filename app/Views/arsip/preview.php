<?= $this->extend('arsip/layout/template'); ?>

<?= $this->section('content'); ?>

<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
  <div class="container-fluid px-0">
    <div
      class="d-flex justify-content-between w-100"
      id="navbarSupportedContent"
    >
      <div class="d-flex align-items-center">
          <div class="px-3 col-12 col-xl-12">
              <div class="mb-3 mb-lg-0">
                  <h2 class="fw-bolder">Arsip Surat >> Lihat</h2>
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
            <a class="dropdown-item d-flex align-items-center" href="#">
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
          <table>
            <tr>
              <td><b>Nomor</b></td>
              <td>:</td>
              <td><?= $filepdf->nomor_surat; ?></td>
            </tr>
            <tr>
              <td><b>Kategori</b></td>
              <td>:</td>
              <td><?= $filepdf->kategori; ?></td>
            </tr>
            <tr>
              <td><b>Judul</b></td>
              <td>:</td>
              <td><?= $filepdf->judul; ?></td>
            </tr>
            <tr>
              <td><b>Waktu Unggah &nbsp;</b></td>
              <td>: &nbsp;</td>
              <td><?= $filepdf->created_at; ?></td>
            </tr>
          </table>
        </div>
    </div>
</div>

<!-- <form action="/save" method="post" class="px-3" enctype="multipart/form-data"> -->
  <div class="row">
    <div class="col-12 col-xl-12">
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
              <iframe src="file_arsip/<?= $filepdf->filepdf; ?>" width="100%" height="500px" title="description"></iframe>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
      <div class="col-12 mb-2">
        <a href="/home" class="btn btn-gray-500 d-inline-flex align-items-center me-2">
          <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>
          Kembali
        </a>
        <a href="/download/<?= $filepdf->id_arsip; ?>" class="btn btn-warning d-inline-flex align-items-center me-2">
          <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
          <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/></svg>
          Unduh
        </a>
        <a href="/edit-<?= $filepdf->id_arsip; ?>" class="btn btn-info d-inline-flex align-items-center me-2">
          <svg class="icon icon-xs me-1" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>
          Edit File
        </a>
        <!-- <button class="btn btn-info d-inline-flex align-items-center me-2" type="submit" >
        </button> -->
    </div>
  </div>
<!-- </form> -->

<?= $this->endSection(); ?>