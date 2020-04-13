<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-13 03:00:21
  from 'C:\xampp\htdocs\Litlephp\applications\launcher\web\html\htmlConfig\bootstrapDataTables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e93b9a57fe497_07632539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dff5393d421b3e0a93ce992a9e7bda884cf763aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Litlephp\\applications\\launcher\\web\\html\\htmlConfig\\bootstrapDataTables.tpl',
      1 => 1586739482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e93b9a57fe497_07632539 (Smarty_Internal_Template $_smarty_tpl) {
?><!------BootsTrap DataTables------- >

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.css"/> 
  <!--
  <style>
	div.dataTables_wrapper {
		width: 1370px;
		margin: 1 auto;
	}
  </style>
  -->

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.bootstrap4.css"/> 
  
  <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"><?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
  $(function () {
   var table2 = $("#example").DataTable({
      "responsive": true,
      "autoWidth": true,
      "scrollY1": 800,
      "scrollX": false,
      "pageLength": 50,      
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
              "language":{    
		            "decimal":        "",
					"emptyTable":     "No hay datos Disponibles para mostrar",
					"info":           "Mostrando _START_ a _END_ de _TOTAL_ Registros",
					"infoEmpty":      "Mostrando 0 a 0 de 0 Registros",
					"infoFiltered":   "(Filtrado de un total de _MAX_)",
					"infoPostFix":    "",
					"thousands":      ",",
					"lengthMenu":     "Mostrar _MENU_ registros",
					"loadingRecords": "Cargando...",
					"processing":     "Procesando...",
					"search":         "Buscar:",
					"zeroRecords":    "Ningun Registro Encontrado",
					"paginate": {
						"first":      "1ero",
						"last":       "Ultima",
						"next":       "Sig",
						"previous":   "Prev"
					},
					"aria": {
						"sortAscending":  ": activate to sort column ascending",
						"sortDescending": ": activate to sort column descending"
					},										buttons: {						copyTitle: 'Copia',						copyKeys: 'Appuyez sur <i>ctrl</i> ou <i>\u2318</i> + <i>C</i> pour copier les données du tableau à votre presse-papiers. <br><br>Pour annuler, cliquez sur ce message ou appuyez sur Echap.',						copySuccess: {							_: '%d Registros Copiados',							1: '1 Registros Copiados'						}					}					
				  },
       			buttons: [ 'excel', 		           
			           {
							extend: 'pdfHtml5',
							text :'Pdf',
							orientation: 'landscape',
							pageSize: 'LEGAL'
						},				   
					   'csv',     
					   {						
					     extend: 'copy',						
						 text :'Copiar',						
						 columnText: function ( dt, idx, title ) 
						 {							
						   return (idx+1)+': '+title;						
						 }					
					   },
				       {
							extend: 'print',
							text: 'Imprimir',
							autoPrint: true,
							exportOptions: {
								columns: ':visible',
							},
							customize: function (win) {
								$(win.document.body).find('tableDataServer').addClass('display').css('font-size', '9px');
								$(win.document.body).find('tr:nth-child(odd) td').each(function(index){
									$(this).css('background-color','#D0D0D0');
								});
								$(win.document.body).find('h1').css('text-align','center');
							}
						},					   
					    {						
					     extend: 'colvis',						
						 text :'Columnas',						
						 columnText: function ( dt, idx, title ) 
						 {							
						   return (idx+1)+': '+title;						
						 }					
					    } 

				   
				     ]				   

    });

      table2.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );	  
		
      // Apply column filter
      $('#example .dt-column-filter th').each(function (i) {
        $('input', this).on('keyup change', function () {
          if (table2.column(i).search() !== this.value) {
            table2
            .column(i)
            .search(this.value)
            .draw()
          }
        })
      })
      // Toggle Column filter function
      var responsiveFilter = function (table2, index, val) {
        var th = $(table2).find('.dt-column-filter th').eq(index)
        val === true ? th.removeClass('d-none') : th.addClass('d-none')
      }
      // Run Toggle Column filter at first
      $.each(table2.columns().responsiveHidden(), function (index, val) {
        responsiveFilter('#example', index, val)
      })
      // Run Toggle Column filter on responsive-resize event
      table2.on('responsive-resize', function (e, datatable, columns) {
        $.each(columns, function (index, val) {
          responsiveFilter('#example', index, val)
        })
      })

  });
<?php echo '</script'; ?>
>


<?php }
}
