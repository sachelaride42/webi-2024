<?php

namespace App;

class UsuarioManager {
    private $usuarios = [];
    private $nextId = 1;

    public function create($nome, $email) {
        $usuario = new Usuario($this->nextId, $nome, $email);
        $this->usuarios[$this->nextId] = $usuario;
        $this->nextId++;
        return $usuario;
    }

    public function read() {
        return array_values($this->usuarios);
    }

    public function update($id, $nome, $email) {
        if (!isset($this->usuarios[$id])) {
            return null; // ou lançar uma exceção
        }
        
        $usuario = $this->usuarios[$id];
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        return $usuario;
    }

    public function delete($id) {
        unset($this->usuarios[$id]);
    }
}