<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.php"><img class="main-logo" src="assets-admin/img/logo/logo.png" alt="" /></a>
            <strong><a href="index.php"><img src="assets-admin/img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                <?php
                    if ($authorization == "Administrator") {
                ?>
                    <li>
                        <a href="index.php" aria-expanded="false"><span class="fa fa-home icon-wrap"></span> <span class="mini-click-non">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-file icon-wrap"></span> <span class="mini-click-non">Master</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="#"><span class="mini-sub-pro">Mahasiswa</span></a></li>
                            <li><a href="#"><span class="mini-sub-pro">Dosen</span></a></li>
                            <li><a href="#"><span class="mini-sub-pro">User</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-book icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="#"><span class="mini-sub-pro">Ajukan Skripsi</span></a></li>
                            <li><a href="#"><span class="mini-sub-pro">Persetujuan Skripsi</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-clipboard icon-wrap"></span> <span class="mini-click-non">Laporan</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="#"><span class="mini-sub-pro">Laporan Skripsi</span></a></li>
                        </ul>
                    </li>
                <?php
                    } else if ($authorization == "Mahasiswa") {
                ?>
                    <li>
                        <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-book icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="#"><span class="mini-sub-pro">Ajukan Skripsi</span></a></li>
                        </ul>
                    </li>
                <?php
                    } else if ($authorization == "Ketua Jurusan") {
                ?>
                    <li>
                        <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-book icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="#"><span class="mini-sub-pro">Persetujuan Skripsi</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-clipboard icon-wrap"></span> <span class="mini-click-non">Laporan</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="#"><span class="mini-sub-pro">Laporan Skripsi</span></a></li>
                        </ul>
                    </li>
                <?php
                    }
                ?>
                </ul>
            </nav>
        </div>
    </nav>
</div>


<!-- For Mobile -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                        <?php
                            if ($authorization == "Administrator") {
                        ?>
                            <li>
                                <a href="index.php" aria-expanded="false"><span class="fa fa-home icon-wrap"></span> <span class="mini-click-non">Dashboard</span></a>
                            </li>
                            <li>
                                <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-file icon-wrap"></span> <span class="mini-click-non">Master</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="#"><span class="mini-sub-pro">Mahasiswa</span></a></li>
                                    <li><a href="#"><span class="mini-sub-pro">Dosen</span></a></li>
                                    <li><a href="#"><span class="mini-sub-pro">User</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-book icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="#"><span class="mini-sub-pro">Ajukan Skripsi</span></a></li>
                                    <li><a href="#"><span class="mini-sub-pro">Persetujuan Skripsi</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-clipboard icon-wrap"></span> <span class="mini-click-non">Laporan</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="#"><span class="mini-sub-pro">Laporan Skripsi</span></a></li>
                                </ul>
                            </li>
                        <?php
                            } else if ($authorization == "Mahasiswa") {
                        ?>
                            <li>
                                <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-book icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="#"><span class="mini-sub-pro">Ajukan Skripsi</span></a></li>
                                </ul>
                            </li>
                        <?php
                            } else if ($authorization == "Ketua Jurusan") {
                        ?>
                            <li>
                                <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-book icon-wrap"></span> <span class="mini-click-non">Transaksi</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="#"><span class="mini-sub-pro">Persetujuan Skripsi</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="" class="has-arrow" aria-expanded="false"><span class="fa fa-clipboard icon-wrap"></span> <span class="mini-click-non">Laporan</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
                                    <li><a href="#"><span class="mini-sub-pro">Laporan Skripsi</span></a></li>
                                </ul>
                            </li>
                        <?php
                            }
                        ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>