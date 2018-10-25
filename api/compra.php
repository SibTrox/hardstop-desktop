<?php
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if (isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] == 'application/json')
    {
        $requestDataJSON = file_get_contents('php://input');
        $parametros = json_decode($requestDataJSON, TRUE);
    } else {
        $parametros = $_POST;
    }
    $fecha = date('y/m/d');
    $user=1;
    $mysqli = new mysqli("localhost", "id7114740_pingo", "pichula", "id7114740_hardstop");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    // validar el texto que llega para prevenir inyecciones de sql
    // $mysqli->error
    if (isset($parametros['precio']))
    {
        $insertQuery = "INSERT INTO ventas (fecha,total,id_usuario) VALUES ('$fecha','".$parametros['precio']."','$user')";
       

        if($mysqli->query($insertQuery) === TRUE)
        {
            $respuesta = [
                "status"=>200,
                "response" => 'ok'
            ];
            echo json_encode($respuesta);
        }else {
            $respuesta = [
                "status"=>200,
                "response" => 'nok'
            ];
            echo json_encode($respuesta);
        }
    } else {
        $respuesta = [
            "status"=>200,
            "response" => 'nok, verificar formulario'
        ];
        echo json_encode($respuesta);
    }
    
}