<?php

require_once "conexion.php";

class ModeloAlmacenes {

  /* ========== INGRESAR ALMACÉN ========== */
  static public function mdlIngresarAlmacen($tabla, $datos) {
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, direccion, fecha_creacion) VALUES (:nombre, :direccion, NOW())");

    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);

    if ($stmt->execute()) {
      return "ok";
    } else {
      return "error";
    }

    $stmt = null;
  }

  /* ========== MOSTRAR ALMACENES ========== */
  static public function mdlMostrarAlmacenes($tabla) {
    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");
    $stmt->execute();
    return $stmt->fetchAll();
  }
}
