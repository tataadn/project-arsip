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
                  <h2 class="fw-bolder">Arsip Surat</h2>
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

<div class="pb-4 px-3 col-12 col-xl-12">
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <p class="mb-0">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br>
                Klik <b>"Lihat"</b> pada kolom aksi untuk menampilkan surat.</p>
        </div>
    </div>
</div>

<div class="pb-4 py-2 col-12 col-xl-12">
  <div class="row">
    <div class="col-12 col-xl-2">
      <h6 class="pt-2 text-end">Cari Surat:</h6>
    </div>
    <div class="col-12 col-xl-8">
      <form method="get" action="" class="form-group">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search data .." name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  
    <div class="d-flex justify-content-start align-items-center w-100 flex-wrap">
    </div>
</div>

<div class="row">
  <div class="col-12 col-xl-12">
      <div class="card border-0 shadow mb-4">
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-centered table-nowrap mb-0 rounded">
                      <thead class="thead-light">
                          <tr>
                              <th class="border-0 rounded-start">Nomor Surat</th>
                              <th class="border-0">Kategori</th>
                              <th class="border-0">Judul</th>
                              <th class="border-0">Waktu Pengarsipan</th>
                              <th class="border-0">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <!-- Item -->
                          <?php foreach ($arsip as $row) :
                          ?>
                          <tr>
                              <td><?= $row->nomor_surat; ?></td>
                              <td><?= $row->kategori; ?></td>
                              <td><?= $row->judul; ?></td>
                              <td><?= $row->created_at; ?></td>
                              <td>
                                <a href="/delete/<?= $row->id_arsip; ?>" class="btn btn-danger btn-hapus" type="button">Hapus</a>
                                <a href="#" class="btn btn-warning">Unduh</a>
                                <a href="/preview/<?= $row->id_arsip; ?>" class="btn btn-info" type="button">Lihat</a>
                                <!-- <button class="btn btn-warning" type="button">Unduh</button>
                                <button class="btn btn-info" type="button">Lihat</button> -->
                              </td>
                          </tr>
                          <!-- End of Item -->
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-12 mb-4">
    <a href="/form">
        <button class="btn btn-gray-800 d-inline-flex align-items-center me-2">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            Arsipkan Surat
        </button>
    </a>
  </div>
</div>

<?= $this->endSection(); ?>