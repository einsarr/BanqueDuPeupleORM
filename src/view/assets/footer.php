
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
    $('#insert').click(function(){
          var res = validate();
          if (res == false) {
              return false;
          }
          $.ajax({
              url:base_url+"Compte/save",
              method:"post",
              data: $('form').serialize(),
              dataType:"text",
              success:function(strMessage){
                  $('#myModal').modal('hide');
                  $('#message').text(strMessage);
              },
              error: function (errormessage) {
                  alert(errormessage.responseText);
              }
          });
      });  

  })
  //Valdidation using jquery
function validate() {
    var isValid = true;
    if ($('#nom').val().trim() == "") {
        $('#nom').css('border-color', 'Red');
        isValid = false;
    }
    else {
        $('#nom').css('border-color', 'lightgrey');
    }
    if ($('#prenom').val().trim() == "") {
        $('#prenom').css('border-color', 'Red');
        isValid = false;
    }
    else {
        $('#prenom').css('border-color', 'lightgrey');
    }
    if ($('#telephone').val().trim() == "") {
        $('#telephone').css('border-color', 'Red');
        isValid = false;
    }
    else {
        $('#telephone').css('border-color', 'lightgrey');
    }
    if ($('#email').val().trim() == "") {
        $('#email').css('border-color', 'Red');
        isValid = false;
    }
    else {
        $('#email').css('border-color', 'lightgrey');
    }
    if ($('#adresse').val().trim() == "") {
        $('#adresse').css('border-color', 'Red');
        isValid = false;
    }
    else {
        $('#adresse').css('border-color', 'lightgrey');
    }
    if ($('#solde').val().trim() == "") {
        $('#solde').css('border-color', 'Red');
        isValid = false;
    }
    else {
        $('#solde').css('border-color', 'lightgrey');
    }
    if ($('#numero').val().trim() == "") {
        $('#numero').css('border-color', 'Red');
        isValid = false;
    }
    else {
        $('#numero').css('border-color', 'lightgrey');
    }
    if ($('#etat').val().trim() == "") {
        $('#etat').css('border-color', 'Red');
        isValid = false;
    }
    else {
        $('#etat').css('border-color', 'lightgrey');
    }
    return isValid;
}

</script>