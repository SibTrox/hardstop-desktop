<?php
$resultado = NULL;
$parametros = NULL;


if ($_SERVER['REQUEST_METHOD'] == "GET")
{

    $parametros = $_GET;
    $mysqli = new mysqli("localhost", "id7114740_pingo", "pichula", "id7114740_hardstop");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if (isset($parametros['id_producto']))
    {
        $query = "SELECT * FROM productos WHERE id_producto=".$parametros['id_producto'];
        $resultado = $mysqli->query($query);
    } else {
        $query = "SELECT * FROM productos ORDER BY id_producto ASC";
        $resultado = $mysqli->query("SELECT * FROM productos ORDER BY id_producto ASC");
    }

    $data = [];
    if ($resultado->num_rows > 0)
    {
        while ($fila = $resultado->fetch_assoc())
        {
            $data[] = $fila;
        }

        $respuesta = [
            "status"=> 200,
            "response" => $data
        ];
        sleep(5);
        echo json_encode($respuesta);
    } else {
        $respuesta = [
            "status"=> 200,
            "response" => null
        ];
        echo json_encode($respuesta);
    }
    
}
?>