<?php

//Inicia la app


require("modelos/usuarios.php");
require("modelos/noticias.php");
require("include/funciones.php");



if (isset($_GET['seccion'])) {
	
	// obtengo el valor del parámetro pasado por la URL 
		$seccion = $_GET['seccion'];

		if ($seccion == "usuarios"){

			//mostrar información del módulo usuariops
			print "Seccion Usuarios<br>";
			//Evaluamos OPERACION

			if (isset($_GET['operacion'])) {

				$operacion = $_GET['operacion'];

				switch ($operacion) {
					//CRUD
					//Crear un usuario --> UsuarioCrear()
					case 'crear':
						UsuarioCreate();
						break;

					//Leer un usuario --> UsuarioLeer($id)
					case 'leer':
						UsuarioRead($_GET['id']);
						break;
					//Actualizar un usuario --> UsuarioActualizar($id)
					case 'actualizar':

						UsuarioUpdate($_GET['id']);
						break;
					//Borrar un usuario --> UsuarioBorrar($id)
					case 'borrar':

						UsuarioDelete($_GET['id']);
						break;

					default: 

						echo "ERROR...Revisa que has escrito bien los parámetros de la URL";
				}
			} else {
					echo "<br>Introduce Parámetros en la URL (correctamente)<br>";
					//Mostramos listado de usuarios
					ListadoUsuarios();
			}

		} elseif ($seccion == "noticias") {

			print "Seccion Noticias<br>";
						//Evaluamos OPERACION

			if (isset($_GET['operacion'])) {

				$operacion = $_GET['operacion'];

				switch ($operacion) {
					//CRUD
					//Crear un usuario --> UsuarioCrear()
					case 'crear':

						NoticiaCreate();
						break;

					//Leer un usuario --> UsuarioLeer($id)
						case 'leer':
						NoticiaRead($_GET['id']);
						break;

					//Actualizar un usuario --> UsuarioActualizar($id)
					case 'actualizar':
						NoticiaUpdate($_GET['id']);
						break;
					//Borrar un usuario --> UsuarioBorrar($id)
					case 'borrar':

						NoticiaDelete($_GET['id']);
						break;

					default: 

						echo "ERROR...Revisa que has escrito bien los parámetros de la URL";
				}
			}	else {
					echo "<br>Introduce Parámetros en la URL (correctamente)<br>";
					//Mostramos listado de usuarios
					ListadoNoticias();

			}
		}

		else { 

			print "ERROR.. SECCION NO RECONOCIDA";

	}

}//IF DE LA SECCION

//En caso de que no obtengamos valores por la url mostramos que la escriba correctamente
else { 

	//Mostrar el Index (homepage)
	Print "Página Inicial";

}

?>