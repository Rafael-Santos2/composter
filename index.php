<?php
    require 'vendor/autoload.php';
    $faker = Faker\Factory::create('pt_BR');

    echo "Nome: " . $faker->name() . "<br> <br>";
    echo "email: " . $faker->email() . "<br> <br>";
    echo "endereço: " . $faker->address();
?>