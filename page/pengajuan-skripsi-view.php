<div class="data-table-area mg-b-15" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <h1>Skripsi yang diajukan</h1>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-toggle="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id_tema">Tema</th>
                                        <th data-field="id_platform">Platform</th>
                                        <th data-field="judul_skripsi">Judul Skripsi</th>
                                        <th data-field="link_file">Link</th>
                                        <th data-field="status">Status</th>
                                        <th data-field="keterangan">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $id_user = $_SESSION['id_user'];
                                    $r = $con->query("SELECT tb_tema.nama_tema, tb_platform.nama_platform, tb_pengajuan_detail.judul_skripsi, tb_pengajuan_detail.link_file, tb_pengajuan_detail.status, tb_pengajuan_detail.keterangan FROM tb_user INNER JOIN (tb_pengajuan INNER JOIN (tb_tema INNER JOIN (tb_platform INNER JOIN tb_pengajuan_detail ON tb_platform.id_platform = tb_pengajuan_detail.id_platform) ON tb_tema.id_tema = tb_pengajuan_detail.id_tema) ON tb_pengajuan.id_pengajuan = tb_pengajuan_detail.id_pengajuan) ON tb_user.id_user = tb_pengajuan.id_user WHERE tb_pengajuan.id_user='$id_user'");
                                    while ($rr = $r->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rr['nama_tema'];?></td>
                                        <td><?php echo $rr['nama_platform'];?></td>
                                        <td><?php echo $rr['judul_skripsi'];?></td>
                                        <td><a href="<?php echo $rr['link_file'];?>" target="_blank">Link</a></td>
                                        <td><?php echo $rr['status'];?></td>
                                        <td><?php echo $rr['keterangan'];?></td>
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