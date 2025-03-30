<?php

$idade = $_GET['idade'];

if (intval($idade) >= 18) {
    echo  "🚧 Aguarde ~ Ainda estamos construindo o Bar do José 🚧";
} else {
    echo "Você não é maior de idade ~ Você está proibido de entrar!";
}