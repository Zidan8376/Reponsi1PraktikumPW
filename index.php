<!DOCTYPE html>

<head>
    <title>Responsi 1 Pemrograman Dasar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

    <?php 
        $tglLahir = "2002-02-28";
        function umur($tgl_lahir){
            $dateBirth = new DateTime($tgl_lahir);
            $Now = new DateTime("today");
            if ($dateBirth > $Now) { 
                $y = 0;
            }else{
                $y = $Now->diff($dateBirth)->y;
            }
            return $y." tahun ";
        }

        function converttglLahir($tgl_lahir){
            $bulan = array ( 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember' );
            $split = explode('-', $tgl_lahir);
            return $split[2] . ' ' . $bulan[ (int)$split[1] - 1] . ' ' . $split[0];
        }
    ?>
</head>

<body>
    <header class="container bg-header text-white">
        <div class="row">
            <div class="col-md-12 py-4 text-center">
                <h3>Responsi 1 Praktikum Pemrograman Dasar </h1>
            </div>
        </div>
    </header>
    
    <main class="container border">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-5">
                        <div class="box-image">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <ul class="carousel-indicators">
                                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                                  <li data-target="#demo" data-slide-to="1"></li>
                                  <li data-target="#demo" data-slide-to="2"></li>
                                </ul>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="assets/image/img-02.jpg" alt="Los Angeles" width="1100" height="500">                              
                                  </div>
                                  <div class="carousel-item">
                                    <img src="assets/image/img-01.jpg" alt="Chicago" width="1100" height="500">                            
                                  </div>
                                  <div class="carousel-item">
                                    <img src="assets/image/img-03.jpg" alt="New York" width="1100" height="500">                               
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                  <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                  <span class="carousel-control-next-icon"></span>
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="box-txt">
                            <h4>Biografi Singkat</h4>
                                <p class="text">Halo, Nama saya Mohammad Zidan Fauzi tinggal di kecamatan 
                                    kepanjen kabupaten malang tepatnya di desa jatirejoyoso dukuh dawuhan. 
                                    Saya lulusan dari SMK Negeri 4 Malang jurusan RPL sekarang saya kuliah di STIKI D3 Manajemen Informatika.
                                </p>
                                <p class="text">Pada saat sekolah dulu saya diajari banyak bahasa pemrograman yang pertama 
                                    adalah bahasa pemrograman HTML, kemudian dilanjutkan diajari bahasa pemrograman PHP 
                                    lalu diajari menggunakan framework HTML yang pada saat itu CodeIgniter.
                                </p>
                                <p class="text">Lalu pada saat mengikuti PKL selama satu tahun atau praktek kerja lapangan saya diajari bahasa pemrograman 
                                    React-native, Java, Kotlin. Saya juga pernah mengikuti program BNSP yaitu LSP-P1. Hobi saya adalah bermain 
                                    game dan menonton film action. Makanan Kesukaan Saya adalah Bakso dengan sambal yang banyak.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-txt">
                    <h4>Riwayat Sekolah</h4>
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Nama Sekolah</th>
                            <th>Alamat Sekolah</th>
                            <th>Tahun Lulus </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>SDN Jatirejoyoso</td>
                            <td>Jalan Nusa No.04, Dawukan, Jatirejoyoso, Kec. Kepanjen, Malang, Jawa Timur 65163 </td>
                            <td>2014</td>
                          </tr>
                          <tr>
                            <td>SMPN 4 Kepanjen</td>
                            <td>Jl. Kawi No.3, Banurejo, Kepanjen, Kec. Kepanjen, Malang, Jawa Timur 65163</td>
                            <td>2017</td>
                          </tr>
                          <tr>
                            <td>SMKN 4 Malang</td>
                            <td>Jl. Tanimbar No.22, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</td>
                            <td>2020</td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row box-txt">
                    <h4>Biodata Lengkap</h4>
                    <ul>
                        <li>Nama            : Mohammad Zidan Fauzi</li>
                        <li>Jenis Kelamin   : Laki- Laki</li>
                        <li>Tempat Lahir    : Malang</li>
                        <li>Tanggal Lahir   : <?php echo converttglLahir($tglLahir); ?></li>
                        <li>Umur            : <?php echo umur($tglLahir); ?></li>
                        <li>Kewarganegaraan : Indonesia</li>
                        <li>Alamat : <br>Jl.Diponegoro no 68 RT1/RW1, Dukuh Dawuhan, Desa Jatirejoyoso, Kecamatan Kepanjen, Kabupaten Malang</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    
    <footer class="container bg-footer text-white">
        <div class="d-flex justify-content-center bd-highlight mb-3 py-4">
            <div class="p-2 bd-highlight">
                <img src="assets/image/email.png" alt="email" width="28" height="28">
                <a href="mailto:zfauzi69@gmail.com" target="_blank">Email</a>
            </div>
            <div class="p-2 bd-highlight">
                <img src="assets/image/linkedin.png" alt="linkedin" width="28" height="28">
                <a href="https://www.linkedin.com/in/zidan-fauzi-757b43177" target="_blank">linked In</a>
            </div>
            <div class="p-2 bd-highlight">
                <img src="assets/image/instagram.png" alt="ig" width="28" height="28">
                <a href="https://www.instagram.com/zidanfauzi87/" target="_blank">Instagram</a>
            </div>
        </div>
    </footer>
</body>

</html>