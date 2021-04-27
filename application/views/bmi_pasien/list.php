
<!--header-->
<?php $this->load->view('include/header')?>

<body>

  <div class="d-flex" id="wrapper">

  
  <?php $this->load->view('include/sidebar');?>

    <!-- Page Content -->
    <div id="content-wrapper">

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
              <th>tanggal</th>
              <th>berat</th>
              <th>tinggi</th>
              <th>bmi</th>
              <th>status bmi</th>
              <th>catatan</th>
              <th>pasien</th>
              
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($bmi_pasien->result() as $bmi): ?>
            <tr>
              <td width="150">
                <?php echo $bmi->tanggal ?>
              </td>
              <td>
                <?php echo $bmi->berat ?>
              </td>
              <td>
             <?php  echo $bmi->tinggi?>
              </td>
              <td class="small">
             <?php  echo $bmi->bmi?>
             </td>
             <td>
             <?php  echo $bmi->status_bmi?>
              </td>
              
             <td>
             <?php  echo $bmi->catatan?>
              </td>
             <td>
             <?php  echo $bmi->nama?>
              </td>
              <td width="250">
              
              <a href="<?php echo site_url('/bmi/view/'.$bmi->id) ?>"
                 class="btn btn-small"><i class="fas fa-edit"></i> View</a>
                <a href="<?php echo site_url('admin/products/edit/'.$bmi->id) ?>"
                 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$bmi->id) ?>')"
                 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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
