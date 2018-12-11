<?php
	$id_user = $_GET['id_user'];
	$r = $con->query("SELECT * FROM tb_user WHERE id_user = '$id_user'");
	foreach ($r as $rr) {
        $id_user = $rr['id_user'];
?>

<div class="row" style="padding: 20px;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline12-list">
            <div class="sparkline12-hd">
                <div class="main-sparkline12-hd">
                    <h1>Tambah user</h1>
                </div>
            </div>
            <div class="sparkline12-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="all-form-element-inner">
                                <form  action="controller/act-user-edit.php?id_user=<?php echo $id_user; ?>" method="POST">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">ID User</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <input name="id_user" type="text" class="form-control" value="<?php echo $rr['id_user'];?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Jurusan</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="id_jurusan">
                                                        <?php
                                                            $t = $con->query("SELECT * FROM tb_jurusan");
                                                            foreach ($t as $tt) {
                                                        ?>
                                                            <option value="<?php echo $tt['id_jurusan'];?>" <?php if($rr['id_jurusan']==$tt['id_jurusan']){echo "selected"; } ?>><?php echo $tt['nama_jurusan'];?></option>
                                                        <?php
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Password</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <input name="password" type="password" class="form-control" value="<?php echo $rr['password'];?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Nama Lengkap</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <input name="nama" type="text" class="form-control" value="<?php echo $rr['nama'];?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label class="login2 pull-right pull-right-pro">Otorisasi</label>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <div class="form-select-list">
                                                    <select class="form-control custom-select-value" name="otorisasi">
                                                        <option value="Administrator" <?php if($rr['otorisasi'] == "Administrator"){echo "selected";}?>>Administrator</option>
                                                        <option value="Ketua Jurusan" <?php if($rr['otorisasi'] == "Ketua Jurusan"){echo "selected";}?>>Ketua Jurusan</option>
                                                        <option value="Mahasiswa" <?php if($rr['otorisasi'] == "Mahasiswa"){echo "selected";}?>>Mahasiswa</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="login-btn-inner">
                                            <div class="row">
                                                <div class="col-lg-3"></div>
                                                <div class="col-lg-9">
                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                        <a href="index.php?page=user" class="btn btn-sm btn-primary login-submit-cs">Kembali</a>
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