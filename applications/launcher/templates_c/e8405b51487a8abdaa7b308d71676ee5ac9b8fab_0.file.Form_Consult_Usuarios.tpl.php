<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-19 00:44:31
  from 'C:\xampp\htdocs\Litlephp\applications\launcher\web\html\Form_Consult_Usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e9b82cfdf0fb1_77675548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8405b51487a8abdaa7b308d71676ee5ac9b8fab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\html\\Form_Consult_Usuarios.tpl',
      1 => 1587249124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e9b82cfdf0fb1_77675548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12631623605e9b82cfda3ed5_44871271', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "default.tpl");
}
/* {block "content"} */
class Block_12631623605e9b82cfda3ed5_44871271 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12631623605e9b82cfda3ed5_44871271',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\plugins\\block.form.php','function'=>'smarty_block_form',),1=>array('file'=>'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\plugins\\function.tools_barstandard.php','function'=>'smarty_function_tools_barstandard',),2=>array('file'=>'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\plugins\\function.consult_table_bootstrap.php','function'=>'smarty_function_consult_table_bootstrap',),3=>array('file'=>'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\plugins\\function.hidden.php','function'=>'smarty_function_hidden',),));
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

        <!-- PLugin que crea los botones de nuevo, editar, borrar y atrás --> 
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"frmConsultUsuarios",'class'=>'form-horizontal','method'=>"post",'id'=>"frmConsultUsuarios"));
$_block_repeat=true;
echo smarty_block_form(array('name'=>"frmConsultUsuarios",'class'=>'form-horizontal','method'=>"post",'id'=>"frmConsultUsuarios"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                   
        <!-- Crea los botones --> 

                          <?php echo smarty_function_tools_barstandard(array('type'=>"Button",'reference_id'=>100,'form_name'=>"frmConsultUsuarios",'commands'=>"CmdDefaultUsuarios,CmdShowByIdUsuarios,CmdDeleteUsarios,CmdDefaultHome",'icon_class'=>"fa-file,fa-pencil-square-o,fa-trash,fa-reply,fa-life-ring",'btn_class'=>"btn-success,btn-primary,btn-danger,btn-warning",'labels'=>"new,edit,del,back"),$_smarty_tpl);?>
                                                                      
            
                        <?php echo smarty_function_consult_table_bootstrap(array('type'=>"LIST",'table_name'=>"usuarios",'llaves'=>"USUAID",'form_name'=>"frmConsultUsuarios",'command'=>"CmdShowListTypes",'command_showbyid'=>"CmdShowByIdUsuarios",'DataGateway'=>"usuarios",'titulos'=>"USUAID,USUANOMB,USUAAPEL,USUATELE,USUAIDENT,USUAEMPR,USUADIRE,USUAEMAI,USUAPASS,USUACIUD,USUAESTA,USUAROL,USUATIID,USUAFECR,USUAFEAC",'cambiar_valor'=>"TYPETYID,type,TYPEID,TYPEDESC",'cantidad_registros'=>20,'show_columns'=>6),$_smarty_tpl);?>


                       <?php echo smarty_function_hidden(array('name'=>"action",'value'=>''),$_smarty_tpl);?>

                       <?php echo smarty_function_hidden(array('name'=>"section_language",'value'=>"Types"),$_smarty_tpl);?>

            <?php $_block_repeat=false;
echo smarty_block_form(array('name'=>"frmConsultUsuarios",'class'=>'form-horizontal','method'=>"post",'id'=>"frmConsultUsuarios"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?> <!-- Fin PLugin -->             
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
