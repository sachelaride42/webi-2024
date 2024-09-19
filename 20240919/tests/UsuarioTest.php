<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Usuario;
use App\UsuarioManager;

class UsuarioTest extends TestCase {
    private $manager;

    protected function setUp(): void {
        $this->manager = new UsuarioManager();
    }

    public function testCreate() {
        $usuario = $this->manager->create('João', 'joao@example.com');
        $this->assertEquals(1, $usuario->getId(), 'Erro: ID do usuário não corresponde.');
        $this->assertEquals('João', $usuario->getNome(), 'Erro: Nome do usuário não corresponde.');
    }

    public function testRead() {
        $this->manager->create('João', 'joao@example.com');
        $this->manager->create('Maria', 'maria@example.com');
        $usuarios = $this->manager->read();
        $this->assertCount(2, $usuarios, 'Erro: Leitura de usuários falhou.');
    }

    public function testUpdate() {
        $this->manager->create('João', 'joao@example.com'); 
        $usuario = $this->manager->update(1, 'João Atualizado', 'joaoatualizado@example.com');
        $this->assertEquals('João Atualizado', $usuario->getNome(), 'Erro: Nome do usuário não foi atualizado.');
        $this->assertEquals('joaoatualizado@example.com', $usuario->getEmail(), 'Erro: Email do usuário não foi atualizado.');
    }

    public function testDelete() {
        $this->manager->create('João', 'joao@example.com'); 
        $this->manager->delete(1);
        $usuarios = $this->manager->read();
        $this->assertCount(0, $usuarios, 'Erro: Usuário não foi deletado.');
    }
}
