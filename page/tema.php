<div class="data-table-area mg-b-15" style="padding-top: 20px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <a href="index.php?page=tema-add" class="btn btn-custon-rounded-three btn-primary"><i class="fa fa-plus"></i>&nbsp;Tambah Tema</a>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-toggle="true" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id_tema">ID Tema</th>
                                        <th data-field="tema">Tema</th>
                                        <th data-field="action">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $r = $con->query("SELECT * FROM tb_tema");
                                    while ($rr = $r->fetch_array()) {
                                ?>
                                    <tr>
                                        <td><?php echo $rr['id_tema'];?></td>
                                        <td><?php echo $rr['nama_tema'];?></td>
                                        <td>
                                            <a href="index.php?page=tema-edit&id_tema=<?php echo $rr['id_tema'];?>" class="btn btn-custon-rounded-three btn-primary"><i class="fa fa-pencil"></i>&nbsp;Edit</a>
                                            <a href="controller/act-tema-del.php?id_tema=<?php echo $rr['id_tema'];?>" onclick="return confirm('Yakin ingin hapus data?')" class="btn btn-custon-rounded-three btn-danger"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
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