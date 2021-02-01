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
        $listaPessoas[0]['nome'] = $faker->firstName;
        $listaPessoas[0]['sobrenome'] = $faker->lastName;
        $listaPessoas[0]['telefone'] = $faker->phoneNumber;
        return $listaPessoas;
    }
}
