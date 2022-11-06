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
                  <h2 class="fw-bolder">Arsip Surat >> Edit</h2>
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
            <p class="mb-0">Edit surat yang telah terbit pada form ini untuk diarsipkan. <br>
                Catatan : 
                <ul>
                    <li>Gunakan file berformat PDF</li>
                </ul>
            </p>
        </div>
    </div>
</div>

<?php if(session()->getFlashdata('error')) : ?>
<div class="alert alert-danger d-flex align-items-center mx-3" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill me-2" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
  </svg>
  <div>
  <?= session()->getFlashdata('error'); ?>
  </div>
</div>
<?php elseif(session()->getFlashdata('success')) : ?>
  <div class="alert alert-success d-flex align-items-center mx-3" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill me-2" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
    </svg>
    <div>
    <?= session()->getFlashdata('success'); ?>
    </div>
  </div>
<?php endif; ?>

<form action="/update/<?= $edit->id_arsip; ?>" method="post" class="px-3" enctype="multipart/form-data">
<?= csrf_field(); ?>
  <div class="row">
    <div class="col-12 col-xl-12">
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
              <input type="hidden" name="id_surat" class="form-control " value="<?= $edit->id_arsip; ?>">
              <div class="mb-2">
                  <div class="row">
                      <div class="col-2 pt-1">
                          <label for="filepdf" class="form-label">File Surat (PDF)</label>
                      </div>
                      <div class="col-8">
                          <input type="file" name="filepdf" class="form-control <?= ($validation->hasError('filepdf')) ? 'is-invalid' : '' ?>" id="filepdf" value="<?= (old('filepdf')) ? old('filepdf') : $edit->filepdf; ?>">
                          <div class="invalid-feedback">
                            <?= $validation->getError('filepdf') ?>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
  </div>

  <div class="row">
      <div class="col-12 mb-2">
        <a href="/preview-<?= $edit->id_arsip; ?>" class="btn btn-gray-500 d-inline-flex align-items-center me-2">
          <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 19 19" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>
          Kembali
        </a>
        <button class="btn btn-tertiary d-inline-flex align-items-center me-2" type="submit" >
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/></svg>
            Simpan
        </button>
    </div>
  </div>
</form>

<?= $this->endSection(); ?>