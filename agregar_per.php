<?php 
 				session_start();
 				include "nav&side.php";

 				if (!isset($_SESSION['verificado'])) {
 					
 					echo "<script>location.href='index.php'</script>";
 				};

 				?>

				<div class="col m8 s12">

					<div class="row">
						
						<?php if (isset($_GET['prf'])): ?>
							
							<h2>AGREGAR PROFESOR</h2>

						<?php endif ?>

						<?php if (!isset($_GET['prf'])): ?>
							
							<h2>AGREGAR ADMINISTRADOR</h2>
							
						<?php endif ?>

						<form action="agg_per.php?per<?php if(isset($_GET['prf'])){echo '&prf';}?>" method="POST">
							<?php include_once "formulario_agg.php"; ?>
							<div class="input-field col s12">
				            	<button class="btn green darken-4 waves-effect waves-light center-align">Agregar</button>
				            </div>
						</form>
					</div>	
				</div>
			</div>
	    	<!--Import jQuery before materialize.js-->
	    	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  			<!-- Compiled and minified JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

			<script>
				$(document).ready(function(){
					$('.collapsible').collapsible();
				  });

				$(document).ready(function() {
					$('select').material_select();
				});
			</script>
	    </body>
  </html>