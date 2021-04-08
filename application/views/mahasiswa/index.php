
<!--header-->
<?php $this->load->view('include/header')?>

<body>

  <div class="d-flex" id="wrapper">

  
  <?php $this->load->view('include/sidebar');?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php $this->load->view('include/navbar'); ?>
      <div class="container-fluid">
        <h1 class="mt-4 text-center">Data Mahasiswa</h1>
        <table class="table ">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Angkatan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>

  <?php $this->load->view('include/footer')?>;
</body>

</html>
