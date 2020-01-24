
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2020. Tous les droits réservés à DITI4.</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo $base_url.'public/template/admin/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo $base_url.'public/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo $base_url.'public/template/admin/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo $base_url.'public/template/admin/js/sb-admin-2.min.js'?>"></script>

  <script src="<?php echo $base_url.'public/template/admin/vendor/datatables/jquery.dataTables.min.js'?>"></script>
  <script src="<?php echo $base_url.'public/template/admin/vendor/datatables/dataTables.bootstrap4.min.js'?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo $base_url.'public/template/admin/js/demo/datatables-demo.js'?>"></script>

</body>

</html>



<script>
var base_url = "<?php echo $base_url; ?>";
  $(document).ready(function(){
    $('#insert').click(function(event){
          event.preventDefault();
          $.ajax({
              url:base_url+"Region/save",
              method:"post",
              data: $('form').serialize(),
              dataType:"text",
              success:function(strMessage){
                  $('#message').text(strMessage);
              }
          });
      });  

    
    $('#insertD').click(function(event){
          event.preventDefault();
          $.ajax({
              url:base_url+"Departement/save",
              method:"post",
              data: $('form').serialize(),
              dataType:"text",
              success:function(strMessage){
                  $('#message').text(strMessage);
              }
          });
      });

      $('#region').change(function(){
			var id_region = $(this).val();
			$.ajax({
				url:base_url+"Departement/listerDepartement/"+id_region,
				method:"POST",
				data:{id_region:id_region},
				dataType:"text",
				success:function(data)
				{
        alert(data);
					$('#departement').html(data);
				}
			});
		});


  })
  </script>