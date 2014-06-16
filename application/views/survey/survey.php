<?
$this->load->view("header");
?>

<form id="survey" data-abide="ajax">
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
	            	<input type="radio" required  name="educacion" value="No terminé la escuela elemental"> No terminé la escuela elemental
	        	</label>

	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="educacion" value="Terminé la escuela elemental"> Terminé la escuela elemental
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="educacion" value="No terminé la secundaria"> No terminé la secundaria
	            </label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="educacion" value="Terminé la secundaria"> Terminé la secundaria
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="educacion" value="Cursé estudios universitarios, escuela vocacional o técnica pero no tengo un"> Cursé estudios universitarios, escuela vocacional o técnica pero no tengo un

diploma
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="educacion" value="Diploma universitario, vocacional o técnico"> Diploma universitario, vocacional o técnico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="educacion" value="Posgrado (Máster, Doctorado o Certificación profesional equivalente)"> Posgrado (Máster, Doctorado o Certificación profesional equivalente)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="educacion" value="No estoy seguro(a)/No lo sé/Prefiero no responder"> No estoy seguro(a)/No lo sé/Prefiero no responder
				</label>	        
	        </div>
		</section>



		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Cuál es la profesión o trabajo de la persona que aporta el principal ingreso de este hogar?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="profesion" value="Trabajos menores ocasionales e informales (lavado, aseo, servicio doméstico ocasional, “pololos”, cuidador de autos, limosna)."> Trabajos menores ocasionales e informales (lavado, aseo, servicio doméstico 

ocasional, “pololos”, cuidador de autos, limosna).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="profesion" value="Oficio menor, obrero no calificado, jornalero, servicio doméstico con contrato"> Oficio menor, obrero no calificado, jornalero, servicio doméstico con contrato
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="profesion" value="Obrero calificado, capataz, junior, micro empresario (kiosco, taxi, comercio menor, ambulante)."> Obrero calificado, capataz, junior, micro empresario (kiosco, taxi, comercio menor, ambulante).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="profesion" value="Empleado administrativo medio y bajo, vendedor, secretaria, jefe de sección. Técnico especializado. Profesional independiente de carreras técnicas (contador, analista de sistemas, diseñador, músico). Profesor Primario o Secundario"> Empleado administrativo medio y bajo, vendedor, secretaria, jefe de sección. Técnico especializado. Profesional independiente de carreras técnicas (contador, analista de sistemas, diseñador, músico). Profesor Primario o Secundario
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="profesion" value="Ejecutivo medio (gerente, sub-gerente), gerente general de empresa media o pequeña. Profesional independiente de carreras tradicionales (abogado, médico, arquitecto, ingeniero, agrónomo)."> Ejecutivo medio (gerente, sub-gerente), gerente general de empresa media o pequeña. Profesional independiente de carreras tradicionales (abogado, médico, arquitecto, ingeniero, agrónomo).
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="profesion" value="Alto ejecutivo (gerente general) de empresa grande. Directores de grandes empresas. Empresarios propietarios de empresas medianas y grandes. Profesionales independientes de gran prestigio"> Alto ejecutivo (gerente general) de empresa grande. Directores de grandes empresas. Empresarios propietarios de empresas medianas y grandes. Profesionales independientes de gran prestigio
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="profesion" value="No estoy seguro(a)/No lo sé/Prefiero no responder"> No estoy seguro(a)/No lo sé/Prefiero no responder
				</label>	        
	        </div>

		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿En qué país vive actualmente?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="text" name="pais">
				</label>
	        </div>


		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿A qué grupo etario pertenece?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="Menor de 19 años"> Menor de 19 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="19 a 25 años"> 19 a 25 años
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="26 a 30 años"> 26 a 30 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="31 a 35 años"> 31 a 35 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="36 a 40 años"> 36 a 40 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="41 a 46 años"> 41 a 46 años 
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="47 a 50 años"> 47 a 50 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="51 a 55 años"> 51 a 55 años
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="56 años o mayor"> 56 años o mayor
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="edad" value="56 años o mayor"> Prefiero no responder
				</label>	        
	        </div>


		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Es usted hombre o mujer?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="sexo" value="Hombre"> Hombre
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="sexo" value="Mujer"> Mujer
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="sexo" value="Prefiero no responder"> Prefiero no responder
				</label>
	        </div>


		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Cuál es situación laboral actual? </p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="situacion_laboral" value="Empleado a tiempo complete"> Empleado a tiempo complete
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="situacion_laboral" value="Empleado a tiempo parcial"> Empleado a tiempo parcial
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="situacion_laboral" value="Autónomo"> Autónomo
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="situacion_laboral" value="Administración del hogar/ama de casa"> Administración del hogar/ama de casa
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="situacion_laboral" value="Estudiante"> Estudiante
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="situacion_laboral" value="Retirado/a"> Retirado/a
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="situacion_laboral" value="Desempleado/a"> Desempleado/a
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="situacion_laboral" value="Prefiero no responder"> Prefiero no responder
				</label>
	        </div>

		</section>



		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Tiene acceso a Internet de alta velocidad?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="internet" value="Si"> Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="internet" value="No"> No
	        	</label>
	        </div>

		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">¿Usa Internet para alguna de las siguientes actividades?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="actividad_internet" value="Hacer compras"> Hacer compras
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="actividad_internet" value="Pagar facturas"> Pagar facturas
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="actividad_internet" value="Transferir dinero a alguien dentro de mi país"> Transferir dinero a alguien dentro de mi país
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="actividad_internet" value="Transferir dinero a alguien en otro país"> Transferir dinero a alguien en otro país
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Considera que debe aprender nuevas habilidades para poder seguir avanzando profesionalmente?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="aprender_habilidades" value="Definitivamente Si"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="aprender_habilidades" value="Muy probable"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="aprender_habilidades" value="Probable"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="aprender_habilidades" value="Poco probable"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="aprender_habilidades" value="Definitivamente no"> Definitivamente no
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Considera que en algún momento tendrá que redefinir drásticamente sus habilidades profesionales para poder maximizar sus probabilidades de conseguir empleo?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="redefinir_habilidades" value="Definitivamente Si"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="redefinir_habilidades" value="Muy probable"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="redefinir_habilidades" value="Probable"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="redefinir_habilidades" value="Poco probable"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="redefinir_habilidades" value="Definitivamente no"> Definitivamente no
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Cuales de las siguientes areas le gustaría estudiar?  Por favor marque todas las que le interesen.</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Diseño y desarrollo de paginas Web"> Diseño y desarrollo de paginas Web
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Programacion en Java"> Programacion en Java
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Diseño y desarrollo de aplicaciones Android / IOS"> Diseño y desarrollo de aplicaciones Android / IOS
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Administracion de Redes (e.g., Cisco)"> Administracion de Redes (e.g., Cisco)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Programacion SQL"> Programacion SQL
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Programacion PHP/Perl"> Programacion PHP/Perl
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Diseño grafico"> Diseño grafico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Control de calidad / Six Sigma"> Control de calidad / Six Sigma
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Administracion de Proyectos (Project Management)"> Administracion de Proyectos (Project Management)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Marketing Digital y Generacion de Demanda (User Acquisition)"> Marketing Digital y Generacion de Demanda (User Acquisition)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Social Media"> Social Media
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Manejo y Administracion de Contratos"> Manejo y Administracion de Contratos
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Desarrollo y Gerencia de Productos en línea"> Desarrollo y Gerencia de Productos en línea
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Como ser un emprendedor (Entrepreunership) "> Como ser un emprendedor (Entrepreunership) 
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Como usar Excel, Powerpoint y Microsoftword"> Como usar Excel, Powerpoint y Microsoftword
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Aprender a hablar en Ingles"> Aprender a hablar en Ingles
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Analisis de datos (Data Science)"> Analisis de datos (Data Science)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="checkbox"  name="areas_estudiar" value="Ninguna de estas opciones me interesa"> Ninguna de estas opciones me interesa
	        	</label>
	        </div>
		</section>

		<section class="question">
	        <div class="column small-12">
	            <p class="title">Cual de estos programas te interesa lo suficiente como para dedircarle 12 meses de estudio y pagar aproximadamente $70 mensuales por el programa?  Al completar el curso obtendrías un certificado de graduación.  Por favor escoge solo una de las siguientes opciones.</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Diseño y desarrollo de paginas Web"> Diseño y desarrollo de paginas Web
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Programacion en Java"> Programacion en Java
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Diseño y desarrollo de aplicaciones Android / IOS"> Diseño y desarrollo de aplicaciones Android / IOS
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Administracion de Redes (e.g., Cisco)"> Administracion de Redes (e.g., Cisco)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Programacion SQL"> Programacion SQL
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Programacion PHP/Perl"> Programacion PHP/Perl
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Diseño grafico"> Diseño grafico
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Control de calidad / Six Sigma"> Control de calidad / Six Sigma
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Administracion de Proyectos (Project Management)"> Administracion de Proyectos (Project Management)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Marketing Digital y Generacion de Demanda (User Acquisition)"> Marketing Digital y Generacion de Demanda (User Acquisition)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Social Media"> Social Media
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Manejo y Administracion de Contratos"> Manejo y Administracion de Contratos
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Desarrollo y Gerencia de Productos en línea"> Desarrollo y Gerencia de Productos en línea
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Como ser un emprendedor (Entrepreunership) "> Como ser un emprendedor (Entrepreunership) 
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Como usar Excel, Powerpoint y Microsoftword"> Como usar Excel, Powerpoint y Microsoftword
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Aprender a hablar en Ingles"> Aprender a hablar en Ingles
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Analisis de datos (Data Science)"> Analisis de datos (Data Science)
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="programas_interesa" value="Ninguna de estas opciones me interesa"> Ninguna de estas opciones me interesa
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Estarias dispuesto a estudiar este programa _______ en ingles</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="ingles" value="Si, dispuesto a estudiar en ingles"> Si, dispuesto a estudiar en ingles
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="ingles" value="Solo lo estudiaría si el programa fuera en español"> Solo lo estudiaría si el programa fuera en español
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Estarias dispuesto a estudiar este programa _____ por internet, con acceso a contenido multimedia y videos en línea y con acceso en línea a instructores en vivo que te pueden contestar por chat a cualquier duda que tengas?</p>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="estudiar_internet" value="Definitivamente Si"> Definitivamente Si
				</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="estudiar_internet" value="Muy probable"> Muy probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="estudiar_internet" value="Probable"> Probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="estudiar_internet" value="Poco probable"> Poco probable
	        	</label>
	        </div>
	        <div class="column small-12">
	        	<label>
	            	<input type="radio" required  name="estudiar_internet" value="Definitivamente no"> Definitivamente no
	        	</label>
	        </div>
		</section>


		<section class="question">
	        <div class="column small-12">
	            <p class="title">Existe algún otro tema que te interese estudiar que no hayamos cubierto en esta encuesta?</p>
	        </div>
	        <div class="column small-12">
	        	<label class="text-right">
	            	<textarea name="otro_tema_estudiar" id="" cols="30" rows="5"></textarea>
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
	            	<select required  name="tarjet_credito_local" id="">
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
	            	<select required  name="tarjet_credito_dolares" id="">
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
	            	<select required  name="tarjet_credito_internacionales" id="">
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
	            	<select required  name="tarjet_credito_internacionales_mensual" id="">
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
	            	<select required  name="cheques" id="">
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
	            	<select required  name="cuenta_ahorros" id="">
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
	            	<select required  name="tarjeta_debito" id="">
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
				url	: "./survey/save",
				data    : me.getValues(),
				//dataType: "json",
				success	: function() {
					$("#"+me.id+"-modal").foundation('reveal', 'open');
					$("#"+me.id)[0].reset();
					//document.location.href ="./survey/thankyou"
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