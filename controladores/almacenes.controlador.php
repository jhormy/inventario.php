<?php

class ControladorAlmacenes {

  /* ========== CREAR ALMACÉN ========== */
  public function ctrCrearAlmacen() {
    if (isset($_POST["nuevoNombreAlmacen"])) {

      $datos = array(
        "nombre" => $_POST["nuevoNombreAlmacen"],
        "direccion" => $_POST["nuevaDireccion"]
      );

      $respuesta = ModeloAlmacenes::mdlIngresarAlmacen("almacenes", $datos);

      if ($respuesta == "ok") {
        echo '<script>
          Swal.fire({
            icon: "success",
            title: "¡Almacén creado correctamente!",
            confirmButtonText: "Cerrar"
          }).then((result) => {
            if (result.isConfirmed) {
              window.location = "almacenes";
            }
          });
        </script>';
      }
    }
  }

  /* ========== MOSTRAR ALMACENES ========== */
  static public function ctrMostrarAlmacenes() {
    $tabla = "almacenes";
    return ModeloAlmacenes::mdlMostrarAlmacenes($tabla);
  }
}
