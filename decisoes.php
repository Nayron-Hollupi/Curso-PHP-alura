<?php


$idade = 12;
$pessoas = 3;

if($idade >= 18 ){
    echo "Você tem $idade anos. Pode entrar";

}

elseif($idade >=16 && $pessoas > 1 ){
 echo "MAior de 16 acompanhado pode entrar.";
}else{
    echo "Você só pode entrar se tiver mais de que  18 anos" . PHP_EOL;
echo "Você ainda tem $idade";
}
