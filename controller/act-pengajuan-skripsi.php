<?php
    date_default_timezone_set("Asia/Jakarta");
    include ('../include/config.php');
    session_start();

    $today = date("Ymd");
    $carikode = $con->query("SELECT max(id_pengajuan) as maxID FROM tb_pengajuan WHERE id_pengajuan LIKE 'SK-$today%'");
    $datakode = mysqli_fetch_array($carikode);
    $idMax = $datakode['maxID'];
    $NoUrut = (int) substr($idMax, 11, 4);
    $NoUrut++;
    $NewID = "SK-".$today .sprintf('%04s', $NoUrut);

    $id_user = $_SESSION['id_user'];
    $id_jurusan = $_SESSION['id_jurusan'];
    $tgl_pengajuan = date("Y-m-d H:i:s");

    $id_tema1 = $_POST['id_tema1'];
    $id_platform1 = $_POST['id_platform1'];
    $judul_skripsi1 = $_POST['judul_skripsi1'];
    $keterangan1 = $_POST['keterangan1'];

    $id_tema2 = $_POST['id_tema2'];
    $id_platform2 = $_POST['id_platform2'];
    $judul_skripsi2 = $_POST['judul_skripsi2'];
    $keterangan2 = $_POST['keterangan2'];

    $id_tema3 = $_POST['id_tema3'];
    $id_platform3 = $_POST['id_platform3'];
    $judul_skripsi3 = $_POST['judul_skripsi3'];
    $keterangan3 = $_POST['keterangan3'];

    $ekstensi_diperbolehkan1 = array('pdf, ppt, docx');
    $file1 = $_FILES['skripsi1']['name'];
    $x1 = explode('.', $file1);
    $ekstensi1 = strtolower(end($x1));
    $ukuran1	= $_FILES['skripsi1']['size'];
    $file_tmp1 = $_FILES['skripsi1']['tmp_name'];

    $ekstensi_diperbolehkan2 = array('pdf');
    $file2 = $_FILES['skripsi2']['name'];
    $x2 = explode('.', $file2);
    $ekstensi2 = strtolower(end($x2));
    $ukuran2 = $_FILES['skripsi2']['size'];
    $file_tmp2 = $_FILES['skripsi2']['tmp_name'];

    $ekstensi_diperbolehkan3 = array('pdf');
    $file3 = $_FILES['skripsi3']['name'];
    $x3 = explode('.', $file3);
    $ekstensi3 = strtolower(end($x3));
    $ukuran3 = $_FILES['skripsi3']['size'];
    $file_tmp3 = $_FILES['skripsi3']['tmp_name'];

    if(in_array($ekstensi1, $ekstensi_diperbolehkan1) === true){
        if($ukuran1 < 1044070){

            if(in_array($ekstensi2, $ekstensi_diperbolehkan2) === true){
                if($ukuran2 < 1044070){

                    if(in_array($ekstensi3, $ekstensi_diperbolehkan3) === true){
                        if($ukuran3 < 1044070){
                            $con->query("INSERT INTO tb_pengajuan VALUES ('$NewID', '$id_user', '$id_jurusan', '$tgl_pengajuan', 'Belum diperiksa', NULL)");
                            
                            move_uploaded_file($file_tmp1, '../file/'.$file1);
                            $con->query("INSERT INTO tb_pengajuan_detail VALUES ('$NewID', '$id_tema1', '$id_platform1', '$judul_skripsi1', 'file/$file1', 'Belum diperiksa', '$keterangan1')");

                            move_uploaded_file($file_tmp2, '../file/'.$file2);
                            $con->query("INSERT INTO tb_pengajuan_detail VALUES ('$NewID', '$id_tema2', '$id_platform2', '$judul_skripsi2', 'file/$file2', 'Belum diperiksa', '$keterangan2')");

                            move_uploaded_file($file_tmp3, '../file/'.$file3);
                            $con->query("INSERT INTO tb_pengajuan_detail VALUES ('$NewID', '$id_tema3', '$id_platform3', '$judul_skripsi3', 'file/$file3', 'Belum diperiksa', '$keterangan3')");

                            if ($con->affected_rows > 0){
                                echo "<script>alert('Skripsi telah berhasil diajukan');window.location='../index.php?page=pengajuan-skripsi-view'</script>";
                            }else{
                                echo "<script>alert('Skripsi telah gagal diajukan');window.location='../index.php?page=pengajuan-skripsi'</script>";
                            }
                        }else{
                            echo "<script>alert('Ukuran file terlalu besar');window.location='../index.php?page=pengajuan-skripsi'</script>";
                        }

                    }else{
                        echo "<script>alert('Ekstensi file tidak diperbolehkan');window.location='../index.php?page=pengajuan-skripsi'</script>";
                    }
                }else{
                    echo "<script>alert('Ukuran file terlalu besar');window.location='../index.php?page=pengajuan-skripsi'</script>";
                }
            }else{
                echo "<script>alert('Ekstensi file tidak diperbolehkan');window.location='../index.php?page=pengajuan-skripsi'</script>";
            }

        }else{
            echo "<script>alert('Ukuran file terlalu besar');window.location='../index.php?page=pengajuan-skripsi'</script>";
        }
    }else{
        echo "<script>alert('Ekstensi file tidak diperbolehkan');window.location='../index.php?page=pengajuan-skripsi'</script>";
    }
?>