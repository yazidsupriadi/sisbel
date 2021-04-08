
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('asset/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_urk('asset/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
