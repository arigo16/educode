<form action="controller/act-pengajuan-skripsi.php" method="POST" enctype="multipart/form-data">    
    <div class="row" style="padding-top: 20px; padding-right: 20px; padding-left: 20px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Skripsi Pertama</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label>Tema</label>
                                                <select class="form-control custom-select-value" name="id_tema1" required>
                                                    <?php
                                                        $r = $con->query("SELECT * FROM tb_tema");
                                                        foreach ($r as $rr) {
                                                    ?>
                                                        <option value="<?php echo $rr['id_tema'];?>"><?php echo $rr['nama_tema'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <label>Platform</label>
                                                <select class="form-control custom-select-value" name="id_platform1" required>
                                                    <?php
                                                        $r = $con->query("SELECT * FROM tb_platform");
                                                        foreach ($r as $rr) {
                                                    ?>
                                                        <option value="<?php echo $rr['id_platform'];?>"><?php echo $rr['nama_platform'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Judul Skripsi</label>
                                                <textarea rows="5" name="judul_skripsi1" class="form-control" maxlength="500" required/></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Upload Skripsi</label>
                                                <div class="file-upload-inner ts-forms">
                                                    <div class="input prepend-big-btn">
                                                        <label class="icon-right" for="prepend-big-btn">
                                                                <i class="fa fa-download"></i>
                                                            </label>
                                                        <div class="file-button">
                                                            Browse
                                                            <input type="file" name="skripsi1" onchange="document.getElementById('prepend-big-btn1').value = this.value;">
                                                        </div>
                                                        <input type="text" id="prepend-big-btn1" placeholder="no file selected" required readonly>
                                                        <span class="help-block">Wajib PDF, Ukuran Max 20Mb</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Keterangan</label>
                                                <textarea rows="5" name="keterangan1" class="form-control"/></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 20px; padding-right: 20px; padding-left: 20px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Skripsi Kedua</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label>Tema</label>
                                                <select class="form-control custom-select-value" name="id_tema2" required>
                                                    <?php
                                                        $r = $con->query("SELECT * FROM tb_tema");
                                                        foreach ($r as $rr) {
                                                    ?>
                                                        <option value="<?php echo $rr['id_tema'];?>"><?php echo $rr['nama_tema'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <label>Platform</label>
                                                <select class="form-control custom-select-value" name="id_platform2" required>
                                                    <?php
                                                        $r = $con->query("SELECT * FROM tb_platform");
                                                        foreach ($r as $rr) {
                                                    ?>
                                                        <option value="<?php echo $rr['id_platform'];?>"><?php echo $rr['nama_platform'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Judul Skripsi</label>
                                                <textarea rows="5" name="judul_skripsi2" class="form-control" maxlength="500" required/></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Upload Skripsi</label>
                                                <div class="file-upload-inner ts-forms">
                                                    <div class="input prepend-big-btn">
                                                        <label class="icon-right" for="prepend-big-btn">
                                                                <i class="fa fa-download"></i>
                                                            </label>
                                                        <div class="file-button">
                                                            Browse
                                                            <input type="file" name="skripsi2" onchange="document.getElementById('prepend-big-btn2').value = this.value;">
                                                        </div>
                                                        <input type="text" id="prepend-big-btn2" placeholder="no file selected" required readonly>
                                                        <span class="help-block">Wajib PDF, Ukuran Max 20Mb</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Keterangan</label>
                                                <textarea rows="5" name="keterangan2" class="form-control"/></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 20px; padding-right: 20px; padding-left: 20px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline12-list">
                <div class="sparkline12-hd">
                    <div class="main-sparkline12-hd">
                        <h1>Skripsi Ketiga</h1>
                    </div>
                </div>
                <div class="sparkline12-graph">
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="all-form-element-inner">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <label>Tema</label>
                                                <select class="form-control custom-select-value" name="id_tema3" required>
                                                    <?php
                                                        $r = $con->query("SELECT * FROM tb_tema");
                                                        foreach ($r as $rr) {
                                                    ?>
                                                        <option value="<?php echo $rr['id_tema'];?>"><?php echo $rr['nama_tema'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                <label>Platform</label>
                                                <select class="form-control custom-select-value" name="id_platform3" required>
                                                    <?php
                                                        $r = $con->query("SELECT * FROM tb_platform");
                                                        foreach ($r as $rr) {
                                                    ?>
                                                        <option value="<?php echo $rr['id_platform'];?>"><?php echo $rr['nama_platform'];?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Judul Skripsi</label>
                                                <textarea rows="5" name="judul_skripsi3" class="form-control" maxlength="500" required/></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Upload Skripsi</label>
                                                <div class="file-upload-inner ts-forms">
                                                    <div class="input prepend-big-btn">
                                                        <label class="icon-right" for="prepend-big-btn">
                                                                <i class="fa fa-download"></i>
                                                            </label>
                                                        <div class="file-button">
                                                            Browse
                                                            <input type="file" name="skripsi3" onchange="document.getElementById('prepend-big-btn3').value = this.value;">
                                                        </div>
                                                        <input type="text" id="prepend-big-btn3" placeholder="no file selected" required readonly>
                                                        <span class="help-block">Wajib PDF, Ukuran Max 20Mb</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label>Keterangan</label>
                                                <textarea rows="5" name="keterangan3" class="form-control"/></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="login-horizental cancel-wp pull-left form-bc-ele" style="padding-right: 20px; padding-left: 20px; padding-bottom: 10px;">
        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Ajukan Skripsi</button>
    </div>
</form>