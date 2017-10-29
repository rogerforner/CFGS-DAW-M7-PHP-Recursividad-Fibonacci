<?php
//#######################################################################
//############################################################## "ÍNDICE"
//***********************************************************************
//# *********************************************************************
//# Funciones
//## error()
//## factorial()
//# Valores
//# Tratar errores y Resultado
//# *********************************************************************

//# Funciones
//# ---------------------------------------------------------------------
//## error()
//# ---------------------------------------------------------------------
function error() {
  echo "Solo se aceptan números positivos.";
}

//## factorial()
//#
//# La siguiente función es recursiva porqué dentro de ésta se llama a
//# ella misma para poder obtener la serie de fibonacci.
//# ---------------------------------------------------------------------
function fibonacci($numero) {
  if ($numero === 0) { //0, ...
		return 0;

	} elseif ($numero === 1 || $numero === 2) { //0, 1, 1, 2, ...
		return 1;

	} else {  //0, 1, 1, 2, n
		return fibonacci($numero - 1) + fibonacci($numero - 2);
	}
}

//# Valores
//# ---------------------------------------------------------------------
//Obtener los valores introducidos en los campos del formulario.
$n = $_POST['numero']; //name="numero"


//# Tratar errores y Resultado
//# ---------------------------------------------------------------------
//Comprobaremos si el valor proporcionado es un número y además positivo.
//Si es un número procederemos a calcular la serie de Fibonacci.
//Si no es un número (positivo) enviaremos un mensaje de error.
if (!is_numeric($n) || $n < 0) {
  echo error();

} else { //Resultado
  echo "La serie de Fibonacci es " . fibonacci($n);
}
?>
