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
          <a class="nav-link" href="{{ url('/pengumuman_rt') }}">
              <i class="menu-icon mdi material-symbols-outlined">campaign</i>
              <span class="menu-title">Pengumuman</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ url('/dana_darurat_rt') }}">
              <i class="menu-icon mdi material-symbols-outlined">e911_emergency</i>
              <span class="menu-title">Dana Darurat</span>
          </a>
      </li>
      <li class="nav-item nav-category">Kelola</li>
      <li class="nav-item">
          <a class="nav-link" href="{{ url('/data_warga') }}">
              <i class="menu-icon mdi material-symbols-outlined">contacts</i>
              <span class="menu-title">Data warga</span>
          </a>
      </li>
      <!-- Menu Dana Darurat -->
      <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#emergency-fund-verification" aria-expanded="false" aria-controls="emergency-fund-verification">
              <i class="menu-icon mdi material-symbols-outlined">e911_emergency</i>
              <span class="menu-title">Dana Darurat</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="emergency-fund-verification" data-parent="#sidebar">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/verifikasi') }}">Terima/Tolak</a>
                  </li>
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
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/verifikasi_kas') }}">Verifikasi iuran</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">Laporan kas</a>
                  </li>
              </ul>
          </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ url('/kelola_pengumuman_rt') }}">
              <i class="menu-icon mdi material-symbols-outlined">newsstand</i>
              <span class="menu-title">Pengumuman</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="{{ asset('staradmin/docs/documentation.html') }}" aria-expanded="false" aria-controls="experiment">
              <i class="menu-icon mdi material-symbols-outlined">experiment</i>
              <span class="menu-title">Halaman<br>percobaan</span>
          </a>
      </li>
  </ul>
</nav>
