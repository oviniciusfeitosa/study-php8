<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class PessoaController extends Controller
{
    public function exibirListaRandomica($quantidadePessoas)
    {
        $faker = Faker::create();
        $listaPessoas = [];
        for ($x = 0; $x < $quantidadePessoas; $x++) {
            $listaPessoas[$x]['nome'] = $faker->firstName;
            $listaPessoas[$x]['sobrenome'] = $faker->lastName;
            $listaPessoas[$x]['telefone'] = $faker->phoneNumber;
        }
        return $listaPessoas;
    }
}
