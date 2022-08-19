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
  <div class="row">
                                                    <?php
                                                        foreach($mhs as $data){
                                                    ?>
    <div class="col-4">
    <img src="<?php echo base_url()?>/assets/gambar/<?php echo $data->foto; ?>" class="img-thumbnail" alt="...">
    </div>
    <div class="col-8">
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
                                                <td>Hobi </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->hobi, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Agama</td>
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
                                                <td>Asal Sekolah </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->asal_sekolah, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>email </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->email, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>No WA </td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->wa, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>Instagram</td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->ig, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                                <tr>
                                                <td>quotes</td>
                                                <td>:</td>
                                                <td><?php echo htmlentities($data->quotes, ENT_QUOTES, 'UTF-8');?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                      </div>    
    </div>
                                                    <?php
                                                        }
                                                    ?> 
  </div>
</div>
<script>
window.print();
//window.history.back();
</script>
</body>

</html>