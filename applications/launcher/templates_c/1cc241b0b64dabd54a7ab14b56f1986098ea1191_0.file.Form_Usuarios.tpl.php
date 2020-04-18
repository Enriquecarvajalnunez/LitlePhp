<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 01:36:57
  from 'C:\xampp\htdocs\Litlephp\applications\launcher\web\html\Form_Usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b8f19ac07b2_26413795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cc241b0b64dabd54a7ab14b56f1986098ea1191' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\html\\Form_Usuarios.tpl',
      1 => 1587250879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9b8f19ac07b2_26413795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3909268725e9b8f19aa9b59_05896266', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.tpl");
}
/* {block "content"} */
class Block_3909268725e9b8f19aa9b59_05896266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3909268725e9b8f19aa9b59_05896266',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\plugins\\block.form.php','function'=>'smarty_block_form',),1=>array('file'=>'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\plugins\\function.tools_barstandard.php','function'=>'smarty_function_tools_barstandard',),));
?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Adicionar Usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"frmUsuarios",'class'=>'form-horizontal','method'=>"post",'id'=>"frmConsultUsuarios"));
$_block_repeat=true;
echo smarty_block_form(array('name'=>"frmUsuarios",'class'=>'form-horizontal','method'=>"post",'id'=>"frmConsultUsuarios"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

              <?php echo smarty_function_tools_barstandard(array('type'=>"Button",'reference_id'=>100,'form_name'=>"frmUsuarios",'commands'=>"CmdDAddUsuarios,CmdDefaultConsultUsuarios",'icon_class'=>"fa-save,fa-life-ring",'btn_class'=>"btn-success,btn-warning",'labels'=>"save,back"),$_smarty_tpl);?>


                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->              
              <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>"frmUsuarios",'class'=>'form-horizontal','method'=>"post",'id'=>"frmConsultUsuarios"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <!--cierre de plugin form-->
            </div>

        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php
}
}
/* {/block "content"} */
}
