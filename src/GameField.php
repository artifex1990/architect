<?php

class GameField
{
    private array $players;
    private array $enimies;

    public function __contruct(array $players)
    {
        $this->players = $players;
        $this->init();
    }

    private function init()
    {
        $this->enimies = (new GenerateEnemy2D())->generate();
    }
}