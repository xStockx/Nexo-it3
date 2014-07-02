	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/enviarCorreo.js"></script>
    <script>
    		$(document).ready(function(){
    			$('.cerrar').on('click',function(){
    				$('.modal').modal('hide');
    			});
    			$('.cerrarFormulario').on('click',function(){
    				$('.modal').modal('hide');
    			});
    		});
    		 $('#ei-slider').eislideshow({
                    easing      : 'easeOutExpo',
                    titleeasing : 'easeOutExpo',
                    animation : 'center',   
                    autoplay    : true,
                    titlespeed  : 1200
                });
    		 function muestraModal(valorEnviado)
    		 {
    		 	
    		 	//var modalSeleccionado = "'#"+valorEnviado+"'";
    		 	$('.modal').modal('hide');
    		 	
				$('#'+valorEnviado).modal('show');
    		 }
    </script>