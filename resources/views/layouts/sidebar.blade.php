<!-- partial:../../partials/_sidebar.html -->
<!-- <nav class="sidebar sidebar-offcanvas" id="sidebar"> -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <!-- <li class="nav-item">
      <a class="nav-link" href="{{ asset('staradmin/index.html') }}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/dashboard') }}">
        <!-- <i class="menu-icon mdi mdi-file-document"></i> -->
        <i class="menu-icon mdi material-symbols-outlined">home</i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item nav-category">Informasi</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi material-symbols-outlined">campaign</i>
        <span class="menu-title">Pengumuman</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
      <!-- <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/ui-features/buttons.html') }}">Buttons</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/ui-features/dropdowns.html') }}">Dropdowns</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/ui-features/typography.html') }}">Typography</a></li>
        </ul>
      </div> -->
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
        <i class="menu-icon mdi material-symbols-outlined">e911_emergency</i>
        <span class="menu-title">Dana darurat</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
      <!-- <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ asset('staradmin/pages/forms/basic_elements.html') }}">Basic Elements</a></li>
        </ul>
      </div> -->
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="menu-icon mdi material-symbols-outlined">account_balance</i>
        <span class="menu-title">Iuran</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
      <!-- <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">ChartJs</a></li>
        </ul>
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">ChartJs</a></li>
        </ul>
      </div> -->
    </li>
    <li class="nav-item nav-category">Kelola</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="{{ url('/tables') }}" aria-expanded="false" aria-controls="charts">
        <i class="menu-icon mdi material-symbols-outlined">contacts</i>
        <span class="menu-title">Data warga</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
      <!-- <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">ChartJs</a></li>
        </ul>
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">ChartJs</a></li>
        </ul>
      </div> -->
    </li>
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
        <!-- <i class="menu-arrow"></i> -->
      </a>
      <!-- <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/tables') }}">Basic table</a>
            </li>
        </ul>
      </div> -->
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="{{ asset('staradmin/docs/documentation.html') }}" aria-expanded="false" aria-controls="tables">
        <i class="menu-icon mdi material-symbols-outlined">experiment</i>
        <span class="menu-title">Halaman<br>percobaan</span>
        <!-- <i class="menu-arrow"></i> -->
      </a>
      <!-- <div class="collapse" id="tables">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/tables') }}">Basic table</a>
            </li>
        </ul>
      </div> -->
    </li>
    <!-- <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="menu-icon mdi mdi-layers-outline"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/icons/font-awesome.html') }}">Font Awesome</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-account-circle-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/samples/blank-page.html') }}"> Blank Page </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/samples/error-404.html') }}"> 404 </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/samples/error-500.html') }}"> 500 </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/samples/login.html') }}"> Login </a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/samples/register.html') }}"> Register </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ asset('staradmin/docs/documentation.html') }}">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li> -->
  </ul>
</nav>