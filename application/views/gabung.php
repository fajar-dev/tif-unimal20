<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url()?>/assets/page/img/logo-mini.png" type="image/gif" sizes="16x16">
    <meta name="description" content="Selamat datang di direktori mahasiswa Teknik Informatika angkatan 2020 Universitas Malikussaleh">
    <meta property="og:url" content="<?php echo site_url() ?>" />
    <meta property="og:type" content="article">
    <meta property="og:title" content="Form | Dirmahasiswa IT 20" />
    <meta property="og:image" content="<?php echo base_url()?>/assets/page/img/logo-2.png" />
    <meta property="og:description" content="Selamat datang di direktori mahasiswa Teknik Informatika angkatan 2020 Universitas Malikussaleh" />


    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>/assets/page/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/page/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">
    

    <title>Form | Dirmahasiswa IT 2020</title>
  </head>
  <body class="bg-success">

    <main>
      <section class="form">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="card wraper py-3">
                <div class="card-body">
                <a href="<?php echo site_url() ?>" class="text-success text-decoration-none fs-5"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> BACK</a>
                  <div class="text-center py-3">
                    <img src="<?php echo base_url()?>/assets/page/img/LOGO-TEKNIK-INFORMATIKA.png" class="img-fluid" width="200px" alt="">
                    <h2>Form Pendataan Mahasiswa <br> Teknik Informatika angkatan 2020</h2>
                  </div>
                  <div class="py-5">
                  <?php echo form_open_multipart('page/gabung_tambah');?>
                    <p class="bg-success py-2 text-white text-center px-5 mb-5">Biodata</p>
                    <span class="text-danger"><?php echo $error;?></span>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
                      <label>Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="number" class="form-control" placeholder="NIM" name="nim" required>
                      <label>NIM </label>
                    </div>
                    <div class="row mb-3 ms-2">
                      <div class="col-lg-2">Jenis Kelamin:</div>
                      <div class="form-check col-lg-2 ">
                        <input class="form-check-input" type="radio" value="laki-laki" name="kelamin">
                        <label class="form-check-label">
                          Laki Laki
                        </label>
                      </div>
                      <div class="form-check col-lg-1">
                        <input class="form-check-input" type="radio" value="perempuan" name="kelamin" checked>
                        <label class="form-check-label">
                          Perempuan
                        </label>
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="form-floating mb-4 col-lg-6">
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" required>
                        <label class="ms-2">Tempat Lahir</label>
                      </div>
                      <div class="form-floating mb-4 col-lg-6">
                        <input type="date" class="form-control"  placeholder="Tanggal Lahir" name="tgl_lahir" required>
                        <label  class="ms-2">Tanggal Lahir</label>
                      </div>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control" placeholder="hobi" name="hobi" required>
                      <label >Hobi</label>
                    </div>
                    <select class="form-select mb-4" aria-label="Default select example" name="agama" required>
                      <option selected disabled>--Agama--</option>
                      <option value="islam">Islam</option>
                      <option value="kristen protestan">Kristen Protestan</option>
                      <option value="katolik">Katolik</option>
                      <option value="hindu">Hindu</option>
                      <option value="budha">Budha</option>
                    </select>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control"  placeholder="Alamat Asal" name="alamat_asal" required>
                      <label>Alamat Asal</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control"  placeholder="Alamat Kost" name="alamat_kost" required>
                      <label>Alamat Kost</label>
                      <div id="emailHelp" class="form-text">*Jikalau Tidak ngekos, diisi "tidak ada"</div>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control"  placeholder="Asal Sekolah" name="asal_sekolah" required>
                      <label>Asal Sekolah</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="email" class="form-control"  placeholder="Email" name="email" required>
                      <label>Email</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="number" class="form-control"  placeholder="NO WA" name="wa" required>
                      <label>No WA</label>
                    </div>
                    <div class="form-floating mb-4">
                      <input type="text" class="form-control"  placeholder="Ig" name="ig" required>
                      <label>Instagram</label>
                    </div>
                    <div class="form-floating mb-4">
                      <textarea class="form-control" placeholder="Quotes" id="floatingTextarea2" style="height: 100px" name="quotes" required></textarea>
                      <label>Quotes</label>
                    </div>
                    <div class="mb-4">
                      <label for="formFile" class="form-label">Foto Diri</label>
                      <input class="form-control" type="file" name="foto" id="formFile">
                      <div id="emailHelp" class="form-text">*Upload foto dirimu, latar bebas dengan maxmimal ukuran gambar 3MB. dengan Format gbr jpg, jpeg atau png
                    </div>
                    </div>
                    <button type="submit" class="btn btn-success px-5 py-2">Kirim</button>
                    <div class="mt-4">
                      <small>Noted: Apabila ada pertanyaan silahkan hubungi 088261025473 (brucel)</small>
                    </div> 
                  <?php echo form_close(); ?>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <script src="<?php echo base_url()?>/assets/page/js/bootstrap.bundle.min.js"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
