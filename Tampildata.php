<html>

<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 class="text-center">TAMPILAN DATA PESERTA DIDIK</h1><br>
    <div class="card">
        <p>Tanggal : <?php echo date('d F Y'); ?></p>
        <div class="card-header bg-primary text-white">
            REGISTRASI PESERTA DIDIK
        </div>
        <div class="card-body">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>Jenis Pendaftaran</th>
                            <th>Tanggal Masuk Sekolah</th>
                            <th>NIS</th>
                            <th>Nomor Peserta Ujian</th>
                            <th>Apakah Pernah PAUD</th>
                            <th>Apakah Pernah TK</th>
                            <th>No. Seri SKHUN Sebelumnya</th>
                            <th>No. Seri Ijazah Sebelumnya</th>
                            <th>Hobi</th>
                            <th>Cita-cita</th>
                        </tr>
                        <?php
                    include 'Koneksi.php';
                    $registrasi = mysqli_query($conn, "SELECT * FROM registrasi");
                    foreach ($registrasi as $row) {
           

                echo "<tr>
                    <td>" . $row['nopendaftaran'] . "</td>
                    <td>" . $row['jenispend'] . "</td>
                    <td>" . $row['tglmsksklh'] . "</td>
                    <td>" . $row['nis'] . "</td>
                    <td>" . $row['nopesujian'] . "</td>
                    <td>" . $row['appaud'] . "</td>
                    <td>" . $row['aptk'] . "</td>
                    <td>" . $row['noserskhun'] . "</td>
                    <td>" . $row['noserijazah'] . "</td>
                    <td>" . $row['hobi'] . "</td>
                    <td>" . $row['citacita'] . "</td>
                <tr>";
                      
                    }
                    ?>
                    </table>
                </div>
        </div>
        <div class="card-header bg-primary text-white">
            DATA PRIBADI
        </div>
        <div class="card-body">
                <div class="form-group row">
                    <table class="table table-bordered table-sm">
                        <tr>
                            <th>namaleng</th>
                            <th>jkelamin</th>
                            <th>nisn</th>
                            <th>nik</th>
                            <th>tlahir</th>
                            <th>tglahir</th>
                            <th>agama</th>
                            <th>berkebutuhankhusus</th>
                            <th>alamat</th>
                            <th>rt</th>
                            <th>rw</th>
                            <th>namadusun</th>
                            <th>namakel</th>
                            <th>kec</th>
                            <th>kodepos</th>
                            <th>ttinggal</th>
                            <th>transport</th>
                            <th>nohp</th>
                            <th>notelp</th>
                            <th>email</th>
                            <th>kpspkh</th>
                            <th>nokpspkh</th>
                            <th>kwn</th>
                            <th>namaneg</th>
                        </tr>
                        <?php
                    include 'Koneksi.php';
                    $datadiri = mysqli_query($conn, "SELECT * FROM datadiri");
                    foreach ($datadiri as $row) {
           

                echo "<tr>
                            <td>" . $row['namaleng'] . "</td>
                            <td>" . $row['jkelamin'] . "</td>
                            <td>" . $row['nisn'] . "</td>
                            <td>" . $row['nik'] . "</td>
                            <td>" . $row['tlahir'] . "</td>
                            <td>" . $row['tglahir'] . "</td>
                            <td>" . $row['agama'] . "</td>
                            <td>" . $row['berkebkhusus'] . "</td>
                            <td>" . $row['alamat'] . "</td>
                            <td>" . $row['rt'] . "</td>
                            <td>" . $row['rw'] . "</td>
                            <td>" . $row['namadusun'] . "</td>
                            <td>" . $row['namakel'] . "</td>
                            <td>" . $row['kec'] . "</td>
                            <td>" . $row['kodepos'] . "</td>
                            <td>" . $row['ttinggal'] . "</td>
                        </tr>";
                    }
                    ?>
                    </table>
                </div>
                <br>
            </form>
        </div>
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Moda Transportasi</th>
                    <th>Nomor HP</th>
                    <th>Nomor Telepon</th>
                    <th>E-mail Pribadi</th>
                    <th>Penerima KPS/PKH/KIP</th>
                    <th>No.KPS/KK/PKH/KIP</th>
                    <th>Kewarganegaraan</th>
                    <th>Nama Negara</th>

                </tr>
                <?php
                    include 'Koneksi.php';
                    $datadiri = mysqli_query($conn, "SELECT * FROM datadiri");
                    foreach ($datadiri as $row) {
           

                echo "<tr>
                <td>" . $row['transport'] . "</td>
                    <td>" . $row['nohp'] . "</td>
                    <td>" . $row['notelp'] . "</td>
                    <td>" . $row['email'] . "</td>
                    <td>" . $row['kpspkh'] . "</td>
                    <td>" . $row['nokpspkh'] . "</td>
                    <td>" . $row['kwn'] . "</td>
                    <td>" . $row['namaneg'] . "</td>
                <tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-primary text-white">
        DATA AYAH KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ayah Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'Koneksi.php';
                    $dataayah = mysqli_query($conn, "SELECT * FROM dataayah");
                    foreach ($dataayah as $row) {
           

                echo "<tr>
                    <td>" . $row['namaayah'] . "</td>
                    <td>" . $row['tlayah'] . "</td>
                    <td>" . $row['pendayah'] . "</td>
                    <td>" . $row['pekerayah'] . "</td>
                    <td>" . $row['salaryayah'] . "</td>
                    <td>" . $row['berkebayah'] . "</td>
                </tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
    <div class="card-header bg-primary text-white">
        DATA IBU KANDUNG
    </div>
    <div class="card-body">
        <div class="form-group row">
            <table class="table table-bordered table-sm">
                <tr>
                    <th>Nama Ibu Kandung</th>
                    <th>Tahun Lahir</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan Bulanan</th>
                    <th>Berkebutuhan Khusus</th>
                </tr>
                <?php
                    include 'Koneksi.php';
                    $dataibu = mysqli_query($conn, "SELECT * FROM dataibu");
                    foreach ($dataibu as $row) {
           

                echo "<tr>
                        <td>" . $row['namaibu'] . "</td>
                        <td>" . $row['tlibu'] . "</td>
                        <td>" . $row['pendibu'] . "</td>
                        <td>" . $row['pekeribu'] . "</td>
                        <td>" . $row['salaryibu'] . "</td>
                        <td>" . $row['berkebibu'] . "</td>
                    </tr>";
                      
                    }
                    ?>
            </table>
        </div>
    </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="keluar" name="keluar" class="btn btn-primary">Log Out</button>
            </div>
        </div>
    </form>


</body>

</html>