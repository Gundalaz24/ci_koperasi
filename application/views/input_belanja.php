<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url();?>icon.png" />


  <title>Aplikasi Koperasi PeTIK</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url();?>vendor_asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="padding-top: 56px;">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url();?>">
        <img src="<?= base_url();?>icon.png" style="width: 35px; height: 35px;">
        Aplikasi Koperasi PeTIK
      </a>
      
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container py-5">

    <div class="row">
      <div class="col-md-6 offset-md-3">
        
         <form>
  <div class="form-group">
    <label for="jenis_barang"><b>Jenis Barang</b></label>
    <select class="form-control" name="jenis_barang" id="jenis_barang">
      <option>Pilih jenis barang</option>
    </select>
  </div>
  <div class="form-group">
    <label for="harga_barang"><b>Harga</b></label>
    <input class="form-control" type="text" name="harga_barang" id="harga_barang" readonly>
  </div>
  <div class="form-group">
    <label for="jumlah_barang"><b>Jumlah</b></label>
    <input type="email" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="Masukan jumlah barang yang ingin dibeli">
  </div>
   <div class="form-group">
    <label for="total_belanja"><b>Total Belanja</b></label>
    <input class="form-control" type="text" name="total_belanja" id="total_belanja" readonly>
  </div>
  <button type="submit" class="btn btn-primary"><b>Submit</b></button>
 
</form>


      </div>
    </div>
  
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Pesantren Teknologi Informasi dan Komunikasi 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url();?>vendor_asset/jquery/jquery.min.js"></script>
  <script src="<?= base_url();?>vendor_asset/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
