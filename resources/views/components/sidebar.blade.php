<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">E-Presensi</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                </div>
                <div class="menu-title">Master data</div>
            </a>
            <ul>
                <li> 
                    <a href="{{ route('admin.master.index') }}"><i class="bx bx-right-arrow-alt"></i>Master</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Data</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">User Management</div>
                </a>
                <ul>
                    <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a>
                    </li>
                </ul>
            </li>
        <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Widgets</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->

</div>