<?php

function UsuarioCreate() {

	print "El usuario se está creando";
}

function UsuarioRead($a) {

	echo "Leyendo usuario con id= $a";
}

function UsuarioUpdate($a) {

	print "El usuario con id= $a se está actualizando";
}

function UsuarioDelete($a) {

	print "Borrando Usuario con id= $a";
}

function ListadoUsuarios() {

	print "<br>Id=1 Fernando Rodriguez fernandorodriguez@gmail.com<br>
		   <br>Id=2 Cholo Simeone cholosimeone@gmail.com<br>
		   <br>Id=3 Victor Sanchez victorsanchez@gmail.com<br>
		   <br>Id=4 Cristina Alvarez cristinarubia@gmail.com<br>
		   <br>Id=5 Maria Perez	mariaperez@gmail.com<br>";
}

?>