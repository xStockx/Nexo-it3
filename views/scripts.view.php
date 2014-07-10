	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/enviarCorreo.js"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41735936-4', 'auto');
  ga('send', 'pageview');

</script>
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