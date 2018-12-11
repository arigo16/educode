<?php
	$id_tema = $_GET['id_tema'];
	$r = $con->query("SELECT * FROM tb_tema WHERE id_tema = '$id_tema'");
	foreach ($r as $rr) {
        $id_tema = $rr['id_tema']
?>

<div class="row" style="padding: 20px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1>Edit Tema</h1>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="all-form-element-inner">
                                <form action="controller/act-tema-edit.php?id_tema=<?php echo $id_tema; ?>" method="POST">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Tema</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <input name="nama_tema" type="text" value="<?php echo $rr['nama_tema'];?>" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="login-btn-inner">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-9">
                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                        <a href="index.php?page=tema" class="btn btn-sm btn-primary login-submit-cs">Kembali</a>
                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>