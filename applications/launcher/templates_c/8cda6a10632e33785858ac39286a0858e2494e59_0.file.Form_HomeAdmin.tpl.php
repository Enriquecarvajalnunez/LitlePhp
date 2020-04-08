<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-08 06:29:05
  from 'C:\xampp\htdocs\Litlephp\applications\launcher\web\html\Form_HomeAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8d53118b5bf0_49990134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cda6a10632e33785858ac39286a0858e2494e59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\html\\Form_HomeAdmin.tpl',
      1 => 1586317319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8d53118b5bf0_49990134 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- This Template use AdminLTE css styles -->
<!-- Complete AdminLTE theme repository is in ./web/template/AdminLTE -->

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "Templates.lan", "index", 0);
?>

<!DOCTYPE html>
<html>
<head>
    <link href="web/template/AdminLTE/dist/css/styles.css" rel="stylesheet" type="text/css" />
    <!-- Contiene el head de la pagina -->
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE');?>
</title>
    <link rel="shortcut icon" href="./web/images/launcherico.png" />

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" name="viewport">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel1="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ruda:400,700,900">
    <style type="text/css">
    body { margin: 0; padding: 10px; background-color: #3C8DBC; font-family: "Ruda",sans-serif; color: #FFF; }
    .middle-box { margin: 0 auto; max-width: 400px; padding-top: 30px; z-index: 100; text-align: center; }
    .middle-box h1 { font-size: 170px; color:white; margin:0; }
    </style>
</head>

<body class="bg-theme03">
    <div class="middle-box animated fadeInDown">
        <h1><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'WELLCOME');?>
</h1>
        <h3 style="font-weight:bold;">Hola Mundo !!!!!</h3>
        <div style="color:#F5F5F5;">
           <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'WELLCOMETITLE');?>
 
        </div>
    </div>
    
</body>

</html>
<?php }
}
