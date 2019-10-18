@php
    $produits = [''];
@endphp

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active">
                    <a href="{{ route('back.home') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="{{ route('back.produits') }}"><i class="fe fe-cart"></i> <span>Produits</span></a>
                </li>
                <li>
                    <a href="{{ route('back.utilisateurs') }}"><i class="fe fe-users"></i> <span>Utilisateurs</span></a>
                </li>
                <li class="menu-title">
                    <span>Pages</span>
                </li>
                <li>
                    <a href="profile.html"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="fe fe-warning"></i> <span> Notification </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="error-404.html">404 Error </a></li>
                        <li><a href="error-500.html">500 Error </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
