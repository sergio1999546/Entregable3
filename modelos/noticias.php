<?php

function NoticiaCreate() {

	print "El usuario se está creando";
}

function NoticiaRead($a) {

	echo "Leyendo usuario con id= $a";
}

function NoticiaUpdate($a) {

	print "El usuario con id= $a se está actualizando";
}

function NoticiaDelete($a) {

	print "Borrando Usuario con id= $a";
}

function ListadoNoticias() {

	print "<br>1 Muere Fernando<br>
		   <br>2 Muere Pedro<br>
		   <br>3 Gana Real Madrid<br>
		   <br>4 Victoria Vox<br>
		   <br>5 Robo Valencia<br>";
}

?>