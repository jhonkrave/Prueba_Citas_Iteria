<?php

include_once('../lib/config/conexion.php');

class MasterModel extends Conexion{
    
    function insertar($sql){
        $respuesta = pg_query($this->getConn(), $sql);
        return $respuesta;
    }
    
    function select($sql){
        $respuesta = pg_query($this->getConn(), $sql);
        
        if ($respuesta) {
            $return = array();
            while ($row = pg_fetch_array($respuesta)) {
                $return[]=$row;
            }
        }

        return $return;
    }
    
    function find($sql){
        $respuesta = pg_query($this->getConn(), $sql);
        
        $return = false;
        if ($respuesta) {
            $return = array();
            while ($row =pg_fetch_array($respuesta)) {
                $return=$row;
            }
        }

        return $return;
    }
    
    function update($sql){
        $respuesta = pg_query($this->getConn(), $sql);
        return $respuesta;
    }
    
    function delete($sql){
        $respuesta = pg_query($this->getConn(), $sql);
        return $respuesta;
    }
}
