 <script>
   const base_url = "<?= base_url(); ?>";
</script>
 <!-- Essential javascripts for application to work-->
 <script src="Assets/js/jquery-3.3.1.min.js"></script>
    <script src="Assets/js/popper.min.js"></script>
    <script src="Assets/js/bootstrap.min.js"></script>
    <script src="Assets/js/main.js"></script>
    <script src="Assets/js/fontawesome.js"></script>
    <script src="Assets/js/functions_admin.js"></script>
    
    <!-- The javascript plugin to display page loading on top-->
    <script src="Assets/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="Assets/js/plugins/sweetalert.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="Assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="Assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="Assets/js/plugins/bootstrap-select.min.js"></script>

    <?php if($data['page_name'] == "rol_usuario"){?>
    <script src="Assets/js/functions_roles.js"></script>
    <?php } ?>
    <?php if($data['page_name'] == "usuarios"){?>
    <script src="Assets/js/functions_usuarios.js"></script>
    <?php } ?>
    
  </body>
</html>