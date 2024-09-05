<?php

class Imc
{
    private $nome;
    private $peso;
    private $altura;
    private $classificacao;
    private $grau;
    private $imc;

    public function __construct()
    {
        $this->peso = 0;
        $this->altura = 0;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setImc();
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
        $this->setImc();
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getGrau()
    {
        return $this->grau;
    }

    public function getClassificacao()
    {
        return $this->classificacao;
    }

    private function setImc()
    {
        if ($this->peso != 0 && $this->altura != 0) {
            $imc = $this->imc($this->peso, $this->altura);
            $this->imc = $imc["imc"];
            $this->grau = $imc["grau"];
            $this->classificacao = $imc["classificacao"];
        }
    }

    private function imc($peso, $altura)
    {
        $imc = $peso / ($altura * $altura);
        if ($imc < 18.5) {
            $class = "MAGREZA";
            $grau = "0";
        } elseif ($imc < 24.9) {
            $class = "NORMAL";
            $grau = "0";
        } elseif ($imc < 29.9) {
            $class = "SOBREPESO";
            $grau = "I";
        } elseif ($imc < 39.9) {
            $class = "OBESIDADE";
            $grau = "II";
        } else {
            $class = "OBESIDADE GRAVE";
            $grau = "III";
        }
        return ["imc" => $imc, "classificacao" => $class, "grau" => $grau];
    }

    public function getInfo(){
        return $this->getNome() . " é classificado como: " . $this->getClassificacao() . " tem obesidade grau " . $this->getGrau();
    }
}