<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: silver;">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboardrt') }}">
          <i class="menu-icon mdi material-symbols-outlined">home</i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">Informasi</li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/pengumuman') }}">
          <i class="menu-icon mdi material-symbols-outlined">campaign</i>
          <span class="menu-title">Pengumuman</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/dana_darurat') }}">
          <i class="menu-icon mdi material-symbols-outlined">e911_emergency</i>
          <span class="menu-title">Dana Darurat</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="emergency-fund" data-parent="#sidebar">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="#">Submenu 1</a>
            </li>
            <!-- Tambahkan submenu lainnya sesuai kebutuhan -->
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/iuran') }}">
          <i class="menu-icon mdi material-symbols-outlined">account_balance</i>
          <span class="menu-title">Iuran</span>
        </a>
      </li>
      <li class="nav-item nav-category">Kelola</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi material-symbols-outlined">contacts</i>
          <span class="menu-title">Data warga</span>
        </a>
      </li>
      <!-- Menu Dana Darurat -->
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#emergency-fund" aria-expanded="false" aria-controls="emergency-fund">
        <i class="menu-icon mdi material-symbols-outlined">e911_emergency</i>
        <span class="menu-title">Dana Darurat</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="emergency-fund" data-parent="#sidebar">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="#">Terima/Tolak</a>
          </li>
            <!-- Tambahkan submenu lainnya sesuai kebutuhan -->
          </ul>
        </div>
      </li>
      <!-- Akhir Menu Dana Darurat -->
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="menu-icon mdi material-symbols-outlined">paid</i>
          <span class="menu-title">Data Kas</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">Verifikasi iuran</a></li>
          </ul>
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">Laporan kas</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi material-symbols-outlined">newsstand</i>
          <span class="menu-title">Pengumuman</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="{{ asset('staradmin/docs/documentation.html') }}" aria-expanded="false" aria-controls="tables">
          <i class="menu-icon mdi material-symbols-outlined">experiment</i>
          <span class="menu-title">Halaman<br>percobaan</span>
        </a>
      </li>
    </ul>
  </nav>
  