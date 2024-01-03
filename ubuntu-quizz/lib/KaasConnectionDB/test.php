<?php

include_once "config/config.php";
include_once "lib/kaasConnectionDB.php";

$bd = new KaasConnectionDB();

$dados = [
    ":id" => 10,
];

// INSERT VALUES
#$bd->insert("INSERT INTO clientes VALUES(0,'Carlos Avelino',DEFAULT,DEFAULT,DEFAULT,DEFAULT);");

// DELETE VALUES
#$bd->delete("DELETE FROM clientes WHERE id = :id;",$dados);

// UPDATE VALUES
#$bd->update("UPDATE clientes SET nome = 'Carlos Editado' WHERE id = :id;",$dados);

// FETCH VALUES
$result = $bd->select("SELECT * FROM clientes;");
echo "<pre>";
print_r($result);


