<div class="admintab-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="admintab-wrap edu-tab1 mg-t-30">
                    <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                        <li class="active"><a data-toggle="tab" href="#TabUnchecked"><span class="edu-icon edu-analytics tab-custon-ic"></span>Belum diperiksa</a></li>
                        <li><a data-toggle="tab" href="#TabChecked"><span class="edu-icon edu-analytics-arrow tab-custon-ic"></span>Sudah diperiksa</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="TabUnchecked" class="tab-pane in active animated flipInX custon-tab-style1">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-toggle="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="tgl_pengajuan">Tanggal Pengajuan</th>
                                        <th data-field="nama">Nama</th>
                                        <th data-field="id_jurusan">Jurusan</th>
                                        <th data-field="action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $r = $con->query("SELECT tb_pengajuan.id_pengajuan, tb_pengajuan.tgl_pengajuan, tb_pengajuan.id_user, tb_user.nama, tb_jurusan.nama_jurusan FROM tb_user INNER JOIN (tb_jurusan INNER JOIN tb_pengajuan ON tb_jurusan.id_jurusan = tb_pengajuan.id_jurusan) ON tb_user.id_user = tb_pengajuan.id_user WHERE tb_pengajuan.status = 'Belum diperiksa'");
                                    while ($rr = $r->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rr['tgl_pengajuan'];?></td>
                                        <td><?php echo $rr['nama'];?></td>
                                        <td><?php echo $rr['nama_jurusan'];?></td>
                                        <td>
                                            <a href="index.php?page=persetujuan-skripsi-detail&id_pengajuan=<?php echo $rr['id_pengajuan'];?>&id_user=<?php echo $rr['id_user'];?>" class="btn btn-custon-rounded-three btn-primary"><i class="fa fa-eye"></i>&nbsp;Lihat</a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="TabChecked" class="tab-pane animated flipInX custon-tab-style1">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-toggle="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="tgl_pengajuan">Tanggal Pengajuan</th>
                                        <th data-field="nama">Nama</th>
                                        <th data-field="id_jurusan">Jurusan</th>
                                        <th data-field="action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $r = $con->query("SELECT tb_pengajuan.id_pengajuan, tb_pengajuan.tgl_pengajuan, tb_pengajuan.id_user, tb_user.nama, tb_jurusan.nama_jurusan FROM tb_user INNER JOIN (tb_jurusan INNER JOIN tb_pengajuan ON tb_jurusan.id_jurusan = tb_pengajuan.id_jurusan) ON tb_user.id_user = tb_pengajuan.id_user WHERE tb_pengajuan.status <> 'Belum diperiksa'");
                                    while ($rr = $r->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rr['tgl_pengajuan'];?></td>
                                        <td><?php echo $rr['nama'];?></td>
                                        <td><?php echo $rr['nama_jurusan'];?></td>
                                        <td>
                                            <a href="index.php?page=persetujuan-skripsi-detail&id_pengajuan=<?php echo $rr['id_pengajuan'];?>&id_user=<?php echo $rr['id_user'];?>" class="btn btn-custon-rounded-three btn-primary"><i class="fa fa-eye"></i>&nbsp;Lihat</a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>