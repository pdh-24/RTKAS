<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/dashboardbendahara') }}">
        <i class="menu-icon mdi material-symbols-outlined">home</i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Informasi</li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/pengumuman_bendahara') }}">
        <i class="menu-icon mdi material-symbols-outlined">campaign</i>
        <span class="menu-title">Pengumuman</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/dana_darurat_bendahara') }}">
        <i class="menu-icon mdi material-symbols-outlined">e911_emergency</i>
        <span class="menu-title">Dana darurat</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/iuran_bendahara') }}">
        <i class="menu-icon mdi material-symbols-outlined">account_balance</i>
        <span class="menu-title">Iuran</span>
      </a>
    </li>
    <li class="nav-item nav-category">Kelola</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="menu-icon mdi material-symbols-outlined">paid</i>
        <span class="menu-title">Data Kas</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('/data_iuran_bendahara') }}">Data Iuran</a></li>
        </ul>
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('/verifikasi_dana_darurat_bendahara') }}">Verifikasi Dana Darurat</a></li>
        </ul>
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('/laporan_kas_bendahara') }}">Laporan kas</a></li>
        </ul>
      </div>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="{{ asset('staradmin/docs/documentation.html') }}" aria-expanded="false" aria-controls="tables">
        <i class="menu-icon mdi material-symbols-outlined">experiment</i>
        <span class="menu-title">Halaman<br>percobaan</span>
      </a>
    </li>
  </ul>
</nav>

