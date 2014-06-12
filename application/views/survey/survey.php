<?
$this->load->view("header");
?>

<section class="main-section survey">

    <div class="row">

        <div class="column text-center">
          <h1>Encuesta</h1>
        </div>
		
		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Cuál es el grado de educación máximo que ha alcanzado?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> No terminé la escuela elemental
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Terminé la escuela elemental
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> No terminé la secundaria
	            </label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Terminé la secundaria
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Cursé estudios universitarios, escuela vocacional o técnica pero no tengo un

diploma
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Diploma universitario, vocacional o técnico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Posgrado (Máster, Doctorado o Certificación profesional equivalente)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> No estoy seguro(a)/No lo sé/Prefiero no responder
				</label>	        
	        </div>
		</section>



		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Cuál es la profesión o trabajo de la persona que aporta el principal ingreso de este hogar?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Trabajos menores ocasionales e informales (lavado, aseo, servicio doméstico 

ocasional, “pololos”, cuidador de autos, limosna).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Oficio menor, obrero no calificado, jornalero, servicio doméstico con contrato
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Obrero calificado, capataz, junior, micro empresario (kiosco, taxi, comercio 

menor, ambulante).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Empleado administrativo medio y bajo, vendedor, secretaria, jefe de sección.

Técnico especializado. Profesional independiente de carreras técnicas 

(contador, analista de sistemas, diseñador, músico). Profesor Primario o 

Secundario
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Ejecutivo medio (gerente, sub-gerente), gerente general de empresa media

o pequeña. Profesional independiente de carreras tradicionales (abogado, 

médico, arquitecto, ingeniero, agrónomo).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> Alto ejecutivo (gerente general) de empresa grande. Directores de grandes

empresas. Empresarios propietarios de empresas medianas y grandes. 

Profesionales independientes de gran prestigio
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" name="grado"> No estoy seguro(a)/No lo sé/Prefiero no responder
				</label>	        
	        </div>

		</section>

        <div class="column">
          
          <a href="#" class="button radius expand green tiny">Enviar</a>
        </div>

    </div>  

</section>

<?
$this->load->view("footer");
?>