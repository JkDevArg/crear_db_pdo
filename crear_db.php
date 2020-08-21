<?php
$host = "mysql:host=localhost";
$user = "usuario";
$pass = "passsword";
$db = new PDO($host, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

// Creamos la base de datos
$result=$db->query("CREATE DATABASE Nueva_DB");
if (!$result) {
    exit("No se ha podido crear la base de datos");
}

// Seleccionamos la base de datos
$result=$db->query("USE Nueva_DB");
if (!$result) {
    exit("No se ha podido seleccionar la base de datos");
}

// Creamos la tabla
$result=$db->query("CREATE TABLE nuevaTabla (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Nombre VARCHAR(30) NOT NULL,
        Apellido VARCHAR(30) NOT NULL
    )"
);
if (!$result) {
    exit("No se ha podido crear la tabla");
}

// Añadimos registros a la tabla
$db->query("INSERT INTO nuevaTabla (Nombre,Apellido) VALUES
    ('Steve', 'Real'),
    ('Jhon', 'Doe')"
);
