<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item">
        <a class="nav-link" href="{{ route("mahasiswa.home") }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset("icons/coreui.svg#cil-speedometer") }}"></use>
            </svg>
            {{ __("HOME") }}
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route("admin.index") }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset("icons/coreui.svg#cil-speedometer") }}"></use>
            </svg>
            {{ __("ADMIN") }}
        </a>
    </li>

    {{-- <li class="nav-item">
        <a class="nav-link {{ request()->is("roles*") ? "active" : "" }}" href="{{ route("roles.index") }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset("icons/coreui.svg#cil-group") }}"></use>
            </svg>
            {{ __("Roles") }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->is("permissions*") ? "active" : "" }}" href="{{ route("permissions.index") }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset("icons/coreui.svg#cil-room") }}"></use>
            </svg>
            {{ __("Permissions") }}
        </a>
    </li>

    <li class="nav-group" aria-expanded="false">
        <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
                <use xlink:href="{{ asset("icons/coreui.svg#cil-star") }}"></use>
            </svg>
            Layanan
        </a>
        <ul class="nav-group-items" style="height: 0px;">
            <li class="nav-item">
                <a class="nav-link" href="{{ route("ktp") }}" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset("icons/coreui.svg#cil-bug") }}"></use>
                    </svg>
                    Kartu Tanda Penduduk
                </a>
                <a class="nav-link" href="{{ route("kk") }}" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset("icons/coreui.svg#cil-bug") }}"></use>
                    </svg>
                    Kartu Keluarga
                </a>
                <a class="nav-link" href="{{ route("singkronasidata") }}" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset("icons/coreui.svg#cil-bug") }}"></use>
                    </svg>
                    Singkronasi Data
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-group" aria-expanded="false">
        <a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
                <use xlink:href="{{ asset("icons/coreui.svg#cil-star") }}"></use>
            </svg>
            Lainnya
        </a>
        <ul class="nav-group-items" style="height: 0px;">
            <li class="nav-item">
                <a class="nav-link" href="{{ route("users.index") }}" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset("icons/coreui.svg#cil-bug") }}"></use>
                    </svg>
                    Data Pengguna
                </a>
                <a class="nav-link" href="{{ route("kk") }}" target="_top">
                    <svg class="nav-icon">
                        <use xlink:href="{{ asset("icons/coreui.svg#cil-bug") }}"></use>
                    </svg>
                    Pengaturan
                </a>

            </li>
        </ul>
    </li> --}}
</ul>
