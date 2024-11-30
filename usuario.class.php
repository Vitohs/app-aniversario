<?php
class Usuario
{
    public function __construct(private int $id = 0, private string $nome, private int $presenca = 0){}
    //gets e sets
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPresenca()
    {
        return $this->presenca;
    }
    public function setPresenca($presenca)
    {
        $this->presenca = $presenca;
    }
}
