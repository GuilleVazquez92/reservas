<?php 

function parsearDuracionEstimada( $str ) {

	//string donde buscar el match
	// $str = "PT24H15M";

	//patron que se desea buscar
	$patternHora = "/(\d+)H/";
	$patternMinuto = "/(\d+)M/";

	//buscar la coincidencia
	preg_match($patternHora, $str, $matchesHora);
	preg_match($patternMinuto, $str, $matchesMinuto);

	//imprimir
	$hora = isset($matchesHora[0]) ? substr($matchesHora[0], 0, -1) : "";
	$minuto = isset($matchesMinuto[0]) ? (intval(substr($matchesMinuto[0], 0, -1)) < 10 ? "0".substr($matchesMinuto[0], 0, -1) : substr($matchesMinuto[0], 0, -1)) : null;

	return isset($minuto) ? "$hora:$minuto" : $hora . "H";

}

?>