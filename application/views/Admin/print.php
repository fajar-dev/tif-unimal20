<!DOCTYPE html>
<html lang="en">

<head>

    <title>Print Data Mahasiswa</title>
    <link href="<?php echo base_url()?>/assets/page/css/bootstrap.min.css" rel="stylesheet">


</head>

<body">

<div class="container-fluid">
  <div class="row">
    <h2 class="text-center pb-4">Data Mahasiswa teknik Informatika 2020 <br>Universitas Malikussaleh</h2>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
    </tr>
  </thead>
  <tbody>
          <?php
            $no=1;
            foreach($mhs as $data){
          ?>
    <tr>
      <th><?php echo $no++ ?></th>
      <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
      <td><?php echo htmlentities($data->nim, ENT_QUOTES, 'UTF-8');?></td>
    </tr>
          <?php
            }
          ?>
  </tbody>
  </table>
  </div>
</div>
<script>
window.print();
//window.history.back();
</script>
</body>

</html>