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
        <div class="mb-3 mb-lg-0">
            <p class="mb-0">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br>
                Klik <b>"Lihat"</b> pada kolom aksi untuk menampilkan surat.</p>
        </div>
    </div>
</div>


<div class="pb-2 py-2 col-12 col-xl-12">
  <div class="row">
    <div class="col-12 col-sm-6 col-xl-3 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xl-flex align-items-center">
            <div
              class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center"
            >
            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
              <svg
                class="icon"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
          </div>
            <div class="col-12 col-xl-7 px-xl-0">
              <div class="d-none d-sm-block">
                <h2 class="h6 text-gray-400 mb-0">Undangan</h2>
                <h3 class="fw-extrabold mb-2"><?= $total_undangan; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xl-flex align-items-center">
            <div
              class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center"
            >
            <div
                    class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0"
                  >
                    <svg
                      class="icon"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                  </div>
            </div>
            <div class="col-12 col-xl-7 px-xl-0">
              <div class="d-none d-sm-block">
                <h2 class="h6 text-gray-400 mb-0">Pengumuman</h2>
                <h3 class="fw-extrabold mb-2"><?= $total_pengumuman; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xl-flex align-items-center">
            <div
              class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center"
            >
              <div
                class="icon-shape icon-shape-primary rounded me-4 me-sm-0"
              >
                <svg
                  class="icon"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
                  ></path>
                </svg>
              </div>
              <div class="d-sm-none">
                <h2 class="h5">Customers</h2>
                <h3 class="fw-extrabold mb-1">345,678</h3>
              </div>
            </div>
            <div class="col-12 col-xl-7 px-xl-0">
              <div class="d-none d-sm-block">
                <h2 class="h6 text-gray-400 mb-0">Nota Dinas</h2>
                <h3 class="fw-extrabold mb-2"><?= $total_nota; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xl-flex align-items-center">
            <div
              class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center"
            >
            <div
                      class="icon-shape icon-shape-purple rounded me-4 me-sm-0"
                    >
                      <svg
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"
                        ></path>
                      </svg>
                    </div>
            </div>
            <div class="col-12 col-xl-7 px-xl-0">
              <div class="d-none d-sm-block">
                <p class="text-gray-400 mb-0">Pemberitahu</p>
                <h3 class="fw-extrabold mb-2"><?= $total_pemberitahuan; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-3 mb-4">
      <div class="card border-0 shadow">
        <div class="card-body">
          <div class="row d-block d-xl-flex align-items-center">
            <div
              class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center"
            >
            <div
                      class="icon-shape icon-shape-danger rounded me-4 me-sm-0"
                    >
                      <svg
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </div>
            </div>
            <div class="col-12 col-xl-7 px-xl-0">
              <div class="d-none d-sm-block">
                <h2 class="h6 text-danger mb-0">TOTAL</h2>
                <h3 class="fw-extrabold text-danger mb-2"><?= $total; ?></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="pb-2 py-2 col-12 col-xl-12">
  <div class="row">
    <div class="col-12 col-xl-2">
      <h6 class="pt-2 text-end">Cari Surat:</h6>
    </div>
    <div class="col-12 col-xl-8">
      <form method="post" action="" class="form-group">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search data .." name="keyword">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="submit">Search</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-xl-12 mb-3">
    <div class="card border-0 shadow">
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
                            <a href="/download/<?= $row->id_arsip; ?>" class="btn btn-warning">Unduh</a>
                            <a href="/preview-<?= $row->id_arsip; ?>" class="btn btn-info" type="button">Lihat</a>
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

<div class="row px-4">
  <div class="col-6 mb-4">
    <a href="/form">
      <button class="btn btn-gray-800 d-inline-flex align-items-center me-2">
        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        Arsipkan Surat
      </button>
    </a>
  </div>
  <div class="col-6">
    <?= $pager->links('arsip','pagination_data'); ?>
  </div>
</div>

<?= $this->endSection(); ?>