<div class="data-table-area mg-b-15" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <a href="index.php?page=user-add" class="btn btn-custon-rounded-three btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah User</a>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-toggle="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id_user">ID user</th>
                                        <th data-field="jurusan">Jurusan</th>
                                        <th data-field="password">Password</th>
                                        <th data-field="nama">Nama</th>
                                        <th data-field="otorisasi">Otorisasi</th>
                                        <th data-field="action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $r = $con->query("SELECT tb_user.id_user, tb_jurusan.nama_jurusan, tb_user.password, tb_user.nama, tb_user.otorisasi FROM tb_jurusan INNER JOIN tb_user ON tb_jurusan.id_jurusan = tb_user.id_jurusan");
                                    while ($rr = $r->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rr['id_user'];?></td>
                                        <td><?php echo $rr['nama_jurusan'];?></td>
                                        <td><?php echo $rr['password'];?></td>
                                        <td><?php echo $rr['nama'];?></td>
                                        <td><?php echo $rr['otorisasi'];?></td>
                                        <td>
                                            <a href="index.php?page=user-edit&id_user=<?php echo $rr['id_user'];?>" class="btn btn-custon-rounded-three btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                            <a href="controller/act-user-del.php?id_user=<?php echo $rr['id_user'];?>" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-custon-rounded-three btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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