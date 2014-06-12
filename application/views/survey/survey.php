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
	            	<input type="radio" name="grado"> No terminé la escuela elemental
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Terminé la escuela elemental
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> No terminé la secundaria
	            </label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Terminé la secundaria
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Cursé estudios universitarios, escuela vocacional o técnica pero no tengo un

diploma
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Diploma universitario, vocacional o técnico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Posgrado (Máster, Doctorado o Certificación profesional equivalente)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> No estoy seguro(a)/No lo sé/Prefiero no responder
				</label>	        
	        </div>
		</section>



		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Cuál es la profesión o trabajo de la persona que aporta el principal ingreso de este hogar?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Trabajos menores ocasionales e informales (lavado, aseo, servicio doméstico 

ocasional, “pololos”, cuidador de autos, limosna).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Oficio menor, obrero no calificado, jornalero, servicio doméstico con contrato
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Obrero calificado, capataz, junior, micro empresario (kiosco, taxi, comercio 

menor, ambulante).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Empleado administrativo medio y bajo, vendedor, secretaria, jefe de sección.

Técnico especializado. Profesional independiente de carreras técnicas 

(contador, analista de sistemas, diseñador, músico). Profesor Primario o 

Secundario
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Ejecutivo medio (gerente, sub-gerente), gerente general de empresa media

o pequeña. Profesional independiente de carreras tradicionales (abogado, 

médico, arquitecto, ingeniero, agrónomo).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Alto ejecutivo (gerente general) de empresa grande. Directores de grandes

empresas. Empresarios propietarios de empresas medianas y grandes. 

Profesionales independientes de gran prestigio
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> No estoy seguro(a)/No lo sé/Prefiero no responder
				</label>	        
	        </div>

		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿En qué país vive actualmente?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="text" name="grado">
				</label>
	        </div>


		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿A qué grupo etario pertenece?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Menor de 19 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> 19 a 25 años
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> 26 a 30 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> 31 a 35 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> 36 a 40 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> 41 a 46 años 
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> 47 a 50 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> 51 a 55 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> 56 años o mayor
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Prefiero no responder
				</label>	        
	        </div>


		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Es usted hombre o mujer?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Hombre
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Mujer
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Prefiero no responder
				</label>
	        </div>


		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Cuál es situación laboral actual? </p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Empleado a tiempo complete
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Empleado a tiempo parcial
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Autónomo
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Administración del hogar/ama de casa
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Estudiante
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Retirado/a
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Desempleado/a
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Prefiero no responder
				</label>
	        </div>

		</section>



		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Tiene acceso a Internet de alta velocidad?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> No
	        	</label>
	        </div>

		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Usa Internet para alguna de las siguientes actividades?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Hacer compras
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Pagar facturas
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Transferir dinero a alguien dentro de mi país
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Transferir dinero a alguien en otro país
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Considera que debe aprender nuevas habilidades para poder seguir avanzando profesionalmente?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Definitivamente no
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Considera que en algún momento tendrá que redefinir drásticamente sus habilidades profesionales para poder maximizar sus probabilidades de conseguir empleo?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Definitivamente no
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Cuales de las siguientes areas le gustaría estudiar?  Por favor marque todas las que le interesen.</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Diseno y desarrollo de paginas Web
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Programacion en Java
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Diseno y desarrollo de aplicaciones Android / IOS
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Administracion de Redes (e.g., Cisco)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Programacion SQL
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Programacion PHP/Perl
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Diseno grafico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Control de calidad / Six Sigma
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Administracion de Proyectos (Project Management)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Marketing Digital y Generacion de Demanda (User Acquisition)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Social Media
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Manejo y Administracion de Contratos
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Desarrollo y Gerencia de Productos en línea
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Como ser un emprendedor (Entrepreunership) 
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Como usar Excel, Powerpoint y Microsoftword
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Aprender a hablar en Ingles
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Analisis de datos (Data Science)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Ninguna de estas opciones me interesa
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Cual de estos programas te interesa lo suficiente como para dedircarle 12 meses de estudio y pagar aproximadamente $70 mensuales por el programa?  Al completar el curso obtendrías un certificado de graduación.  Por favor escoge solo una de las siguientes opciones.</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Diseno y desarrollo de paginas Web
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Programacion en Java
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Diseno y desarrollo de aplicaciones Android / IOS
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Administracion de Redes (e.g., Cisco)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Programacion SQL
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Programacion PHP/Perl
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Diseno grafico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Control de calidad / Six Sigma
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Administracion de Proyectos (Project Management)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Marketing Digital y Generacion de Demanda (User Acquisition)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Social Media
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Manejo y Administracion de Contratos
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Desarrollo y Gerencia de Productos en línea
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Como ser un emprendedor (Entrepreunership) 
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Como usar Excel, Powerpoint y Microsoftword
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Aprender a hablar en Ingles
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Analisis de datos (Data Science)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Ninguna de estas opciones me interesa
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Estarias dispuesto a estudiar este programa _______ en ingles</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Si, dispuesto a estudiar en ingles
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Solo lo estudiaría si el programa fuera en español
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Estarias dispuesto a estudiar este programa _____ por internet, con acceso a contenido multimedia y videos en línea y con acceso en línea a instructores en vivo que te pueden contestar por chat a cualquier duda que tengas?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" name="grado"> Definitivamente no
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Existe algún otro tema que te interese estudiar que no hayamos cubierto en esta encuesta?</p>
	        </div>
	        <div class="column small-12">
	        	<label class="text-right">
	            	<textarea name="" id="" cols="30" rows="5"></textarea>
				</label>
	        </div>
	    </section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Con cuál de los siguientes medios financieros cuenta?</p>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Tarjeta de crédito de un banco local o regional
				</label>
	        </div>
	        <div class="column small-4">
            	<select name="" id="">
            		<option value="">Elige una opción</option>
            		<option value="">Sí</option>
            		<option value="">No</option>
            		<option value="">No lo sé/ No estoy seguro(a)</option>
            	</select>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Una tarjeta de crédito que le permite hacer compras en dólares (USD)
				</label>
	        </div>
	        <div class="column small-4">
            	<select name="" id="">
            		<option value="">Elige una opción</option>
            		<option value="">Sí</option>
            		<option value="">No</option>
            		<option value="">No lo sé/ No estoy seguro(a)</option>
            	</select>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Una tarjeta de crédito que le permite hacer transacciones internacionales
				</label>
	        </div>
	        <div class="column small-4">
            	<select name="" id="">
            		<option value="">Elige una opción</option>
            		<option value="">Sí</option>
            		<option value="">No</option>
            		<option value="">No lo sé/ No estoy seguro(a)</option>
            	</select>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Una tarjeta de crédito que le permite hacer transacciones internacionales que ocurren regularmente, como un cargo mensual
				</label>
	        </div>
	        <div class="column small-4">
            	<select name="" id="">
            		<option value="">Elige una opción</option>
            		<option value="">Sí</option>
            		<option value="">No</option>
            		<option value="">No lo sé/ No estoy seguro(a)</option>
            	</select>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Una cuenta bancaria de cheques
				</label>
	        </div>
	        <div class="column small-4">
            	<select name="" id="">
            		<option value="">Elige una opción</option>
            		<option value="">Sí</option>
            		<option value="">No</option>
            		<option value="">No lo sé/ No estoy seguro(a)</option>
            	</select>
	        </div>


	        <div class="column small-8">
	        	<label class="text-right">
	            	Una cuenta de ahorros
				</label>
	        </div>
	        <div class="column small-4">
            	<select name="" id="">
            		<option value="">Elige una opción</option>
            		<option value="">Sí</option>
            		<option value="">No</option>
            		<option value="">No lo sé/ No estoy seguro(a)</option>
            	</select>
	        </div>


	        <div class="column small-8">
	        	<label class="text-right">
	            	Una tarjeta de débito
				</label>
	        </div>
	        <div class="column small-4">
            	<select name="" id="">
            		<option value="">Elige una opción</option>
            		<option value="">Sí</option>
            		<option value="">No</option>
            		<option value="">No lo sé/ No estoy seguro(a)</option>
            	</select>
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