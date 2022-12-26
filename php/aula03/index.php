<?php

require "./Client.php";
require "./ClientLegalPerson.php";
require "./ClientPhysicalPerson.php";

$client = new Client();

$client->logradouro = "Rua Vidal Zonta";
$client->bairro = "Guaraituba";

$addressClient = $client->getAddress();

echo $addressClient;

echo "<hr/>";

$clientPF = new ClientPhysicalPerson();
$clientPF->nome = "Lucas Mendes";
$clientPF->cpf = 10046021973;
$clientPF->logradouro = "Avenida Coimbra";
$clientPF->bairro = "Guaraituba";

$infoClientPF = $clientPF->getInfoByPhysicalPerson();

echo $infoClientPF;

echo "<hr/>";

$clientPJ = new ClientLegalPerson();
$clientPJ->nomeFantasia = "Lucas Mendes S/A";
$clientPJ->cnpj = 545423234646466;
$clientPJ->logradouro = "Avenida Guanabares";
$clientPJ->bairro = "Qualquer lugar de RJ";

$infoClientPJ = $clientPJ->getInfoByLegalPerson();

echo $infoClientPJ;
