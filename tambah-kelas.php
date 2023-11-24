<?php
if (isset ($_POST ['nama_kelas'])) {
    $nama_kelas =$_POST['nama_kelas'];
    $id_jurusan =$_POST['id_jurusan'];


    $query =mysqli_query($koneksi, "INSERT INTO kelas (nama_kelas,id_jurusan) VALUES ('$nama_kelas','$id_jurusan')");

    if ($query) {
        echo '<script>alert("Data berhasil  di tambah");location.href="?page=kelas";</script>';
    }

}
?>
<h3 class="h3 mb-3"><strong></strong>Tambah Kelas</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="card flex-fill">

                                <div class-="card-body">
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="form-label">Nama Kelas</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="nama_kelas" class="form-control">
                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Jurusan</label>
                                            <select name="id_jurusan" class="form-select">
                                          <?php
                                          $query =mysqli_query($koneksi, "SELECT * FROM jurusan");
                                          while ($data =mysqli_fetch_array($query)){

                                            ?>
                                            <option value="<?php echo $data ['id_jurusan'] ?>"><?php echo $data['nama_jurusan'] ?></option>

                                          <?php
                                          }

                                          ?>
          
                                        </select>

                                        </div>
                                        <div class="mb-3" style="float:right;">
                                            <button class="btn btn-primary">Simpan</button>
                                            <button type="reset" class="btn btn-danger">reset</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
