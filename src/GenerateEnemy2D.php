<?php

class GenerateEnemy2D implements IGenerateEnemy
{
    private array $enemies = [];

    private const MAX_ENEMY = 10;

    public function generate(): array
    {
        for($enemyIndex = 0; $enemyIndex < self::MAX_ENEMY; $enemyIndex++) {
            $this->enemies[$enemyIndex] = new Enemy(new Point2($enemyIndex, 20));
        }

        return $this->enemies;
    }
}