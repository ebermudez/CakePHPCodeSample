<?php
/**
 * Verónica Hernández and Edgardo Bermúdez
 * 
 * add.ctp		  Sample file
 * @link          Internal Project - Not specified for security reasons.
 * @since         CakePHP(tm) v 0.10.0.1076
 *
 * Text in spanish and english
 */
?>

<head>
  <meta charset="utf-8">
  <title>CakePHP Sample Internal Project</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
   $(document).ready(function() {
   $( "#dialog" ).dialog({
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 200
      },
      hide: {
        effect: "blind",
        duration: 200
      }
    });
  });
  </script>
</head>
 
<div id="dialog" title="Información del Precio">
  <p>
  Agregar el precio de manera correcta. 
 </p>
</div>  
<style>
	.input.text {
	border: none !important;
	padding-left: 0px !important;
	padding-right: 0px !important;
	margin-bottom: 0px !important;
	margin-left: 0px !important;
	margin-right: 0px !important;
	}
	.row {
	margin-left: 0px !important;
	margin-bottom: 0px !important;
	width: 95%; 
	}
	
	.col-md-4{
		background: white !important;
		border: none;
	}
	.col-md-6{
		background: white !important;
	}
	body{
		font-size: 13pt;
	}
</style>

<script type="text/javascript">

		function actualizarv(id, v){
		pk = document.getElementById('ctotal');
		document.getElementById(id).innerHTML ='%   ('+(v*pk.value/100)+')';
	}
		
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photolog').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function fontSize(size){  
            document.getElementById("body").style.fontSize = size  
        }
        
	var cuentat=0;
  	var cuentam=0;
    </script>
    
<script language="javascript">
function mis_datos(e){
 if ((e.keyCode < 48) || (e.keyCode > 57)) {
    return false;
}else{
	return true;
}
}
</script>
    
<script  type="text/javascript" >
// Code to set the number formatting while the user is writing. 
// Script by tunait!
function cambiar(donde,caracter){
	pat = /[\*,\+,\(,\),\?,\,$,\[,\],\^]/;
	valor = donde.value;
	largo = valor.length;
	crtr = true;
	if(isNaN(caracter) || pat.test(caracter) == true){
		if (pat.test(caracter)==true){ 
			caracter = "\"" + caracter;
		}
		carcter = new RegExp(caracter,"g");
		valor = valor.replace(carcter,"");
		donde.value = valor;
		crtr = false;
	}
	else{
		var nums = new Array();
		cont = 0;
		for(m=0;m<largo;m++){
			if(valor.charAt(m) == "." || valor.charAt(m) == " ")
				{continue;}
			else{
				nums[cont] = valor.charAt(m);
				cont++;
			}
		}
	}
	var cad1="";cad2="";tres=0;
	if(largo > 3 && crtr == true){
		for (k=nums.length-1;k>=0;k--){
			cad1 = nums[k];
			cad2 = cad1 + cad2;
			tres++;
			if((tres%3) == 0){
				if(k!=0){
					cad2 = "." + cad2;
				}
			}
		}
		donde.value = cad2;
	}
}	
</script>

<script type="text/javascript" >
     function anular(e) {
          tecla = (document.all) ? e.keyCode : e.which;
          return (tecla != 13);
     }
</script>

<div id="cuerpo">

<div id="contenido">

<?php
echo $this->Form->error('serviceBoxPrecio');
?>
	
	<form action="/serviceBoxs/add" id="serviceBoxAddForm" onkeypress="return anular(event)" enctype="multipart/form-data" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>	
	<input value ="<?php
if (isset($serviceBox)) {
    echo $serviceBox['serviceBox']['id'];
}
?>"  name="data[idp]" style="display:none" step="any">
	<input value ="<?php
if (isset($vol['Volumene'])) {
    echo $vol['Volumene']['id'];
}
?>"  name="data[idv]" style="display:none" step="any">
	<input value ="<?php
if (isset($cod['Codigo'])) {
    echo $cod['Codigo']['id'];
}
?>"  name="data[ido]" style="display:none" step="any">
	<input value ="<?php
if (isset($cua['Cualitativo'])) {
    echo $cua['Cualitativo']['id'];
}
?>"  name="data[idu]" style="display:none" step="any">
	<p id="primera" class="ubicacion" style="margin-bottom: 10px;"> Crear serviceBoxs <font id ="subprimera"> &#9654  Nuevo serviceBox </font></p>
	<p id="advertencia" style="display:none;color: white;background: #cd0067;">La suma de los porcentajes debe ser igual a 100, por favor ingrese de nuevo los valores</p>
	<div class="submit" style="float: right;margin: 10px;"><input type="submit" value="GUARDAR BORRADOR" name="borrador"></div>
	<table style="width: 100%;">
		<!--Module names-->
		<tbody><tr>
			<td id="header-0" style="width: 20%;border-style:solid;border-width:1px; border-color: #cccccc; border-bottom:none; padding: 10px; text-align: center;"><font color="#6e126e"><b>Información Básica</b></font></td>
			<td id="header-1" style="width: 20%;border-style:solid;border-width:1px; border-color: #cccccc; padding: 10px; text-align: center; background: #f0f0f0;"><font color="#b3b3b3"><b>Distribución</b></font></td>
			<td id="header-2" style="width: 20%;border-style:solid;border-width:1px; border-color: #cccccc; padding: 10px; text-align: center; background: #f0f0f0;"><font color="#b3b3b3"><b>Codificación</b></font></td>
			<td id="header-3" style="width: 20%;border-style:solid;border-width:1px; border-color: #cccccc; padding: 10px; text-align: center; background: #f0f0f0;"><font color="#b3b3b3"><b>Cualitativo</b></font></td>
			<td id="header-4" style="width: 20%;border-style:solid;border-width:1px; border-color: #cccccc; padding: 10px; text-align: center; background: #f0f0f0;"><font color="#b3b3b3"><b>Cuantitativo</b></font></td>
			<td id="header-5" width="30%" style="border-style:solid;border-width:1px; border-color: #cccccc; text-align: center; border-right: none; border-top: none;"></td>
			
		</tr>
	</tbody></table>
	
	
<div id="tabs-0" style="border-style:solid;border-width:1px; border-color: #cccccc;border-top: none;">
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <script>
		$(function (){
		$('#serviceBoxFechasolicitud')
      .datepicker({ changeYear: true,
                    dateFormat: 'dd/mm/yy',
                    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                                 'Junio', 'Julio', 'Agosto', 'Septiembre',
                                 'Octubre',  'Noviembre', 'Diciembre'],
                    yearRange: '-10:+10' });
 	});
 	
 	$(function (){
		$('#serviceBoxFechaFacturacion')
      .datepicker({ changeYear: true,
                    dateFormat: 'dd/mm/yy',
                    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                                 'Junio', 'Julio', 'Agosto', 'Septiembre',
                                 'Octubre',  'Noviembre', 'Diciembre'],
                    yearRange: '-10:+10' });
 	});
 	
 	$(function (){
		$('#serviceBoxPeriodoActividad')
      .datepicker({ changeYear: true,
                    dateFormat: 'dd/mm/yy',
                    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                                 'Junio', 'Julio', 'Agosto', 'Septiembre',
                                 'Octubre',  'Noviembre', 'Diciembre'],
                    yearRange: '-10:+10' });
 	});
 	
 	$(function (){
		$('#serviceBoxPeriodoActividad2')
      .datepicker({ changeYear: true,
                    dateFormat: 'dd/mm/yy',
                    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                                 'Junio', 'Julio', 'Agosto', 'Septiembre',
                                 'Octubre',  'Noviembre', 'Diciembre'],
                    yearRange: '-10:+10' });
 	});
 	
	</script>
  
  
  <center>
	
  	
  	<div class="row">
  	<div class="col-md-4" style="padding-top: 46px;">
        
        	<div >
        		<div style="height: 217px;margin-left:1px; border: 1px solid #ccc; border-bottom: none !important;width: 307px;">
        			<?php
if (isset($serviceBox['serviceBox']['photo'])) {
    echo $this->Html->image('/files/serviceBox/photo/' . $serviceBox['serviceBox']['id'] . '/' . $serviceBox['serviceBox']['photo'] . '', array(
        'alt' => 'logo',
        'id' => 'photolog',
        'style' => 'height: 180px;padding: 5px;'
    ));
} else {
    echo $this->Html->image('image2.png', array(
        'alt' => 'logo',
        'id' => 'photolog',
        'style' => 'height: 180px;padding: 5px;'
    ));
}
?>
        	    </div>
        		<input type="file" onchange="readURL(this)"  value="<?php
if (isset($serviceBox['serviceBox']['photo'])) {
    echo $serviceBox['serviceBox']['photo'];
}
?>"  name="data[serviceBox][photo]" style="height: 58px;width: 318px;padding: 14px;background-repeat:no-repeat;background-image: url(../img/selectorinput.png);" />
        		
        	</div>
        
        </div>
        
     <div class="col-md-4">
        
        	<div  style="padding: 30px;">
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
				<div class="input text required" id="add"><label for="serviceBoxFechasolicitud">Fecha de Solicitud:</label>
					<input value="<?php
if (isset($serviceBox['serviceBox']['fechasolicitud'])) {
    $p = explode('-', $serviceBox['serviceBox']['fechasolicitud']);
    echo $p[2] . '/' . $p[1] . '/' . $p[0];
} else {
    echo date('d/m/Y');
}
?>" name="data[serviceBox][fechasolicitud]" style="width: 80%;box-shadow: none; padding-right:2px;padding-left:2px;margin-bottom: 5px;"  placeholder="DD/MM/AAAA" maxlength="50" type="text" id="serviceBoxFechasolicitud"  ></div>				</div>
				<br>
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
				<div class="input number">
				<label for="serviceBoxPrecio" style="width:100%" title ="Este precio es el sugerido de venta a Distribuidores y Cadenas. Por favor colocar el valor exacto, incluyendo decimales.">Precio Sugerido : <?php
echo $this->Html->image('circle_info_m.png', array(
    'alt' => 'tabla',
    'style' => 'float: right;margin: 3px;height: 16px'
));
?>
</label>
				<p>$<input onBlur = "if(this.value.indexOf(',')<0){this.value = this.value + ',00';}" onkeyup = "if(this.value.indexOf(',')<0){ cambiar(this,this.value.charAt(this.value.length-1));};" value="<?php
					if (isset($serviceBox['serviceBox']['precio'])) {
						echo $serviceBox['serviceBox']['precio'];
					}
					?>"   name="data[serviceBox][precio]" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px;" class="inp" step="Any" type="text" id="serviceBoxPrecio"  ></div>				</div>
				</p>
				<br>
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
				<div class="input select">
				<label for="serviceBoxUpcharge" style="width:100%" title="Se refiere al porcentaje de incremento en el precio del serviceBox sobre el precio del producto regular.">Upcharge: <?php
					echo $this->Html->image('circle_info_m.png', array(
						'alt' => 'tabla',
						'style' => 'float: right;margin: 3px;height: 16px'
					));
					?>
				</label>
				<br />
				<select  onchange=" var hiddenDiv = document.getElementById('porcentaje'); var idpo = document.getElementById('idpo'); if(this.value>0){hiddenDiv.style.display = ''; idpo.style.display = ''}else{hiddenDiv.style.display = 'none'; idpo.style.display = 'none'}"  name="data[serviceBox][upcharge]" class="inp" style="height: 40px;margin-bottom: 5px;border: 1px solid #CCC;width: 87%;" 
				id="serviceBoxUpcharge">
					<option value="0">NO</option>
					<option value="1">SI</option>
				</select>
				
				</div>
				<input id="porcentaje"  value="<?php
				if (isset($serviceBox['serviceBox']['pupcharge'])) {
					echo $serviceBox['serviceBox']['pupcharge'];
				}
				?>"  name="data[serviceBox][pupcharge]" style="display:none;width: 60%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px;" class="inp"  type="number" ><font id="idpo" style="display:none">% </font> </div>
        		
				<script>
				<?php
				if (isset($serviceBox['serviceBox']['upcharge'])) {
					if ($serviceBox['serviceBox']['upcharge'] == 0) {
				?>
											$("#serviceBoxUpcharge").val(0);
										<?php
					} else {
				?>
											$("#serviceBoxUpcharge").val(1);
											var hiddenDiv = document.getElementById('porcentaje'); 
											var idpo = document.getElementById('idpo');
											hiddenDiv.style.display = ''; 
											idpo.style.display = '';
											<?php
					}
				?>
									
									<?php
				}
				?>	
				</script>
        	</div>
        
        </div>
        
     <div class="col-md-4">
        
        	<div style="padding: 30px;" >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input text" id="add">
						<label for="serviceBoxPeriodoActividad" style="width:100%" title="En la fecha de inicio se debe ingresar la fecha efectiva en la que el serviceBox estará disponible en el Trade y en la fecha fin la fecha hasta la cual estará  el serviceBox disponible en el Trade  ">Período de Actividad: <?php
							echo $this->Html->image('circle_info_m.png', array(
								'alt' => 'tabla',
								'style' => 'float: right;margin: 3px;height: 16px'
							));
							?>
						</label>
						<input name="data[serviceBox][periodo_actividad]"   value="<?php
						if (isset($serviceBox['serviceBox']['periodo_actividad'])) {
							$p = explode('-', $serviceBox['serviceBox']['periodo_actividad']);
							echo $p[2] . '/' . $p[1] . '/' . $p[0];
							;
						}
						?>" style="width: 80%;box-shadow: none; padding-right:2px;padding-left:2px;margin-bottom: 5px;"  placeholder="inicio" maxlength="50" type="text" id="serviceBoxPeriodoActividad">
						<input name="data[serviceBox][periodo_actividadf]"   value="<?php
						if (isset($serviceBox['serviceBox']['periodo_actividadf'])) {
							$p = explode('-', $serviceBox['serviceBox']['periodo_actividadf']);
							echo $p[2] . '/' . $p[1] . '/' . $p[0];
							;
						}
						?>" style="width: 80%;box-shadow: none; padding-right:2px;padding-left:2px;margin-bottom: 5px;"  placeholder="fin" maxlength="50" type="text" id="serviceBoxPeriodoActividad2">
					</div>				
				</div>
				
				<br>
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
				<div class="input number">
					<label for="serviceBoxFy" style="width:100%" title="FY en el cual será implementado el serviceBox." >FY:<?php
						echo $this->Html->image('circle_info_m.png', array(
							'alt' => 'tabla',
							'style' => 'float: right;margin: 3px;height: 16px'
						));
						?>
					</label>
					<br />
				<select id="selectFY" name="data[serviceBox][fy]" style="height: 26px;margin-top: -2px;border: 1px solid #ccc;width: 80%;margin-bottom: 5px;">
						<?php
						for ($i = 1; $i < 100; $i = $i + 1) {
						?>
											  <option value="<?php
							echo $i;
						?>"><?php
							echo $i;
						?></option>
											  <?php
						}
						?>
				</select>
				<script>
				<?php
				if (isset($serviceBox['serviceBox']['fy'])) {
				?>
										$("#selectFY").val(<?php
					echo $serviceBox['serviceBox']['fy'];
				?>);
				<?php
				}
				?>	
				</script>
				</div>				
				</div>
				<br>
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
				<div class="input number">
					<label for="serviceBoxH" style="width:100%" title="H en el cual será implementado el serviceBox. ">H:<?php
						echo $this->Html->image('circle_info_m.png', array(
							'alt' => 'tabla',
							'style' => 'float: right;margin: 3px;height: 16px'
						));
						?>
					</label>
					<br />
					<select id="selectH" name="data[serviceBox][h]" style="height: 26px;margin-top: -2px;border: 1px solid #ccc;width: 80%;margin-bottom: 5px;">
							<?php
							for ($i = 1; $i < 3; $i = $i + 1) {
							?>
												  <option value="<?php
								echo $i;
							?>"><?php
								echo $i;
							?></option>
												  <?php
							}
							?>
					</select>
				</div>				
				</div>
				<script>
				<?php
				if (isset($serviceBox['serviceBox']['h'])) {
				?>
				$("#selectH").val(<?php
					echo $serviceBox['serviceBox']['h'];
				?>);
				<?php
				}
				?>	
				</script>
        	</div>
        
        </div>
  </div>
  	
  </center>
  
   <center>
   	
  	<div class="row">
  		
  		<div class="col-md-4">
        	<div style="padding-left: 30px; padding-right: 30px;"  >        		        		
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input text" id="add"><label for="serviceBoxNombre">Nombre del serviceBox:</label><input   value="<?php
						if (isset($serviceBox['serviceBox']['nombre'])) {
							echo $serviceBox['serviceBox']['nombre'];
						}
						?>" name="data[serviceBox][nombre]" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px;" class="inp" maxlength="255" type="text" id="serviceBoxNombre">
					</div>				
				</div>
			</div>
        </div>

		<div class="col-md-4">
        
        	<div style="padding-left: 30px; padding-right: 30px;"  >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input number"><label for="serviceBoxVpgifting" style="width:100%" title="Ingresa  el valor percibido por el Shopper, no el costo del gift.">Valor Percibido Gifting: <?php
						echo $this->Html->image('circle_info_m.png', array(
							'alt' => 'tabla',
							'style' => 'float: right;margin: 3px;height: 16px'
						));
						?></label>
										$<input   value="<?php
						if (isset($serviceBox['serviceBox']['vpgifting'])) {
							echo $serviceBox['serviceBox']['vpgifting'];
						}
						?>" name="data[serviceBox][vpgifting]" onBlur = "if(this.value.indexOf(',')<0){this.value = this.value + ',00';}" onkeyup = "if(this.value.indexOf(',')<0){ cambiar(this,this.value.charAt(this.value.length-1));};" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px;" class="inp" step="any" type="text" id="serviceBoxVpgifting">
					</div>			
				</div>
			</div>
        </div>
        
        <div class="col-md-4">

			<div style="padding-left: 30px; padding-right: 30px;"  >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
				<div class="input select">
				<label for="serviceBoxTemporada">Temporada:</label><br />
				<select name="data[serviceBox][temporada]" class="inp" style="height: 40px;border: 1px solid #CCC;;width: 87%;margin-bottom: 5px" 
				id="serviceBoxTemporada">
					<?php
					foreach ($temporadas as $temporada):
					?>
											<option value="<?php
						echo $temporada['Temporada']['id'];
					?>"><?php
						echo $temporada['Temporada']['nombre'];
					?></option>
										<?php
					endforeach;
					?>
				</select>
				</div>			
				</div>
			</div>
			<script>
				<?php
				if (isset($serviceBox['serviceBox']['temporada'])) {
				?>
										$("#serviceBoxTemporada").val(<?php
					echo $serviceBox['serviceBox']['temporada'];
				?>);
									<?php
				}
				?>	
			</script>
        </div>

  	</div>
  	
  </center>
  
 <center>
   	
  	<div class="row">
  		
  		<div class="col-md-4">
        
        	<div style="padding-left: 30px; padding-right: 30px;"  >        		        		
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
				<div class="input select"><label for="serviceBoxTiposerviceBoxsId">Tipo de serviceBox:</label><br />
					<select name="data[serviceBox][tiposerviceBoxs_id]" class="inp" style="height: 40px;border: 1px solid #CCC;margin-bottom: 5px;width: 90%;" 
					id="serviceBoxTiposerviceBoxsId">
					<!--Static types - This won't change, so we don't need them to be dynamic-->
					<option value="1">Type 1 </option>
					<option value="2">Type 2</option>
					<option value="3">Type 3</option>
					<option value="4">Type 4</option>
					<option value="5">Type 5</option>
					<option value="6">Type 6</option>
					<option value="7">Type 7</option>
					
					</select>
				</div>				
				</div>
			</div>
			<script>
				<?php
				if (isset($serviceBox['serviceBox']['tiposerviceBoxs_id'])) {
				?>
										$("#serviceBoxTiposerviceBoxsId").val(<?php
					echo $serviceBox['serviceBox']['tiposerviceBoxs_id'];
				?>);
									<?php
				}
				?>	
			</script>
        </div>

		<div class="col-md-4">
        
        	<div style="padding-left: 30px; padding-right: 30px;"  >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input number"><label style="width:100%" for="serviceBoxVolumenserviceBox" title="(Volumen total serviceBoxs/ AOP Periodo serviceBox) = porcentaje cobertura del AOP"> % cobertura del AOP:  <?php
						echo $this->Html->image('circle_info_m.png', array(
							'alt' => 'tabla',
							'style' => 'float: right;margin: 3px;height: 16px'
						));
						?></label><input   value="<?php
						if (isset($serviceBox['serviceBox']['volumen_serviceBox'])) {
							echo $serviceBox['serviceBox']['volumen_serviceBox'];
						}
						?>" name="data[serviceBox][volumen_serviceBox]" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" step="any" type="number" id="serviceBoxVolumenserviceBox">%
					</div>
				</div>
			</div>
        
        </div>
        
        <div class="col-md-4">
        
        	<div style="padding-left: 30px; padding-right: 30px;"  >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
				<div class="input select"><label for="serviceBoxCiudad">Ciudad:</label><br />

				<p style="border: 1px solid #ccc;margin: 5px;height: 33px;" id="lc" onclick ="mostrar2('ubicacion')"> Mostrar lista </p>
				</div>
			</div>	
		</div>
        
        </div>

  		
  	</div>
  	
  </center>

	<div  id ="ubicacion"  style="margin: 12px; margin-left: 10px;margin-right: 10px;border: 1px solid #ccc;height: 196px;overflow-y:scroll;font-size:10pt;display:none">
  				<div class="col-md-3" style="background: white;border: none;">
					<input type='checkbox' name='todos' value='-1' onclick="seleccionada(this.checked); var elements = document.getElementsByClassName('uto');if(this.checked){for (var i = 0; i < elements.length; i++) {elements[i].checked = true;}}else{for (var i = 0; i < elements.length; i++) {elements[i].checked = false;}}"> <font> SELECCIONAR TODOS </font> <br>
					<?php //debug($ciuds);
					for ($i = 0; $i < count($ubicaciones); $i = $i + 4) {
						echo "<input id=" . "ciudad" . $ubicaciones[$i]['Ubicacione']['id'] . " class ='uto' onclick='seleccionada(this.checked)' type='checkbox' name='ubi" . $ubicaciones[$i]['Ubicacione']['nombre'] . "' value='" . $ubicaciones[$i]['Ubicacione']['id'] . "'>" . $ubicaciones[$i]['Ubicacione']['nombre'] . "<br>";
					}
					?>
        		</div>
        
     			<div class="col-md-3" style="background: white;border: none;">
        
					<?php
					for ($i = 1; $i < count($ubicaciones); $i = $i + 4) {
						echo "<input id=" . "ciudad" . $ubicaciones[$i]['Ubicacione']['id'] . " class ='uto' onclick='seleccionada(this.checked)' type='checkbox' name='ubi" . $ubicaciones[$i]['Ubicacione']['nombre'] . "' value='" . $ubicaciones[$i]['Ubicacione']['id'] . "'>" . $ubicaciones[$i]['Ubicacione']['nombre'] . "<br>";
						
					}
					?>
        		</div>
        
     			<div class="col-md-3" style="background: white;border: none;">
					<?php
					for ($i = 2; $i < count($ubicaciones); $i = $i + 4) {
						echo "<input id=" . "ciudad" . $ubicaciones[$i]['Ubicacione']['id'] . " class ='uto' onclick='seleccionada(this.checked)' type='checkbox' name='ubi" . $ubicaciones[$i]['Ubicacione']['nombre'] . "' value='" . $ubicaciones[$i]['Ubicacione']['id'] . "'>" . $ubicaciones[$i]['Ubicacione']['nombre'] . "<br>";
						
					}
					?>
        		</div>
        		
        		<div class="col-md-3" style="background: white;border: none;">
					<?php
					for ($i = 3; $i < count($ubicaciones); $i = $i + 4) {
						echo "<input id=" . "ciudad" . $ubicaciones[$i]['Ubicacione']['id'] . " class ='uto'  onclick='seleccionada(this.checked)' type='checkbox' name='ubi" . $ubicaciones[$i]['Ubicacione']['nombre'] . "' value='" . $ubicaciones[$i]['Ubicacione']['id'] . "'>" . $ubicaciones[$i]['Ubicacione']['nombre'] . "<br>";
						
					}
					?>
        		</div>
				<script>
					<?php
					for ($j = 0; $j < sizeof($ciuds); $j++) {
						
					?>
						echo $ciuds[$j]['ciudad_serviceBox']['ubicacion_id'];
					?>).prop("checked", true);
											 $("#ciudad<?php
						echo $ciuds[$j]['ciudad_serviceBox']['ubicacion_id'];
					?>").prop("checked", true);
										<?php
					}
					?>	
				</script>
				
  		</div>
  
   <center>
   	
  	<div class="row">
  		
  		<div class="col-md-4">
        	<div style="padding-left: 30px; padding-right: 30px;"  >        		        		
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input select"><label for="serviceBoxMarca">Marca:</label><br />
					<p style="border: 1px solid #ccc;margin: 5px;height: 33px;" id="lm" onclick ="mostrar2('marca')"> Mostrar lista </p>

					</div>				
				</div>
			</div>
        </div>

		<div class="col-md-4">
        
        	<div style="padding-left: 30px; padding-right: 30px;"  >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input text" id="add"><label for="serviceBoxFechaFacturacion" style="width: 100%;" title="Fecha en la cual necesito que mi serviceBox este disponible para facturación a KA y Distribuidores">Fecha de Facturación: <?php
						echo $this->Html->image('circle_info_m.png', array(
							'alt' => 'tabla',
							'style' => 'float:right; margin: 3px;height: 16px'
						));
						?></label><input   value="<?php
						if (isset($serviceBox['serviceBox']['fecha_facturacion'])) {
							$p = explode('-', $serviceBox['serviceBox']['fecha_facturacion']);
							echo $p[2] . '/' . $p[1] . '/' . $p[0];
						}
						?>" name="data[serviceBox][fecha_facturacion]" style="width: 80%;box-shadow: none; padding-right:2px;padding-left:2px;margin-bottom: 5px;"  placeholder="DD/MM/AAAA" maxlength="50" type="text" id="serviceBoxFechaFacturacion">
					</div>			
				</div>
			</div>
        </div>
        
        <div class="col-md-4">
        
        	<div style="padding-left: 30px; padding-right: 30px;"  >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input number"><label for="serviceBoxCantidad">Cantidades:</label><input onBlur = "document.getElementById('ctotal').value = this.value.replace('.', '');" onkeyup = "if(this.value.indexOf(',')<0){ cambiar(this,this.value.charAt(this.value.length-1));};" value="<?php
						if (isset($serviceBox['serviceBox']['cantidad'])) {
							echo $serviceBox['serviceBox']['cantidad'];
						}
						?>"   name="data[serviceBox][cantidad]" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;;margin-bottom: 5px" class="inp" type="text" id="serviceBoxCantidad">
					</div>				
				</div>
        	</div>
        
        </div>
		
  	</div>
  	
  </center>
		<div  id ="marca"  style="margin: 12px; margin-left: 10px;margin-right: 10px;border: 1px solid #ccc;height: 196px;overflow-y:scroll;font-size:10pt;display:none">
			
			<div style="background: white;border: none;padding-top: 10px;padding-left: 90px;">
        			
        		<?php

				echo "<input type='checkbox' id='categ1' onclick='seleccionada3()'  >" . $categorias[0]['Categoria']['descripcion'];

				for ($p = 1; $p < count($categorias); $p++) {
					echo "<input onclick='seleccionada3()' id='categ" . ($p + 1) . "' type='checkbox' style='margin-left: 20%;' >" . $categorias[$p]['Categoria']['descripcion'];
				}
				?>
        	</div>

			
  			<div class="col-md-3" style="background: white;border: none;">
			<input type='checkbox' name='todos' value='-1' onclick="seleccionada2(this.checked); marcar(this)"> <font> SELECCIONAR TODOS </font> <br>
					<?php
					for ($i = 0; $i < floor(count($marcas) / 4) - 1; $i = $i + 1) {
						if (!(strpos($marcas[$i]['Marca']['nombre'], ":") !== false)) {
							echo "<font class ='mto" . $marcas[$i]['Marca']['categorias_id'] . "' ><input class ='mto'  onclick='seleccionada2(this.checked)' type='checkbox' name='marca" . $marcas[$i]['Marca']['nombre'] . "' value='" . $marcas[$i]['Marca']['id'] . "'>" . $marcas[$i]['Marca']['nombre'] . "</font><br class ='mto" . $marcas[$i]['Marca']['categorias_id'] . "'>";
						}
					}
					?>
        
        	</div>
        
     		<div class="col-md-3" style="background: white;border: none;">
        
        		<?php
				for ($i = floor(count($marcas) / 4) - 1; $i < floor(count($marcas) / 2) + 1; $i = $i + 1) {
					if (!(strpos($marcas[$i]['Marca']['nombre'], ":") !== false)) {
						echo "<font class ='mto" . $marcas[$i]['Marca']['categorias_id'] . "' ><input class ='mto'  onclick='seleccionada2(this.checked)' type='checkbox' name='marca" . $marcas[$i]['Marca']['nombre'] . "' value='" . $marcas[$i]['Marca']['id'] . "'>" . $marcas[$i]['Marca']['nombre'] . "</font><br class ='mto" . $marcas[$i]['Marca']['categorias_id'] . "'>";
					}
				}
				?>
        
        	</div>
        
     		<div class="col-md-3" style="background: white;border: none;">
        
        		<?php
				for ($i = floor(count($marcas) / 2) + 1; $i < (floor(count($marcas) / 4) + floor(count($marcas) / 2)) + 2; $i = $i + 1) {
					if (!(strpos($marcas[$i]['Marca']['nombre'], ":") !== false)) {
						echo "<font class ='mto" . $marcas[$i]['Marca']['categorias_id'] . "' ><input class ='mto' onclick='seleccionada2(this.checked)' type='checkbox' name='marca" . $marcas[$i]['Marca']['nombre'] . "' value='" . $marcas[$i]['Marca']['id'] . "'>" . $marcas[$i]['Marca']['nombre'] . "</font><br class ='mto" . $marcas[$i]['Marca']['categorias_id'] . "'>";
					}
				}
				?>
        	        
        	</div>
        		
        	<div class="col-md-3" style="background: white;border: none;">
        		<?php
				for ($i = (floor(count($marcas) / 4) + floor(count($marcas) / 2)) + 2; $i < count($marcas); $i = $i + 1) {
					if (!(strpos($marcas[$i]['Marca']['nombre'], ":") !== false)) {
						echo "<font class ='mto" . $marcas[$i]['Marca']['categorias_id'] . "' ><input  class ='mto' onclick='seleccionada2(this.checked)' type='checkbox' name='marca" . $marcas[$i]['Marca']['nombre'] . "' value='" . $marcas[$i]['Marca']['id'] . "'>" . $marcas[$i]['Marca']['nombre'] . "</font><br class ='mto" . $marcas[$i]['Marca']['categorias_id'] . "'>";
					}
				}
				?>
        	</div>
  		</div>
 	
  <center>
  	
  	 <div class="row">
        <div class="col-md-6">
        	<div >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input text" id="add"><label for="serviceBoxResponsable">Responsable:</label><br /><input value="<?php
						if (isset($serviceBox['serviceBox']['responsable'])) {
							echo $serviceBox['serviceBox']['responsable'];
						}
						?>" name="data[serviceBox][responsable]" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" type="text" id="serviceBoxResponsable">
					</div>				
				</div>
        	</div>
        </div>
        <div class="col-md-6">
        	<div >
        		<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					<div class="input email"><label for="serviceBoxEmail">Email:</label><br /><input value="<?php
						if (isset($serviceBox['serviceBox']['responsable_email'])) {
							echo $serviceBox['serviceBox']['responsable_email'];
						}
						?>" name="data[serviceBox][responsable_email]" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" type="email" id="serviceBoxEmail">
					</div>		
				</div>
        	</div>
        </div>
      </div>
  	
  </center>
	
</div>



<div id="boton-0" style="text-align: center; padding: 20px;">
	<div class="submit"><input onclick="return pasarSiguiente(&quot;1&quot;);" type="submit" value="SIGUIENTE"></div>
</div>


<div id="tabs-1" style="display: none;">
		
	<div style="border-style:solid;border-width:1px; border-color: #cccccc; padding: 30px; border-bottom: none; border-top: none;">	
	<p><b>Cantidad:</b> <input id="ctotal" type="number" value="<?php
	if (isset($serviceBox['serviceBox']['cantidad'])) {
		echo $serviceBox['serviceBox']['cantidad'];
	} else
		echo 0;
	?>" style="border: none;" readonly> 
	</p>
	
	<table width="100%" style="border-collapse: inherit;border: 1px solid #ccc;">
		<tbody>
		<tr>
			<td colspan="100%">
				<div style="background: #666666;color: white;border-style:solid;border-width:1px;margin: -1px; border-color: #cccccc; padding-top: 5px; padding-bottom: 5px;">
				<b style="padding-left:5px">
				Sub Regiones
				</b>
				</div>
			</td>
		</tr>
		<tr style="border-style: solid; border-color: #cccccc; border-width: 1px; border-top: none;">
			<td> 
				   <center>
   	
				  	<div class="row" style="margin-top: 1px;">
				  		
				  		<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
								<div class="input number">
									
									<label for="Volumenbogotaoff">Bogota Off:</label>
										<p >
										<input onchange ="actualizarv('vbogotaoff', this.value)" value="<?php
										if (isset($vol['Volumene']['bogotaoff'])) {
											echo $vol['Volumene']['bogotaoff'];
										}
										?>" name="data[Volumen][bogotaoff]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" maxlength="255" type="number" step="any" id="Volumenbogotaoff">
										<font id ="vbogotaoff" >% () </font>
										</p>
								</div>
							</div>	
				        
				        </div>
				
						<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
							<div class="input number">
								
								<label for="Volumenejevalle">Eje + Valle:</label>
									<p >
									<input onchange ="actualizarv('vejevalle', this.value)" value="<?php
									if (isset($vol['Volumene']['ejevalle'])) {
										echo $vol['Volumene']['ejevalle'];
									}
									?>"  name="data[Volumen][ejevalle]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" maxlength="255" type="number" step="any" id="Volumenejevalle">
								<font id ="vejevalle" >% () </font>
								</p>
							</div>
							</div>
				        
				        </div>
				        
				        <div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc; ">
							<div class="input number">
								
								<label for="Volumenviajero">Viajero:</label>
									<p >
									<input onchange ="actualizarv('vviajero', this.value)" value="<?php
									if (isset($vol['Volumene']['viajero'])) {
										echo $vol['Volumene']['viajero'];
									}
									?>" name="data[Volumen][viajero]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" maxlength="255" type="number" step="any" id="Volumenviajero">
								<font id ="vviajero" >% () </font>
								</p>
							</div>
							</div>
				        </div>
				        
				  	</div>
				  	
				  </center>

				<center>
					<div class="row" style="margin-top: 1px;">
				  		
				  		<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
								<div class="input number">
									
									<label for="Volumenbogotaon">Bogota On:</label>
										<p >
										<input onchange ="actualizarv('vbogotaon', this.value)" value="<?php
										if (isset($vol['Volumene']['bogotaon'])) {
											echo $vol['Volumene']['bogotaon'];
										}
										?>"  name="data[Volumen][bogotaon]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" maxlength="255" type="number" step="any" id="Volumenbogotaon">
										<font id ="vbogotaon" >% () </font>
										</p>
								</div>
							</div>	
				        
				        </div>
				
						<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
							<div class="input number">
								
								<label for="Volumenantioquia">Antioquia:</label>
									<p >
									<input onchange ="actualizarv('vanti', this.value)" value="<?php
									if (isset($vol['Volumene']['anti'])) {
										echo $vol['Volumene']['anti'];
									}
									?>"   name="data[Volumen][anti]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" maxlength="255" type="number" step="any" id="Volumenantioquia">
								<font id ="vanti" >% () </font>
								</p>
							</div>
							</div>
				        
				        </div>
				        
				        <div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc; ">
							<div class="input number">
								
								<label for="Volumencosta">Costa:</label>
									<p >
									<input onchange ="actualizarv('vcosta', this.value)" value="<?php
									if (isset($vol['Volumene']['costa'])) {
										echo $vol['Volumene']['costa'];
									}
									?>"  name="data[Volumen][costa]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" maxlength="255" type="number" step="any" id="Volumencosta">
								<font id ="vcosta" >% () </font>
								</p>
							</div>
							</div>
				        </div>
				        
				  	</div>
				
				</center>

				<center>
					<div class="row" style="margin-top: 1px;">
				  		
				  		<div class="col-md-6" style="border:none">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
								<div class="input number">
									
									<label for="Volumenoriente">Oriente:</label>
										<p >
										<input onchange ="actualizarv('voriente', this.value)" value="<?php
										if (isset($vol['Volumene']['oriente'])) {
											echo $vol['Volumene']['oriente'];
										}
										?>" name="data[Volumen][oriente]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" maxlength="255" type="number" step="any" id="Volumenoriente">
										<font id ="voriente" >% () </font>
										</p>
								</div>
							</div>	
				        
				        </div>
				
						<div class="col-md-6" style="border:none">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
							<div class="input number">
								
								<label for="Volumencanales">Canales Alternativos:</label>
									<p >
									<input onchange ="actualizarv('vcanales', this.value)" value="<?php
									if (isset($vol['Volumene']['canales'])) {
										echo $vol['Volumene']['canales'];
									}
									?>"  name="data[Volumen][canales]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px" class="inp" maxlength="255" type="number" step="any" id="Volumencanales">
								<font id ="vcanales" >% () </font>
								</p>
							</div>
							</div>
				        
				        </div>
				  	</div>
				
				</center>
			
				</td>
		</tr>
		</tbody>
	</table>
	
	</div>
	
	<div style="border-style:solid;border-width:1px; border-color: #cccccc; padding: 30px;">	
	
	<table width="100%" style="border-collapse: inherit;border: 1px solid #ccc;" >
		
		<tbody><tr>
			<td colspan="100%">
				<div style="background: #666666;color: white;border-style:solid;border-width:1px; margin: -1px; border-color: #cccccc; padding-top: 5px; padding-bottom: 5px;">
				<b style="padding-left:5px" >
				KA	
				</b>
				</div>
			</td>
		</tr>
		<tr style="border-style: solid; border-color: #cccccc; border-width: 1px; border-top: none; border-bottom: none;">
			<td> 
				 <center>
   	
				  	<div class="row" style="margin-top: 1px;">
				  		
				  		<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc; ">
							<div class="input number">
								
								<label for="Volumenalkosto">ALKOSTO:</label>
									<p >
									<input onchange ="actualizarv('valkosto', this.value)" value="<?php
									if (isset($vol['Volumene']['ka'])) {
										echo $vol['Volumene']['ka'];
									}
									?>" name="data[Volumen][ka]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" id="Volumenalkosto" step="any">
								<font id ="valkosto" >% () </font>
								</p>
							</div>
							</div>	
				        
				        </div>
				
						<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc; ">
							<div class="input number">
								
								<label for="Volumencencosud">CENCOSUD:</label>
									<p >
									<input onchange ="actualizarv('vcenco', this.value)" value="<?php
									if (isset($vol['Volumene']['cencosud'])) {
										echo $vol['Volumene']['cencosud'];
									}
									?>" name="data[Volumen][cencosud]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" step="any" id="Volumencencosud">
								<font id ="vcenco" >% () </font>
								</p>
							</div>
							</div>
				        
				        </div>
				        
				        <div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
							<div class="input number">
								
								<label for="Volumencasino">CASINO:</label><br />
								<p>
									<input onchange ="actualizarv('vcasino', this.value)" value="<?php
									if (isset($vol['Volumene']['casino'])) {
										echo $vol['Volumene']['casino'];
									}
									?>" name="data[Volumen][casino]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" step="any" id="Volumencasino">
								<font id ="vcasino" >% () </font>
								</p>	
							</div>
							</div>	
				        </div>
				        
				  	</div>
				  	
				  </center>
				  
				</td>
			
		</tr>
		
		<tr style="border-style: solid; border-color: #cccccc; border-width: 1px; border-top: none; border-bottom: none;">
			<td> 
				 <center>
   	
				  	<div class="row" style="margin-top: 1px;">
				  		
				  		<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc; ">
							<div class="input number">
								
								<label for="Volumensubsidio">COLSUBSIDIO:</label>
								<p>
									<input onchange ="actualizarv('vcolsubsidio', this.value)" value="<?php
									if (isset($vol['Volumene']['colsubsidio'])) {
										echo $vol['Volumene']['colsubsidio'];
									}
									?>"  name="data[Volumen][colsubsidio]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" step="any" id="Volumensubsidio">
									<font id ="vcolsubsidio" >% () </font>
								</p>
							</div>
							</div>		
				        
				        </div>
				
						<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
							<div class="input number">
								
								<label for="Volumen14">LA 14:</label><br />
								<p>
									<input onchange ="actualizarv('v14', this.value)" value="<?php
									if (isset($vol['Volumene']['lacatorce'])) {
										echo $vol['Volumene']['lacatorce'];
									}
									?>" name="data[Volumen][lacatorce]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" step="any" id="Volumen14">
									<font id ="v14" >% () </font>
								</p>	
							</div>
							</div>	
				        
				        </div>
				        
				        <div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc; ">
							<div class="input number">
								
								<label for="Volumenolimpica">OLIMPICA:</label>
								<p>
									<input onchange ="actualizarv('volimpica', this.value)" value="<?php
									if (isset($vol['Volumene']['olimpica'])) {
										echo $vol['Volumene']['olimpica'];
									}
									?>"  name="data[Volumen][olimpica]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" step="any" id="Volumenolimpica">
									<font id ="volimpica" >% () </font>
								</p>		
							</div>
							</div>		
				        </div>
				        
				  	</div>
				  	
				  </center>
				  
			</td> 
			
		</tr>
		
		<tr style="border-style: solid; border-color: #cccccc; border-width: 1px; border-top: none;">
			
		<td> 
				 <center>
   	
				  	<div class="row" style="margin-top: 1px;">
				  		
				  		<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
							<div class="input number">
								
								<label for="Volumenoxxo">OXXO:</label><br />
								<p>
									<input onchange ="actualizarv('voxxo', this.value)" value="<?php
									if (isset($vol['Volumene']['oxxo'])) {
										echo $vol['Volumene']['oxxo'];
									}
									?>"  name="data[Volumen][oxxo]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" id="Volumenoxxo" step="any">
									<font id ="voxxo" >% () </font>
								</p>		
							</div>
							</div>			
				        
				        </div>
				
						<div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
							<div class="input number">
								
								<label for="Volumenpricesmart">PRICESMART:</label>
								<p>
									<input onchange ="actualizarv('vpricesmart', this.value)" value="<?php
									if (isset($vol['Volumene']['princesmart'])) {
										echo $vol['Volumene']['princesmart'];
									}
									?>"  name="data[Volumen][princesmart]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" step="number" id="Volumenpricesmart">
									<font id ="vpricesmart" >% () </font>
								</p>	
							</div>
							</div>		
				        
				        </div>
				        
				        <div class="col-md-4">
				        
				        	<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
							<div class="input number">
								
								<label for="Volumenfalabella">FALABELLA:</label>
								<p>
									<input onchange ="actualizarv('vfalabella', this.value)" value="<?php
									if (isset($vol['Volumene']['falabella'])) {
										echo $vol['Volumene']['falabella'];
									}
									?>" name="data[Volumen][falabella]" style="text-align: right; width: 15%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" step="number" id="Volumenfalabella">
									<font id ="vfalabella" >% () </font>
								</p>	
							</div>
							</div>		
				        </div>
				        
				  	</div>
				  	
				  </center>
				  
			</td> 
			
			
		</tr>
		
	</tbody>
	</table>
	
	</div>

</div>

<div id="boton-1" style="text-align: center; padding: 20px; display: none;">
	<table width="100%">
		<tbody><tr>
			<td width="50%"><div class="submit"><input onclick="return retrocederPaso(&quot;4&quot;);" type="submit" value="ANTERIOR"></div></td>
			<td width="50%"><div class="submit"><input onclick="return pasarSiguiente(&quot;2&quot;);" type="submit" value="SIGUIENTE"></div></td>
		</tr>
	</tbody></table>
</div>

<div id="tabs-2" style="display: none;">
	
	<div style="border-style:solid;border-width:1px; border-color: #cccccc; padding: 60px; text-align: center; border-bottom: none; border-top: none;">	
		<b>
			¿Necesita código diferencial?
			</b>
			<table width="50%" align="center" style="text-align: center;">
				<tbody><tr>
					<td width="50%"><div class="submit"><input  onclick="ocultar(this.checked)" id="sip" type="checkbox" value="1" name="data[Codigo][codigo]">SI</div></td>
					<td width="50%"><div class="submit"><input onclick="ocultar2(this.checked)"   id="nop" type="checkbox" value="0" name="data[Codigo][codigo]">NO</div></td>
				</tr>
				
				<tr id="masp1" style="display:none" > 
					<td  width="50%"><p><b>¿Crear Código? </b></p> </td>
					<td width="50%"><div class="submit" style="float: left;"  ><input onclick="markCheck(0);" id="bCheckSI" type="checkbox" value="1" name="data[Codigo][codigo]">SI</div> 
					<div class="submit" ><input onclick=" markCheck(1);"  id="bCheckNO" type="checkbox" value="0" name="data[Codigo][codigo]">NO</div>
					</td>
					
				</tr>
				
				<tr id="sdprueba" >
					<td>
						<div class="sw" id="m1"  style="display:none;  border-style:solid;border-width:1px; border-color: #cccccc;margin-top: 5px;">
							<div class="input number">
								<label for="Codigoean"><b>C&Oacute;DIGO EAN A REUTILIZAR:</b></label>
								<input value="<?php
								if (isset($cod['Codigo']['codigo_ean'])) {
									echo $cod['Codigo']['codigo_ean'];
								}
								?>" name="data[Codigo][codigo_ean]" onkeypress="return mis_datos(event)" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp"  type="text"  id="Codigoean">
							</div>
						</div>						
					</td>
					
					<td>
						<div class="sw" id="m2" style="display:none; border-style:solid;border-width:1px; border-color: #cccccc;margin-top: 5px;">
							<div class="input number">
								<label for="Codigosap"><b>C&Oacute;DIGO SAP A REUTILIZAR:</b></label>
								<input value="<?php
								if (isset($cod['Codigo']['codigo_sap'])) {
									echo $cod['Codigo']['codigo_sap'];
								}
								?>" name="data[Codigo][codigo_sap]" onkeypress="return mis_datos(event)" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp"  type="text"  id="Codigosap">
							</div>
						</div>						
					</td>
						
				</tr>
				
				<tr>
					<td>
						<div class="nw" id="nodiferencial" style="display:none; border-style:solid;border-width:1px; border-color: #cccccc;margin-top: 5px;">
							<div class="input number">
								<label for="Codigoean"><b>C&Oacute;DIGO EAN:</b></label>
								<select name="data[Codigo][codigo_eanX]" class="inp" style="height: 40px;border: 1px solid #CCC;width: 87%;margin-bottom: 5px" id="Codigoean">
									<?php
									foreach ($productos as $producto):
									?>
										<option value="<?php
											echo $producto['Producto']['id'];
										?>"><?php
											echo $producto['Producto']['nombre'];
										?></option>
									<?php
									endforeach;
									?>
								</select>
							</div>
						</div>						
					</td>
					
					<td>
						<div class="nw" id="nodiferencial1" style="display:none; border-style:solid;border-width:1px; border-color: #cccccc;margin-top: 5px;">
							<div class="input number">
								<label for="Codigosap"><b>C&Oacute;DIGO SAP:</b></label>
								<select name="data[Codigo][codigo_sapX]" class="inp" style="height: 40px;border: 1px solid #CCC;width: 87%;margin-bottom: 5px" id="Codigosap">
									<?php
									foreach ($productos as $producto):
									?>
									<option value="<?php
										echo $producto['Producto']['id'];
									?>"><?php
										echo $producto['Producto']['nombre'];
									?></option>
									<?php
									endforeach;
									?>
								</select>
							</div>
						</div>
							
					</td>
						
				</tr>
				
			</tbody>
			</table>
		</div>	
			 
		
	</div>
	
	<div style="border-style:solid;border-width:1px; border-color: #cccccc; padding: 60px; text-align: center;">	
		<b>
			¿Este es un MixserviceBox?
			
			<table width="50%" align="center" style="text-align: center;">
				<tbody><tr>
					<td width="50%"><div class="submit"><input onclick="markMix(&quot;0&quot;);" id="bMixP" type="checkbox" value="1" name="data[Codigo][mixserviceBox]" > SI</div></td>
					<td width="50%"><div class="submit"><input onclick="markMix(&quot;1&quot;);" id="bMixPN" type="checkbox" value="0"  name="data[Codigo][mixserviceBox]">NO</div></td>
				</tr>
			</tbody></table>
			
			<center>
				<div id="mixserviceBox" style="width: 300px;display: none">
				
				<div   style=" border-style:solid;border-width:1px; border-color: #cccccc;margin-top: 5px;">
					<div class="input number">
						<label for="Codigoean"><b>APROBADOR :</b></label>
						<input value="<?php
						if (isset($cod['Codigo']['aprobador'])) {
							echo $cod['Codigo']['aprobador'];
						}
						?>" name="data[Codigo][aprobador]" style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp"  type="text"  id="Codigoean">
					</div>
				</div>
				
				<div  style=" border-style:solid;border-width:1px; border-color: #cccccc;margin-top: 5px;">
				<div class="input number">
					<label for="Codigosap3"><b>C&Oacute;DIGO SAP PRODUCTO 1:</b></label>
					<input value="<?php
					if (isset($cod['Codigo']['codextra1'])) {
						echo $cod['Codigo']['codextra1'];
					}
					?>" name="data[Codigo][codextra1]" onkeypress="return mis_datos(event)"  step='Any' style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px;font-weight: normal;" class="inp"  type="text" id="sapro1">
				</div>
				</div>
					
				<div  style=" border-style:solid;border-width:1px; border-color: #cccccc;margin-top: 5px;">
				<div class="input number">
					<label for="Codigosap3"><b>C&Oacute;DIGO SAP PRODUCTO 2:</b></label>
					<input value="<?php
					if (isset($cod['Codigo']['codextra2'])) {
						echo $cod['Codigo']['codextra2'];
					}
					?>" name="data[Codigo][codextra2]" onkeypress="return mis_datos(event)" step='Any' style=" width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px;font-weight: normal;" class="inp"  type="text" id="sapro2">
					</div>
					</div>
					
			
				<div  style=" border-style:solid;border-width:1px; border-color: #cccccc;margin-top: 5px;">
					<div class="input number">
						<label for="Codigosap3"><b>C&Oacute;DIGO SAP PRODUCTO 3:</b></label>
						<input value="<?php
						if (isset($cod['Codigo']['codextra3'])) {
							echo $cod['Codigo']['codextra3'];
						}
						?>" name="data[Codigo][codextra3]" onkeypress="return mis_datos(event)" step='Any' style="width: 80%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-bottom: 5px;font-weight: normal;" class="inp"  type="text" id="sapro3">
					</div>
				</div>
				</div>
			</center>
			 
		</b>
	</div>
	
	
</div>

<div id="boton-2" style="text-align: center; padding: 20px; display: none;">
	
	<table width="100%">
		<tbody><tr>
			<td width="50%"><div class="submit"><input onclick="return retrocederPaso(&quot;3&quot;);" type="submit" value="ANTERIOR"></div></td>
			<td width="50%"><div class="submit"><input onclick="return pasarSiguiente(&quot;3&quot;);" type="submit" value="SIGUIENTE"></div></td>
		</tr>
	</tbody></table>
	
</div>

<div id="tabs-3" style="display: none;">
	
	<div style="border-style:solid;border-width:1px; border-color: #cccccc; padding: 30px; border-top: none;">
	
	<table width="100%">
		<tbody><tr>
			<td colspan="2" style="padding: 10px;">
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					
					<div class="input text" id="add">
				
						<label for="serviceBoxobjetivo">
						<b>
							Objetivo del serviceBox:
						</b>
						</label>
						<textarea rows="4" value="<?php
						if (isset($cua['Cualitativo']['objetivo'])) {
							echo $cua['Cualitativo']['objetivo'];
						}
						?>" name="data[Cualitativo][objetivo]" style="width: 95%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-left: 30px;" class="inp" maxlength="255" type="text" id="serviceBoxobjetivo">
						</textarea>
					</div>
					
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding: 10px;">
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					
					<div class="input text" id="add">
				
						<label for="serviceBoxlineamientos">
						<b>	
							Foto del Éxito:
						</b>
						</label>
						<textarea rows="4" value="<?php
						if (isset($cua['Cualitativo']['lineamientos'])) {
							echo $cua['Cualitativo']['lineamientos'];
						}
						?>" name="data[Cualitativo][lineamientos]" style="width: 95%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-left: 30px;" class="inp" maxlength="255" type="text" id="serviceBoxlineamientos" >
						</textarea>
						
					</div>
					
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding: 10px;">
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					
					<div class="input text" id="add">
				
						<label for="serviceBoxlearnings">
						<b>	
							Learnings Anteriores:
						</b>
						</label>
						<textarea rows="4" value="<?php
						if (isset($cua['Cualitativo']['learnings'])) {
							echo $cua['Cualitativo']['learnings'];
						}
						?>" name="data[Cualitativo][learnings]" style="width: 95%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-left: 30px;" class="inp" maxlength="255" type="text" id="serviceBoxlearnings"  >
						</textarea>
						
					</div>
					
				</div>
			</td>
		</tr>
		<tr>
			<td style="padding: 10px;">
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					
					<div class="input text" id="add">
				
						<b>	
							¿Esta actividad se había realizado anteriormente?
						</b>
						<br><br>
						<table width="100%">
							<tbody>
								<tr>
									<td>
										<input type="checkbox" name="data[Cualitativo][anterior]" value="Si" id="checkSI" onclick="document.getElementById('Roianterior').disabled = false; return marcarCheckBox('0');">SI<br>
									</td>
									<td>
										<input type="checkbox" name="data[Cualitativo][anterior]" value="No" id="checkNO" onclick="document.getElementById('Roianterior').disabled = true; return marcarCheckBox('1');">No<br>
									</td>
								</tr>
							</tbody>
						</table>

					</div>
					
				</div>
			</td>
			<td style="padding: 10px;">
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					
					<div class="input number">
				
						<label for="Roianterior">
						<b>	
							ROI Año Anterior:
						</b>
						</label>
						<input disabled value="<?php
						if (isset($cua['Cualitativo']['roi'])) {
							echo $cua['Cualitativo']['roi'];
						}
						?>" name="data[Cualitativo][roi]" style="width: 95%;border-left: none;border-top: none;border-right: none;box-shadow: none;" class="inp" maxlength="255" type="number" id="Roianterior"> <font> % </font>
					
					</div>
					
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding: 10px;">
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					
					<div class="input text" id="add">
				
						<label for="serviceBoxoportunidad">
						<b>	
							Oportunidad de Negocio o Barrera:
						</b>
						</label>
						<textarea rows="4" value="<?php
						if (isset($cua['Cualitativo']['barrera'])) {
							echo $cua['Cualitativo']['barrera'];
						}
						?>" name="data[Cualitativo][barrera]" style="width: 95%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-left: 30px" class="inp" maxlength="255" type="text" id="serviceBoxoportunidad" >
						</textarea>

					</div>
					
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="padding: 10px;">
				<div style="border-style:solid;border-width:1px; border-color: #cccccc;">
					
					<div class="input text" id="add">
				
						<label for="serviceBoxmecanica">
						<b>	
							Mecánica detallada de la actividad:
						</b>
						</label>
						<textarea rows="4" value="<?php
						if (isset($cua['Cualitativo']['mecanica'])) {
							echo $cua['Cualitativo']['mecanica'];
						}
						?>" name="data[Cualitativo][mecanica]" style="width: 95%;border-left: none;border-top: none;border-right: none;box-shadow: none;margin-left: 30px" class="inp" maxlength="255" type="text" id="serviceBoxmecanica" >
						</textarea>
						
					
					</div>
					
				</div>
			</td>
		</tr>
		
	</tbody>
	</table>
	
	</div>

</div>

<div id="boton-3" style="text-align: center; padding: 20px; display: none;">
	
	<table width="100%">
		<tbody><tr>
			<td width="50%"><div class="submit"><input onclick="return retrocederPaso(&quot;2&quot;);" type="submit" value="ANTERIOR"></div></td>
			<td width="50%"><div class="submit"><input onclick="return pasarSiguiente(&quot;4&quot;);" type="submit" value="SIGUIENTE"></div></td>
		</tr>
	</tbody></table>
	
</div>

<div id="tabs-4" style="display: none;">
	
	<div style="border-style:solid;border-width:1px; border-color: #cccccc; border-top: none;">
	
		<div style="border-style:solid; border-width:1px; border-color: #cccccc; padding: 60px; text-align: center; border-top: none;">	
			
			<table width="50%" align="center" style="text-align: center;">
				<tbody>
					<tr>
						<td width="50%">
						<b>
							Pre M&amp;E 
						</b>
						</td>
						<td width="50%">
							<div class="submit"><input value="<?php
								if (isset($serviceBox['serviceBox']['preme'])) {
									echo $serviceBox['serviceBox']['preme'];
								}
								?>"  name="data[serviceBox][preme]" type="file" value="ADJUNTAR">
							</div>					
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	
		<div style="border-style:solid;border-width:1px; border-color: #cccccc; padding: 60px; text-align: center; border-top: none; border-bottom: none;">	
			
			<table width="50%" align="center" style="text-align: center;">
				<tbody>
					<tr>
						<td width="50%">
						<b>	
							Building Blocks
						</b>
						</td>
						<td width="50%">
							<div class="submit"><input value="<?php
								if (isset($serviceBox['serviceBox']['bblocks'])) {
									echo $serviceBox['serviceBox']['bblocks'];
								}
								?>"  name="data[serviceBox][bblocks]" type="file" value="ADJUNTAR">
							</div>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
	
</div>

<div id="boton-4" style="text-align: center; padding: 20px;display: none;">
	
	<table width="100%">
		<tbody><tr>
			<td><div class="submit"><input onclick="return retrocederPaso(&quot;1&quot;);" type="submit" value="ANTERIOR"></div></td>
			<td><div class="submit"><input type="submit" value="GUARDAR" name="definitivo"></div></td>
		</tr>
	</tbody></table>
	
</div>

</form>
</div>

	<script>
		
		if (typeof jQuery === "undefined" || jQuery.fn.jquery !== '1.4.2') 
	{
		var script_tag = document.createElement('script');
		script_tag.setAttribute("type","text/javascript");
		script_tag.setAttribute("src", "http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js")

		document.getElementsByTagName("head")[0].appendChild(script_tag);
	}

	function showIt2() {
	  document.getElementById("advertencia").style.display = "none";
	  
	}
		
		function pasarSiguiente(siguiente)
		{
			if (siguiente == '1')
			{
				var header00 = document.getElementById("header-0");
				header00.style.background = "#f0f0f0";
				header00.style.borderBottom = "1px";
				
				header00.innerHTML = "<font color='#b3b3b3'><b>Informaci&oacute;n B&aacute;sica</b></font>";
				
				var cuerpo0 = document.getElementById("tabs-0");
			
				cuerpo0.style.display = "none";
				
				var boton0 = document.getElementById("boton-0");
			
				boton0.style.display = "none";
				
				
				var header01 = document.getElementById("header-1");
				header01.style.background = "#FFFFFF";
				header01.style.borderBottom = "none";
				
				header01.innerHTML = "<font color='#6e126e'><b>Distribuci&oacuten Preliminar</b></font>";
				
				var cuerpo01 = document.getElementById("tabs-1");
			
				cuerpo01.style.display = "block";
				
				var boton1 = document.getElementById("boton-1");
			
				boton1.style.display = "block";
				
				return false;
			}
			else if (siguiente == '2')
			{
				var totalpp =0;
		var Volumenbogotaoff = document.getElementById("Volumenbogotaoff"); 
		if (Volumenbogotaoff .value.length >0){totalpp = totalpp + parseInt(Volumenbogotaoff.value);};

		var Volumenejevalle = document.getElementById("Volumenejevalle"); 
		if (Volumenejevalle.value.length >0){totalpp = totalpp + parseInt(Volumenejevalle.value);};

		var Volumenviajero = document.getElementById("Volumenviajero"); 
		if (Volumenviajero.value.length >0){totalpp = totalpp + parseInt(Volumenviajero.value);};

		var Volumenbogotaon = document.getElementById("Volumenbogotaon"); 
		if (Volumenbogotaon .value.length >0){totalpp = totalpp + parseInt(Volumenbogotaon.value);};

		var Volumenantioquia = document.getElementById("Volumenantioquia"); 
		if (Volumenantioquia.value.length >0){totalpp = totalpp + parseInt(Volumenantioquia.value);};

		var Volumencosta = document.getElementById("Volumencosta"); 
		if (Volumencosta.value.length >0){totalpp = totalpp + parseInt(Volumencosta.value);};

		var Volumenoriente = document.getElementById("Volumenoriente"); 
		if (Volumenoriente.value.length >0){totalpp = totalpp + parseInt(Volumenoriente.value);};

		var Volumencanales = document.getElementById("Volumencanales"); 
		if (Volumencanales.value.length >0){totalpp = totalpp + parseInt(Volumencanales.value);};

		var Volumenalkosto = document.getElementById("Volumenalkosto"); 
		if (Volumenalkosto.value.length >0){totalpp = totalpp + parseInt(Volumenalkosto.value);};
		var Volumencencosud = document.getElementById("Volumencencosud"); 
		if (Volumencencosud.value.length >0){totalpp = totalpp + parseInt(Volumencencosud.value);};
		var Volumencasino = document.getElementById("Volumencasino"); 
		if (Volumencasino.value.length >0){totalpp = totalpp + parseInt(Volumencasino.value);};
		var Volumensubsidio = document.getElementById("Volumensubsidio"); 
		if (Volumensubsidio.value.length >0){totalpp = totalpp + parseInt(Volumensubsidio.value);};
		var Volumen14 = document.getElementById("Volumen14"); 
		if (Volumen14.value.length >0){totalpp = totalpp + parseInt(Volumen14.value);};
		var Volumenolimpica = document.getElementById("Volumenolimpica"); 
		if (Volumenolimpica.value.length >0){totalpp = totalpp + parseInt(Volumenolimpica.value);};
		var Volumenoxxo = document.getElementById("Volumenoxxo"); 
		if (Volumenoxxo.value.length >0){totalpp = totalpp + parseInt(Volumenoxxo.value);};
		var Volumenpricesmart = document.getElementById("Volumenpricesmart"); 
		if (Volumenpricesmart.value.length >0){totalpp = totalpp + parseInt(Volumenpricesmart.value);};
		var Volumenfalabella = document.getElementById("Volumenfalabella"); 
		if (Volumenfalabella.value.length >0){totalpp = totalpp + parseInt(Volumenfalabella.value);};
		
		if(totalpp == 100){
		
		
				var header01 = document.getElementById("header-1");
				header01.style.background = "#f0f0f0";
				header01.style.borderBottom = "1px";
				
				header01.innerHTML = "<font color='#b3b3b3'><b>Distribuci&oacuten Preliminar</b></font>";
				
				var cuerpo01 = document.getElementById("tabs-1");
			
				cuerpo01.style.display = "none";
				
				var boton2 = document.getElementById("boton-1");
			
				boton2.style.display = "none";
				
				var header02 = document.getElementById("header-2");
				header02.style.background = "#FFFFFF";
				header02.style.borderBottom = "none";
				
				header02.innerHTML = "<font color='#6e126e'><b>Codificaci&oacute;n</b></font>";
				
				var cuerpo02 = document.getElementById("tabs-2");
			
				cuerpo02.style.display = "block";
				
				var boton1 = document.getElementById("boton-2");
			
				boton1.style.display = "block";
		}else{		
			document.getElementById("advertencia").style.display = "block";
			window.scrollTo(0, 0);
			setTimeout(showIt2, 4000); // after 5 secs
			
		}
				return false;
			}
			else if (siguiente == '3')
			{
				var header02 = document.getElementById("header-2");
				header02.style.background = "#f0f0f0";
				header02.style.borderBottom = "1px";
				
				header02.innerHTML = "<font color='#b3b3b3'><b>Codificaci&oacute;n</b></font>";
				
				var cuerpo01 = document.getElementById("tabs-2");
			
				cuerpo01.style.display = "none";
				
				var boton1 = document.getElementById("boton-2");
			
				boton1.style.display = "none";
				
				var header03 = document.getElementById("header-3");
				header03.style.background = "#FFFFFF";
				header03.style.borderBottom = "none";
				
				header03.innerHTML = "<font color='#6e126e'><b>Cualitativo</b></font>";
				
				var cuerpo02 = document.getElementById("tabs-3");
			
				cuerpo02.style.display = "block";
				
				var boton2 = document.getElementById("boton-3");
			
				boton2.style.display = "block";
				
				return false;
			}
			else if (siguiente == '4')
			{
				var header03 = document.getElementById("header-3");
				header03.style.background = "#f0f0f0";
				header03.style.borderBottom = "1px";
				
				header03.innerHTML = "<font color='#b3b3b3'><b>Cualitativo</b></font>";
				
				var cuerpo03 = document.getElementById("tabs-3");
			
				cuerpo03.style.display = "none";
				
				var boton2 = document.getElementById("boton-3");
			
				boton2.style.display = "none";
				
				var header04 = document.getElementById("header-4");
				header04.style.background = "#FFFFFF";
				header04.style.borderBottom = "none";
				
				header04.innerHTML = "<font color='#6e126e'><b>Cuantitativo</b></font>";
				
				var cuerpo04 = document.getElementById("tabs-4");
			
				cuerpo04.style.display = "block";
				
				var boton1 = document.getElementById("boton-4");
			
				boton1.style.display = "block";
				
				return false;
			}
							
		}
		
		function cargarImagen()
		{
			return false;
		}
		
		function marcarCheckBox(opcion)
		{
			
			if (opcion == '0')
			{
				$("#checkSI").attr('checked', true);
				$("#checkNO").attr('checked', false);
			
			}
			else
			{
				$("#checkSI").attr('checked', false);
				$("#checkNO").attr('checked', true);
			
			}
		}

		function markCheck(opcion)
		{
			
		if (opcion == 0)
		{
			var bCheckSI = document.getElementById("bCheckSI"); bCheckSI.checked = true;
			var bCheckNO= document.getElementById("bCheckNO"); bCheckNO.checked = false;
			
			var ele4 = document.getElementById("m1"); 
			var ele5 = document.getElementById("m2"); 
			var ele2 = document.getElementById("nodiferencial");
			var ele3 = document.getElementById("nodiferencial1");

			ele4.style.display ="none";
			ele5.style.display = "none";

		}
		else
		{

			var bCheckNO= document.getElementById("bCheckNO"); bCheckNO.checked = true;
			var bCheckSI = document.getElementById("bCheckSI"); bCheckSI.checked = false;
			var ele4 = document.getElementById("m1");;
			var ele5 = document.getElementById("m2");
			var ele2 = document.getElementById("nodiferencial");
			var ele3 = document.getElementById("nodiferencial1");

			ele4.style.display = "block";
			ele5.style.display = "block";
			ele2.style.display = "none";
			ele3.style.display = "none";

		}
		}
		
		function markMix(opcion)
		{
			if (opcion == '0')
			{
				var bCheckNo = document.getElementById("bMixPN"); bCheckNo.checked = false;
				
				var ele4 = document.getElementById("mixserviceBox");
				ele4.style.display = "block";

			}
			else
			{
				var bCheckSi = document.getElementById("bMixP"); bCheckSi.checked = false;
				var ele4 = document.getElementById("mixserviceBox");
				ele4.style.display = "none";
			}
		}

		function retrocederPaso(anterior)
		{
			if (anterior == '1')
			{
				var header01 = document.getElementById("header-4");
				header01.style.background = "#f0f0f0";
				header01.style.borderBottom = "1px";
				
				header01.innerHTML = "<font color='#b3b3b3'><b>Cuantitativo</b></font>";
				
				var cuerpo02 = document.getElementById("tabs-4");
			
				cuerpo02.style.display = "none";
				
				var boton2 = document.getElementById("boton-4");
			
				boton2.style.display = "none";
				
				var header02 = document.getElementById("header-3");
				header02.style.background = "#FFFFFF";
				header02.style.borderBottom = "none";
				
				header02.innerHTML = "<font color='#6e126e'><b>Cualitativo</b></font>";
				
				var cuerpo03 = document.getElementById("tabs-3");
			
				cuerpo03.style.display = "block";
				
				var boton3 = document.getElementById("boton-3");
			
				boton3.style.display = "block";
				
				return false;
			}
			else if (anterior == '2')
			{
				var header02 = document.getElementById("header-3");
				header02.style.background = "#f0f0f0";
				header02.style.borderBottom = "1px";
				
				header02.innerHTML = "<font color='#b3b3b3'><b>Cualitativo</b></font>";
				
				var cuerpo03 = document.getElementById("tabs-3");
			
				cuerpo03.style.display = "none";
				
				var boton3 = document.getElementById("boton-3");
			
				boton3.style.display = "none";
				
				var header03 = document.getElementById("header-2");
				header03.style.background = "#FFFFFF";
				header03.style.borderBottom = "none";
				
				header03.innerHTML = "<font color='#6e126e'><b>Codificaci&oacute;n</b></font>";
				
				var cuerpo04 = document.getElementById("tabs-2");
			
				cuerpo04.style.display = "block";
				
				var boton2 = document.getElementById("boton-2");
			
				boton2.style.display = "block";
				
				return false;
			}
			else if (anterior == '3')
			{
				var header03 = document.getElementById("header-2");
				header03.style.background = "#f0f0f0";
				header03.style.borderBottom = "1px";
				
				header03.innerHTML = "<font color='#b3b3b3'><b>Codificaci&oacute;n</b></font>";
				
				var cuerpo04 = document.getElementById("tabs-2");
			
				cuerpo04.style.display = "none";
				
				var boton2 = document.getElementById("boton-2");
			
				boton2.style.display = "none";
				
				var header04 = document.getElementById("header-1");
				header04.style.background = "#FFFFFF";
				header04.style.borderBottom = "none";
				
				header04.innerHTML = "<font color='#6e126e'><b>Distribuci&oacuten Preliminar</b></font>";
				
				var cuerpo05 = document.getElementById("tabs-1");
			
				cuerpo05.style.display = "block";
				
				var boton3 = document.getElementById("boton-1");
			
				boton3.style.display = "block";
				
				return false;
			}
			else if (anterior == '4')
			{
				var header04 = document.getElementById("header-1");
				header04.style.background = "#f0f0f0";
				header04.style.borderBottom = "1px";
				
				header04.innerHTML = "<font color='#b3b3b3'><b>Distribuci&oacuten Preliminar</b></font>";
				
				var cuerpo05 = document.getElementById("tabs-1");
			
				cuerpo05.style.display = "none";
				
				var boton2 = document.getElementById("boton-1");
			
				boton2.style.display = "none";
				
				var header05 = document.getElementById("header-0");
				header05.style.background = "#FFFFFF";
				header05.style.borderBottom = "none";
				
				header05.innerHTML = "<font color='#6e126e'><b>Informaci&oacute;n B&aacute;sica</b></font>";
				
				var cuerpo06 = document.getElementById("tabs-0");
			
				cuerpo06.style.display = "block";
				
				var boton3 = document.getElementById("boton-0");
			
				boton3.style.display = "block";
				
				return false;
			}				
		}

		function seleccionada(marcada){
			var lc = document.getElementById("lc");
			
			if(marcada){ cuentat = cuentat + 1;
			}else{ cuentat = cuentat - 1; };

			if(cuentat >0){
				lc.innerHTML = "cuidad(es) seleccionada(s)";
			}else{ lc.innerHTML = "seleccionar ciudades";}
		}
		

		function seleccionada2(marcada){
			var lc = document.getElementById("lm");
			
			if(marcada){ cuentam = cuentam + 1;
			}else{ cuentam = cuentam - 1; };

			if(cuentam >0){
				lc.innerHTML = "marca(s) seleccionada(s)";
			}else{ lc.innerHTML = "seleccionar marcas";}
		}

		function seleccionada3(){
			
			var e1 = document.getElementsByClassName('mto1');
			var e2 = document.getElementsByClassName('mto2');
			var e3 = document.getElementsByClassName('mto3');
			var e4 = document.getElementsByClassName('mto4');

			if(document.getElementById('categ1').checked){
				for (var i = 0; i < e1.length; ++i) { e1[i].style.display = "";};
			}else{
				for (var i = 0; i < e1.length; ++i) { e1[i].style.display = "none";};
			};
		
			if(document.getElementById('categ2').checked){
				for (var i = 0; i < e2.length; ++i) { e2[i].style.display = "";};
			}else{
				for (var i = 0; i < e2.length; ++i) { e2[i].style.display = "none";};
			};

			if(document.getElementById('categ3').checked){
				for (var i = 0; i < e3.length; ++i) { e3[i].style.display = "";};
			}else{
				for (var i = 0; i < e3.length; ++i) { e3[i].style.display = "none";};
			};

			if(document.getElementById('categ4').checked){
				for (var i = 0; i < e4.length; ++i) { e4[i].style.display = "";};
			}else{
				for (var i = 0; i < e4.length; ++i) { e4[i].style.display = "none";};
			};

			if(!document.getElementById('categ1').checked && !document.getElementById('categ2').checked && !document.getElementById('categ3').checked && !document.getElementById('categ4').checked){
				for (var i = 0; i < e1.length; ++i) { e1[i].style.display = "";};
				for (var i = 0; i < e2.length; ++i) { e2[i].style.display = "";};
				for (var i = 0; i < e3.length; ++i) { e3[i].style.display = "";};
				for (var i = 0; i < e4.length; ++i) { e4[i].style.display = "";};	
			}
			
			
		}

		function ocultar(marcado){
			var mp1 = document.getElementById('masp1');  
			var sd = document.getElementById('m1'); 
			var sd2 = document.getElementById('m2');
			var nop  = document.getElementById('nop'); 
			var bCheckNO= document.getElementById("bCheckNO"); 
			var bCheckSI = document.getElementById("bCheckSI"); 
			if(marcado){ 
				nop.checked = false ;
				mp1.style.display = '';
			}else{
				mp1.style.display = 'none';
				sd.style.display = 'none';
				sd2.style.display = 'none';
				bCheckNO.checked = false;
				bCheckSI.checked = false;
			};
		}

		function ocultar2(marcado){
			var mp1 = document.getElementById('masp1'); 
			var sip = document.getElementById('sip'); 
			var cean = document.getElementById('Codigoean');
			var csap = document.getElementById('Codigosap');
			if(marcado){ 
				sip.checked = false ;
				mp1.style.display = 'none';
				document.getElementById('m1').style.display= 'none';
				document.getElementById('m2').style.display= 'none';
				cean.value = "";
				csap.value = "";
				bCheckNO.checked = false;
				bCheckSI.checked = false;
			}else{
				
			};

		}

		function marcar(t){
			var elements = document.getElementsByClassName('mto');
			if(t.checked){
				for (var i = 0; i < elements.length; i++) {
					if(!(elements[i].parentNode.style.display === 'none')){elements[i].checked = true;}
				}
			}else{
				for (var i = 0; i < elements.length; i++) {
				elements[i].checked = false;}
			}
		}
		

	</script>

</div>