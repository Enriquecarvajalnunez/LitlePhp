{extends file="default.tpl"}

{block name="content"}

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
        {form name="frmConsultUsuarios" class='form-horizontal' method="post" id="frmConsultUsuarios"}
                                   
        <!-- Crea los botones --> 

                          {tools_barstandard type="Button" reference_id =100 
                           form_name="frmConsultUsuarios"
                           commands="CmdDefaultUsuarios,CmdShowByIdUsuarios,CmdDeleteUsarios,CmdDefaultHome"
                           icon_class="fa-file,fa-pencil-square-o,fa-trash,fa-reply,fa-life-ring"
                          btn_class="btn-success,btn-primary,btn-danger,btn-warning" 
                           labels="new,edit,del,back"  
                          }                                                                      
            
                        {consult_table_bootstrap type="LIST" 
                           table_name="usuarios" 
                           llaves="USUAID"
                           form_name="frmConsultUsuarios"
                           command="CmdShowListTypes"     
                           command_showbyid="CmdShowByIdUsuarios"
                           DataGateway="usuarios"
                           titulos="USUAID,USUANOMB,USUAAPEL,USUATELE,USUAIDENT,USUAEMPR,USUADIRE,USUAEMAI,USUAPASS,USUACIUD,USUAESTA,USUAROL,USUATIID,USUAFECR,USUAFEAC"
                           cambiar_valor="TYPETYID,type,TYPEID,TYPEDESC"
                           cantidad_registros=20
                           show_columns=6
                        }

                       {hidden name="action" value=""}
                       {hidden name="section_language" value="Types"}
            {/form} <!-- Fin PLugin -->             
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
{/block}