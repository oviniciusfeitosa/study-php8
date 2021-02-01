<?php

use App\Models\Pessoa;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class PessoaTest extends TestCase
{
    private function _verificarPreenchimento(Pessoa $pessoa)
    {
        $this->assertNotEmpty($pessoa->nome);
        $this->assertNotEmpty($pessoa->sobrenome);
        $this->assertNotEmpty($pessoa->telefone);
    }

    public function testExibirListaRandomica()
    {
        $this->get('/pessoa/exibirListaRandomica/4');
        $resultado = $this->response->json();
        $this->assertCount(4, $resultado);
        foreach($resultado as $pessoa) {
            $this->_verificarPreenchimento(new Pessoa($pessoa));
        }
    }


}
