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
    <meta property="og:title" content="Dirmahasiswa IT 20" />
    <meta property="og:image" content="<?php echo base_url()?>/assets/page/img/logo-2.png" />
    <meta property="og:description" content="Selamat datang di direktori mahasiswa Teknik Informatika angkatan 2020 Universitas Malikussaleh" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>/assets/page/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/page/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">

    
    <!--Script CSS-->
    <link href="<?php echo base_url()?>/assets/page/css/bootstrap5.min.css" rel="stylesheet">
    <link type="text/css" href='<?php echo base_url()?>assets/page/css/dataTables.bootstrap5.min.css' rel='stylesheet'>

    <title>Dirmahasiswa IT 20</title>
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm bg-body rounded fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="<?php echo base_url()?>/assets/page/img/logo.png" alt="" width="200">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <div class="d-grid gap-2 text-center mt-5 mb-3 mt-lg-0 mb-lg-0">
                <a class="btn btn-success" href="<?php echo site_url('gabung')?>"> <i class="fa fa-user-plus" aria-hidden="true"></i> Gabung</a>
              </div>
            </div>
          </div>
        </div>
      </nav>  

      <section class="carousel">
        <div id="myCarousel" class="carousel slide pointer-event" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <div class="carousel-caption pb-5 mb-4">
              <h1>Welcome To<br>Direktori Mahasiswa Teknik Informatika 2020 <br>Universitas Malikussaleh</h1>
              <a href="#start" class="btn btn-outline-light mt-3 py-3 px-3"><i class="fa fa-angle-double-down faa-bounce faa-reverse animated faa-fas" aria-hidden="true"></i></a>
            </div>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item">
              <img src="<?php echo base_url()?>/assets/page/img/1-.png" class="d-block" alt="Slide1">
            </div>
            <div class="carousel-item active">
              <img src="<?php echo base_url()?>/assets/page/img/2-.png" class="d-block" alt="Slide2">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>
    </header>

    <main>
      <section id="start" class="wraper">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="text-center pb-5 judul">Data Mahasiswa</h2>
              <?php echo $this->session->flashdata('sukses') ?>
              <div class="table-responsive">
                <table id="example" class="table table-striped" style="width:100%">
                  <thead>
                      <tr>
                        <th>NO</th>
                          <th>Nama</th>
                          <th>NIM</th>
                          <th>aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                                                    <?php
                                                        $no=1;
                                                        foreach($mhs as $data){
                                                    ?>
                      <tr>
                          <td><?php echo $no++ ?></td>
                          <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                          <td><?php echo htmlentities($data->nim, ENT_QUOTES, 'UTF-8');?></td>
                          <td>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data->id ?>" class="btn btn-success"><i class="fa fa-search" aria-hidden="true"></i> Detail</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?php echo $data->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-body p-lg-5">
                                  <div class="row">
                                    <div class="col-md-4">
                                      <img src="<?php echo base_url()?>assets/gambar/<?php echo $data->foto;?>" class="img-thumbnail mb-5" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                      <div class="table-responsive">
                                        <table class="table">
                                          <tbody>
                                            <tr>
                                              <td>Nama </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>NIM </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->nim, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Jenis Kelamin </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->kelamin, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Tempat Lahir </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->tempat_lahir, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Tanggal Lahir </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->tgl_lahir, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Agama </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->agama, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Alamat Asal </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->alamat_asal, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Alamat Kost </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->alamat_kost, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Asal Sekolah</td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->asal_sekolah, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Hobi </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->hobi, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Instagram </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->ig, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                            <tr>
                                              <td>Quotes </td>
                                              <td>:</td>
                                              <td><?php echo htmlentities($data->quotes, ENT_QUOTES, 'UTF-8');?></td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
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
      </section>
    </main>

    <footer>
      <section class="pb-5 text-center">
        <p>2021. Copyright &copy; Angkatan 20 <br> Dev. <a href="https://fajar.asetpedia.id/" target="_blank" class="text-decoration-none text-success">Fajar chan</a></p>

      </section>
    </footer>

    <script src="<?php echo base_url()?>/assets/page/js/bootstrap.bundle.min.js"></script>
    <!--Script Javascript-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
