<?
$this->load->view("header");
?>

<form id="survey" data-abide>
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
	            	<input type="radio" required  name="answer1" value="No terminé la escuela elemental"> No terminé la escuela elemental
	        	</label>

	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer1" value="Terminé la escuela elemental"> Terminé la escuela elemental
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer1" value="No terminé la secundaria"> No terminé la secundaria
	            </label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer1" value="Terminé la secundaria"> Terminé la secundaria
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer1" value="Cursé estudios universitarios, escuela vocacional o técnica pero no tengo un"> Cursé estudios universitarios, escuela vocacional o técnica pero no tengo un

diploma
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer1"> Diploma universitario, vocacional o técnico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer1"> Posgrado (Máster, Doctorado o Certificación profesional equivalente)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer1"> No estoy seguro(a)/No lo sé/Prefiero no responder
				</label>	        
	        </div>
		</section>



		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Cuál es la profesión o trabajo de la persona que aporta el principal ingreso de este hogar?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer2" value="Trabajos menores ocasionales e informales (lavado, aseo, servicio doméstico ocasional, “pololos”, cuidador de autos, limosna)."> Trabajos menores ocasionales e informales (lavado, aseo, servicio doméstico 

ocasional, “pololos”, cuidador de autos, limosna).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer2" value="Oficio menor, obrero no calificado, jornalero, servicio doméstico con contrato"> Oficio menor, obrero no calificado, jornalero, servicio doméstico con contrato
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer2" value="Obrero calificado, capataz, junior, micro empresario (kiosco, taxi, comercio menor, ambulante)."> Obrero calificado, capataz, junior, micro empresario (kiosco, taxi, comercio menor, ambulante).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer2" value="Empleado administrativo medio y bajo, vendedor, secretaria, jefe de sección. Técnico especializado. Profesional independiente de carreras técnicas (contador, analista de sistemas, diseñador, músico). Profesor Primario o Secundario"> Empleado administrativo medio y bajo, vendedor, secretaria, jefe de sección. Técnico especializado. Profesional independiente de carreras técnicas (contador, analista de sistemas, diseñador, músico). Profesor Primario o Secundario
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer2" value="Ejecutivo medio (gerente, sub-gerente), gerente general de empresa media o pequeña. Profesional independiente de carreras tradicionales (abogado, médico, arquitecto, ingeniero, agrónomo)."> Ejecutivo medio (gerente, sub-gerente), gerente general de empresa media o pequeña. Profesional independiente de carreras tradicionales (abogado, médico, arquitecto, ingeniero, agrónomo).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer2" value="Alto ejecutivo (gerente general) de empresa grande. Directores de grandes empresas. Empresarios propietarios de empresas medianas y grandes. Profesionales independientes de gran prestigio"> Alto ejecutivo (gerente general) de empresa grande. Directores de grandes empresas. Empresarios propietarios de empresas medianas y grandes. Profesionales independientes de gran prestigio
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer2" value="No estoy seguro(a)/No lo sé/Prefiero no responder"> No estoy seguro(a)/No lo sé/Prefiero no responder
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
	            	<input type="radio" required  name="answer3" value="Menor de 19 años"> Menor de 19 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="19 a 25 años"> 19 a 25 años
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="26 a 30 años"> 26 a 30 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="31 a 35 años"> 31 a 35 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="36 a 40 años"> 36 a 40 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="41 a 46 años"> 41 a 46 años 
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="47 a 50 años"> 47 a 50 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="51 a 55 años"> 51 a 55 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="56 años o mayor"> 56 años o mayor
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer3" value="56 años o mayor"> Prefiero no responder
				</label>	        
	        </div>


		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Es usted hombre o mujer?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer4" value="Hombre"> Hombre
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer4" value="Mujer"> Mujer
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer4" value="Prefiero no responder"> Prefiero no responder
				</label>
	        </div>


		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Cuál es situación laboral actual? </p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer5" value="Empleado a tiempo complete"> Empleado a tiempo complete
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer5" value="Empleado a tiempo parcial"> Empleado a tiempo parcial
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer5" value="Autónomo"> Autónomo
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer5" value="Administración del hogar/ama de casa"> Administración del hogar/ama de casa
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer5" value="Estudiante"> Estudiante
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer5" value="Retirado/a"> Retirado/a
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer5" value="Desempleado/a"> Desempleado/a
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer5" value="Prefiero no responder"> Prefiero no responder
				</label>
	        </div>

		</section>



		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Tiene acceso a Internet de alta velocidad?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer6" value="Si"> Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer6" value="No"> No
	        	</label>
	        </div>

		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Usa Internet para alguna de las siguientes actividades?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer7" value="Hacer compras"> Hacer compras
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer7" value="Pagar facturas"> Pagar facturas
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer7" value="Transferir dinero a alguien dentro de mi país"> Transferir dinero a alguien dentro de mi país
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer7" value="Transferir dinero a alguien en otro país"> Transferir dinero a alguien en otro país
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Considera que debe aprender nuevas habilidades para poder seguir avanzando profesionalmente?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer8" value="Definitivamente Si"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer8" value="Muy probable"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer8" value="Probable"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer8" value="Poco probable"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer8" value="Definitivamente no"> Definitivamente no
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Considera que en algún momento tendrá que redefinir drásticamente sus habilidades profesionales para poder maximizar sus probabilidades de conseguir empleo?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer9" value="Definitivamente Si"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer9" value="Muy probable"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer9" value="Probable"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer9" value="Poco probable"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer9" value="Definitivamente no"> Definitivamente no
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Cuales de las siguientes areas le gustaría estudiar?  Por favor marque todas las que le interesen.</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Diseno y desarrollo de paginas Web"> Diseno y desarrollo de paginas Web
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Programacion en Java"> Programacion en Java
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Diseno y desarrollo de aplicaciones Android / IOS"> Diseno y desarrollo de aplicaciones Android / IOS
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Administracion de Redes (e.g., Cisco)"> Administracion de Redes (e.g., Cisco)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Programacion SQL"> Programacion SQL
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Programacion PHP/Perl"> Programacion PHP/Perl
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Diseño grafico"> Diseño grafico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Control de calidad / Six Sigma"> Control de calidad / Six Sigma
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Administracion de Proyectos (Project Management)"> Administracion de Proyectos (Project Management)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Marketing Digital y Generacion de Demanda (User Acquisition)"> Marketing Digital y Generacion de Demanda (User Acquisition)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Social Media"> Social Media
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Manejo y Administracion de Contratos"> Manejo y Administracion de Contratos
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Desarrollo y Gerencia de Productos en línea"> Desarrollo y Gerencia de Productos en línea
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Como ser un emprendedor (Entrepreunership) "> Como ser un emprendedor (Entrepreunership) 
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Como usar Excel, Powerpoint y Microsoftword"> Como usar Excel, Powerpoint y Microsoftword
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Aprender a hablar en Ingles"> Aprender a hablar en Ingles
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Analisis de datos (Data Science)"> Analisis de datos (Data Science)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox" required  name="answer10" value="Ninguna de estas opciones me interesa"> Ninguna de estas opciones me interesa
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Cual de estos programas te interesa lo suficiente como para dedircarle 12 meses de estudio y pagar aproximadamente $70 mensuales por el programa?  Al completar el curso obtendrías un certificado de graduación.  Por favor escoge solo una de las siguientes opciones.</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Diseno y desarrollo de paginas Web"> Diseno y desarrollo de paginas Web
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Programacion en Java"> Programacion en Java
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Diseno y desarrollo de aplicaciones Android / IOS"> Diseno y desarrollo de aplicaciones Android / IOS
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Administracion de Redes (e.g., Cisco)"> Administracion de Redes (e.g., Cisco)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Programacion SQL"> Programacion SQL
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Programacion PHP/Perl"> Programacion PHP/Perl
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Diseno grafico"> Diseno grafico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Control de calidad / Six Sigma"> Control de calidad / Six Sigma
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Administracion de Proyectos (Project Management)"> Administracion de Proyectos (Project Management)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Marketing Digital y Generacion de Demanda (User Acquisition)"> Marketing Digital y Generacion de Demanda (User Acquisition)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Social Media"> Social Media
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Manejo y Administracion de Contratos"> Manejo y Administracion de Contratos
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Desarrollo y Gerencia de Productos en línea"> Desarrollo y Gerencia de Productos en línea
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Como ser un emprendedor (Entrepreunership) "> Como ser un emprendedor (Entrepreunership) 
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Como usar Excel, Powerpoint y Microsoftword"> Como usar Excel, Powerpoint y Microsoftword
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Aprender a hablar en Ingles"> Aprender a hablar en Ingles
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Analisis de datos (Data Science)"> Analisis de datos (Data Science)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer11" value="Ninguna de estas opciones me interesa"> Ninguna de estas opciones me interesa
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Estarias dispuesto a estudiar este programa _______ en ingles</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer12" value="Si, dispuesto a estudiar en ingles"> Si, dispuesto a estudiar en ingles
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer12" value="Solo lo estudiaría si el programa fuera en español"> Solo lo estudiaría si el programa fuera en español
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Estarias dispuesto a estudiar este programa _____ por internet, con acceso a contenido multimedia y videos en línea y con acceso en línea a instructores en vivo que te pueden contestar por chat a cualquier duda que tengas?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer13" value="Definitivamente Si"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer13" value="Muy probable"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer13" value="Probable"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer13" value="Poco probable"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="answer13" value="Definitivamente no"> Definitivamente no
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Existe algún otro tema que te interese estudiar que no hayamos cubierto en esta encuesta?</p>
	        </div>
	        <div class="column small-12">
	        	<label class="text-right">
	            	<textarea name="answer14" id="" cols="30" rows="5"></textarea>
				</label>
				<small class="error">Este campo es requerido.</small>
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
	        	<label for="">
	            	<select required  name="answer15" id="">
	            		<option value="">Elige una opción</option>
	            		<option value="Sí">Sí</option>
	            		<option value="No">No</option>
	            		<option value="No lo sé/ No estoy seguro(a)">No lo sé/ No estoy seguro(a)</option>
	            	</select>
	        	</label>

            	<small class="error">Este campo es requerido.</small>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Una tarjeta de crédito que le permite hacer compras en dólares (USD)
				</label>
	        </div>
	        <div class="column small-4">
	        	<label for="">
	            	<select required  name="answer16" id="">
	            		<option value="">Elige una opción</option>
	            		<option value="Sí">Sí</option>
	            		<option value="No">No</option>
	            		<option value="No lo sé/ No estoy seguro(a)">No lo sé/ No estoy seguro(a)</option>
	            	</select>
	        	</label>

            	<small class="error">Este campo es requerido.</small>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Una tarjeta de crédito que le permite hacer transacciones internacionales
				</label>
	        </div>
	        <div class="column small-4">
	        	<label for="">
	            	<select required  name="answer17" id="">
	            		<option value="">Elige una opción</option>
	            		<option value="Sí">Sí</option>
	            		<option value="No">No</option>
	            		<option value="No lo sé/ No estoy seguro(a)">No lo sé/ No estoy seguro(a)</option>
	            	</select>
	        	</label>

            	<small class="error">Este campo es requerido.</small>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Una tarjeta de crédito que le permite hacer transacciones internacionales que ocurren regularmente, como un cargo mensual
				</label>
	        </div>
	        <div class="column small-4">
	        	<label for="">
	            	<select required  name="answer18" id="">
	            		<option value="">Elige una opción</option>
	            		<option value="Sí">Sí</option>
	            		<option value="No">No</option>
	            		<option value="No lo sé/ No estoy seguro(a)">No lo sé/ No estoy seguro(a)</option>
	            	</select>
	        	</label>

            	<small class="error">Este campo es requerido.</small>
	        </div>

	        <div class="column small-8">
	        	<label class="text-right">
	            	Una cuenta bancaria de cheques
				</label>
	        </div>
	        <div class="column small-4">
	        	<label for="">
	            	<select required  name="answer19" id="">
	            		<option value="">Elige una opción</option>
	            		<option value="Sí">Sí</option>
	            		<option value="No">No</option>
	            		<option value="No lo sé/ No estoy seguro(a)">No lo sé/ No estoy seguro(a)</option>
	            	</select>
	        	</label>

            	<small class="error">Este campo es requerido.</small>
	        </div>


	        <div class="column small-8">
	        	<label class="text-right">
	            	Una cuenta de ahorros
				</label>
	        </div>
	        <div class="column small-4">
	        	<label for="">
	            	<select required  name="answer20" id="">
	            		<option value="">Elige una opción</option>
	            		<option value="Sí">Sí</option>
	            		<option value="No">No</option>
	            		<option value="No lo sé/ No estoy seguro(a)">No lo sé/ No estoy seguro(a)</option>
	            	</select>
	        	</label>

            	<small class="error">Este campo es requerido.</small>
	        </div>


	        <div class="column small-8">
	        	<label class="text-right">
	            	Una tarjeta de débito
				</label>
	        </div>
	        <div class="column small-4">
				<label for="">
	            	<select required  name="answer21" id="">
	            		<option value="">Elige una opción</option>
	            		<option value="Sí">Sí</option>
	            		<option value="No">No</option>
	            		<option value="No lo sé/ No estoy seguro(a)">No lo sé/ No estoy seguro(a)</option>
	            	</select>
				</label>

            	<small class="error">Este campo es requerido.</small>
	        </div>
	    </section>

        <div class="column">
          
          <button type="submit" class="button radius expand green tiny">Enviar</button>
        </div>

    </div>  

</section>
</form>

<script type="text/javascript">

var Form = {
	id	: "survey",
	url	: "",
	init	: function(){
		
		var me = this;
		
		$("#"+me.id+"-modal").find("a.alert").click(function(){
			$("#"+me.id+"-modal").foundation('reveal', 'close');
		});
		
		$("#"+me.id).on('valid', function(e){
			
			$.ajax({
				type	: "POST",
				url	: "./contactus/submit",
				data    : me.getValues(),
				//dataType: "json",
				success	: function() {
					$("#"+me.id+"-modal").foundation('reveal', 'open');
					$("#"+me.id)[0].reset();
				}
			});
		});
	},
	getValues : function()
	{
		var me = this;
		
		var $inputs = $("#"+me.id+' :input');
		
		var values = {};
		$inputs.each(function() {
			
			if(typeof $(this).attr("name") != "undefined")
				values[$(this).attr("name")] = $(this).val();
		});
		
		return values;
	}
};

Form.init();

</script>


<?
$this->load->view("footer");
?>