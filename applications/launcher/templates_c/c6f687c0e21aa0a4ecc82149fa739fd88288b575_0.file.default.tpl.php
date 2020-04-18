<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-18 23:16:23
  from 'C:\xampp\htdocs\Litlephp\applications\launcher\web\html\default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b6e2762ea71_00030601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6f687c0e21aa0a4ecc82149fa739fd88288b575' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\html\\default.tpl',
      1 => 1587242726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlConfig/header.tpl' => 1,
    'file:htmlConfig/navbar.tpl' => 1,
    'file:htmlConfig/aside.tpl' => 1,
    'file:htmlConfig/footer.tpl' => 1,
    'file:htmlConfig/scripts.tpl' => 1,
    'file:htmlConfig/bootstrapDataTables.tpl' => 1,
  ),
),false)) {
function content_5e9b6e2762ea71_00030601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
    <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
  <!-- Content Wrapper. Contains page content -->
    

  <!-- /.content-wrapper -->


  <!-- /.Entiendase como un metodo abstrato que es implementado en las que lo hereden-->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19856317435e9b6e27627681_87758857', "content");
?>


  <!-- footer -->
    <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- scripts se encuentran los js del template-->
<?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--Incorpora funcionalidades de bootstrap-->
<?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/bootstrapDataTables.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
/* {block "content"} */
class Block_19856317435e9b6e27627681_87758857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19856317435e9b6e27627681_87758857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block "content"} */
}
