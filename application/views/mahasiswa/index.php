
<!--header-->
<?php $this->load->view('include/header')?>

<body>

  <div class="d-flex" id="wrapper">

  
  <?php $this->load->view('include/sidebar');?>

    <!-- Page Content -->
    <div id="content-wrapper">

<div class="container-fluid">

  <!-- DataTables -->
  <div class="card mb-3">
    <div class="card-header">
      <a href="<?php echo site_url('siswa/add') ?>"><i class="fas fa-plus"></i> Add New</a>
    </div>
    <div class="card-body">

      <div class="table-responsive">
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
            <?php foreach ($hasil as $sw): ?>
            <tr>
              <td width="150">
                <?php echo $sw->nama ?>
              </td>
              <td>
                <?php echo $sw->nis ?>
              </td>
              <td>
             <?php  echo $sw->no_telpon?>
              </td>
              <td class="small">
                <?php echo substr($sw->alamat, 0, 120) ?>...</td>
              <td width="250">
                <a href="<?php echo site_url('admin/products/edit/'.$sw->id) ?>"
                 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                <a onclick="deleteConfirm('<?php echo site_url('admin/products/delete/'.$sw->id) ?>')"
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
