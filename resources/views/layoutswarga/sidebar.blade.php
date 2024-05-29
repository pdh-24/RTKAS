<nav class="sidebar sidebar-offcanvas" id="sidebar" style="background-color: silver;">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="menu-icon mdi material-symbols-outlined">home</i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Informasi</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi material-symbols-outlined">campaign</i>
                <span class="menu-title">Pengumuman</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi material-symbols-outlined">paid</i>
                <span class="menu-title">Dana Darurat</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">Request Dana Darurat</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi material-symbols-outlined">account_balance</i>
                <span class="menu-title">Iuran</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ asset('staradmin/pages/charts/chartjs.html') }}">Bayar</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
