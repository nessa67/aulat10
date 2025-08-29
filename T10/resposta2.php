<?php
// Definindo a classe Torcedor
class Torcedor
{
    public $nome;
    public $time;
    public $idade;
    // Construtor para inicializar o objeto
    public function __construct($nome, $time, $idade)
    {
        $this->nome = $nome;
        $this->time = $time;
        $this->idade = $idade;
    }
    // Método para exibir informações
    public function exibir()
    {
        echo "Torcedor: {$this->nome} {$this->time} ({$this->idade})<br>";
    }
}
// Criando objetos (instâncias)
$Torcedor1 = new Torcedor("Vanessa", "Fluminense", "29");
$Torcedor2 = new Torcedor("Wellington", "Botafogo", "40");
$Torcedor3 = new Torcedor("Cristian", "Cruzeiro", idade: "33");

// Usando métodos
$Torcedor1->exibir();
$Torcedor2->exibir();
$Torcedor3->exibir();
