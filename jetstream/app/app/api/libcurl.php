<?php

//INICIA O CURL
$curl = curl_init($curl);

//HEADERS
$headers=[
    'Authorization: asdhkaui2 h32nhkbhkdbhi2s2gu32'
];

//POST
$post=[
    'id'=>'2131',
  'nome' =>'FRONHA',
  'local'  =>'berçario'
];
//JSON
$json=json_encode($post);

//DEFINE AS CONFIGURAÇÕES


curl_setopt_array($curl,[
    CURLOPT_URL   =>"http://localhost/github/IC-jet-admin/jetstream/app/app/api/example.php",
    CURLOPT_CUSTOMREQUEST =>'POST',
    CURLOPT_RETURNTRANSFER  =>true,
    CURLOPT_POSTFIELDS =>$json
]);


//EXECUTA A REQUISIÇÃO
$response=curl_exec($curl);

//FECHA A CONEXÃO
curl_close($curl);

//IMPRIME O RESPONSE DA REQUISIÇÃO

echo $response;