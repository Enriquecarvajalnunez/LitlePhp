<!DOCTYPE html>
<html>
<head>
    {include file="htmlConfig/header.tpl"}
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    {include file="htmlConfig/navbar.tpl"}
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    {include file="htmlConfig/aside.tpl"}

    
  <!-- Content Wrapper. Contains page content -->
    

  <!-- /.content-wrapper -->


  <!-- /.Entiendase como un metodo abstrato que es implementado en las que lo hereden-->
{block name="content"} {/block}

  <!-- footer -->
    {include file="htmlConfig/footer.tpl"}
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- scripts se encuentran los js del template-->
{include file="htmlConfig/scripts.tpl"}

<!--Incorpora funcionalidades de bootstrap-->
{include file="htmlConfig/bootstrapDataTables.tpl"}
</body>
</html>