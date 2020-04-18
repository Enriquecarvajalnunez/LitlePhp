<html>
<head>
<head>
       <title>Save Navigation Configuration File</title>
</head>
<body>
<h2>Save Navigation Configuration File</h2>
<hr>

<?php

//Esto es para independizar librerias del include_path de PHP
//Se afecta el Application.class y el Serializer.php
global $saveconfiguration;
$saveconfiguration = "S";

require_once "config.inc.php";
require_once "Serializer.class.php";

$Navigation_config = array(
    'default_action' => 'CmdDefaultLogin', 
    'error_view' => 'CmdDefaultError',
    'commands' => array(

    	//Comando por defecto de la aplicacion sino se invoca el action en el REQUEST
        'DefaultCommand' => array(
            'class' => 'DefaultCommand',
            'validated' => 'false',
            'views' => array(
                'success' => array(
                    'view' => 'Form_Wellcome.tpl',
                    'redirect' => 0
                )
            )
        ),
        'CmdDefaultHolaMundo' => array(
            'class' => 'CmdDefaultHolaMundo',
            'validated' => 'false',
            'views' => array(
                'success' => array(
                    'view' => 'Form_HolaMundo.tpl',
                    'redirect' => 0
                )
            )
        ),
        'CmdDefaultError' => array(
            'class' => 'CmdDefaultError',
            'validated' => 'false',
            'desc' => 'Cargar Forma Error',
            'views' => array(
                'success' => array(
                    'view' => 'Form_Error.tpl',
                    'redirect' => 0
                )
            )
        ),

        //Pantalla vista para el login 
        'CmdDefaultLogin' => array(
            'class' => 'CmdDefaultLogin',
            'validated' => 'false',
            'desc' => 'Cargar Forma Autenticacion',
            'views' => array(
                'success' => array(
                    'view' => 'Form_Login.tpl',
                    'redirect' => 0
                )
            )
        ),

        //Evento para el boton login pantalla de inicio 
        'CmdLogin' => array(
            'class' => 'CmdLogin', // levanta la clase CmdLogin en web commands
            'validated' => 'false',
            'desc' => 'Cargar Forma Home',
            'views' => array(
                'success' => array(
                    'view' => 'Form_HomeAdmin.tpl',
                    'redirect' => 0
                ),
                'fail' => array(
                    'view' => 'Form_Login.tpl',
                    'redirect' => 0
                )                
            )
        ),

        //Pantalla vista para el registro de usuario contiene los campos
        'CmdDefaultRegistro' => array(
            'class' => 'CmdDefaultRegistro',
            'validated' => 'false',
            'desc' => 'Cargar Forma Autenticacion',
            'views' => array(
                'success' => array(
                    'view' => 'Form_Registro.tpl',
                    'redirect' => 0
                )                
            )
        ),


        'CmdRegistro' => array(
            'class' => 'CmdRegistro',
            'validated' => 'false',
            'desc' => 'Cargar Forma Home',
            'views' => array(
                'success' => array(
                    'view' => 'Form_HomeAdmin.tpl',
                    'redirect' => 0
                ),
                'fail' => array(
                    'view' => 'Form_Registro.tpl',
                    'redirect' => 0
                )                
            )
        ),

        'prueba' => array(
            'class' => 'prueba',
            'validated' => 'false',
            'desc' => 'Cargar Forma de prueba template',
            'views' => array(
                'success' => array(
                    'view' => 'prueba.tpl',
                    'redirect' => 0
                )                
            )
        ),

        'CmdDefaultConsultaUsuarios' => array(
            'class' => 'CmdDefaultConsultaUsuarios',
            'validated' => 'false',
            'desc' => 'Cargar Forma Autenticacion',
            'views' => array(
                'success' => array(
                    'view' => 'Form_Consult_Usuarios.tpl',
                    'redirect' => 0
                )                
            )
        ),

        'CmdDefaultUsuarios' => array(
            'class' => 'CmdDefaultUsuarios',
            'validated' => 'false',
            'desc' => 'Cargar Forma registro de usuario',
            'views' => array(
                'success' => array(
                    'view' => 'Form_Usuarios.tpl',
                    'redirect' => 0
                )                
            )
        ),
        
	) // Fin arreglo de comandos	

); //Fin Arreglo Navigation_config

echo "<pre>";
print_r($Navigation_config);
echo "</pre>";

$result = Serializer::save($Navigation_config, 'web.conf.data');

if (@PEAR::isError($result)) {
    echo "Error creating configuration file";
}

?>
</body>
</html>
