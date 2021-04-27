
<!--header-->
<?php $this->load->view('include/header')?>

<body>

  <div class="d-flex" id="wrapper">

  
  <?php $this->load->view('include/sidebar');?>

    <!-- Page Content -->
    <div id="content-wrapper">

    <?php $this->load->view('include/navbar');?>
<div class="container-fluid">

  <!-- DataTables -->
    <div class="card-header">
      <a href="<?php echo site_url('siswa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">

      <div class="table-responsive ">
        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Nis</th>
              <th>No Telpon</th>
              <th>Alamat</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($pasien->result() as $pasien): ?>
            <tr>
              <td width="150">
                <?php echo $pasien->nama ?>
              </td>
              <td>
                <?php echo $pasien->kode ?>
              </td>
              <td>
             <?php  echo $pasien->gender?>
              </td>
              <td class="small">
             <?php  echo $pasien->tmp_lahir?>
             </td>
             <td>
             <?php  echo $pasien->email?>
              </td>
              <td width="250">
              
              <a href="<?php echo site_url('/pasien/view/'.$pasien->id) ?>"
                 class="btn btn-small"><i class="fas fa-edit"></i> View</a>
                <a href="<?php echo site_url('admin/products/edit/'.$pasien->id) ?>"
                 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                 
                <a href="<?php echo site_url('pasien/hapus/'.$pasien->id) ?>"
                 class="btn btn-small"  onclick="return confirm('Are you sure you want to delete this item?')"><i class="fas fa-edit"></i> Hapus</a>
              </td>
            </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

  </div>

  <?php $this->load->view('include/footer')?>;
</body>

</html>
