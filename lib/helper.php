<?php

function crearUrl($modulo, $controlador, $accion, $parametros = false) {
    if ($parametros) {

        $cadenaParametros = "";

        foreach ($parametros as $key => $parametro) {
            $cadenaParametros .= "&$key=$parametro";
        }
        return "index.php?modulo=$modulo&controlador=$controlador&accion=$accion" . $cadenaParametros;
    } else {
        return "index.php?modulo=$modulo&controlador=$controlador&accion=$accion";
    }

}

function redirect($url) {
    echo "<script type='text/javascript'>window.location.href='$url'</script>";
}

?>