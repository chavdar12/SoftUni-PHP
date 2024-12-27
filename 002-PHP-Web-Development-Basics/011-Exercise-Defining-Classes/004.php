<?php

class Trainer
{
    private string $name;
    private int $badges;
    private array $pokemons;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->badges = 0;
        $this->pokemons = [];
    }

    public function catchPokemon(Pokemon $pokemon): void
    {
        $this->pokemons[$pokemon->getElement()][] = $pokemon;
    }

    public function recieveBadge(): void
    {
        $this->badges++;
    }

    public function hasPokemonsByElement(string $element): bool
    {
        return isset($this->pokemons[$element]) && count($this->pokemons[$element]) > 0;
    }

    public function hitPokemons(int $dmg): void
    {
        foreach ($this->pokemons as $type => $pokemonsByType) {
            foreach ($pokemonsByType as $key => $pokemon) {
                $pokemon->hit($dmg);
                if (!$pokemon->isAlive()) {
                    unset($this->pokemons[$type][$key]);
                }
            }
        }
    }

    public function __toString(): string
    {
        $pokemonCount = array_sum(array_map('count', $this->pokemons));
        return "{$this->name} {$this->badges} {$pokemonCount}";
    }

    public function getBadges(): int
    {
        return $this->badges;
    }
}

class Pokemon
{
    private string $name;
    private int $health;
    private string $element;

    public function __construct(string $name, int $health, string $element)
    {
        $this->name = $name;
        $this->health = $health;
        $this->element = $element;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getElement(): string
    {
        return $this->element;
    }

    public function isAlive(): bool
    {
        return $this->health > 0;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function hit(int $dmg): void
    {
        $this->health -= max(0, $dmg);
    }
}

$trainers = [];

$line = readline();
while ($line !== "Tournament") {
    list($trainerName, $pokemonName, $element, $health) = explode(" ", $line);
    if (!isset($trainers[$trainerName])) {
        $trainers[$trainerName] = new Trainer($trainerName);
    }
    $trainers[$trainerName]->catchPokemon(new Pokemon($pokemonName, (int)$health, $element));
    $line = readline();
}

$line = readline();
while ($line !== "End") {
    foreach ($trainers as $trainer) {
        if ($trainer->hasPokemonsByElement($line)) {
            $trainer->recieveBadge();
        } else {
            $trainer->hitPokemons(10);
        }
    }
    $line = readline();
}

uksort($trainers, function ($k1, $k2) use ($trainers) {
    return $trainers[$k2]->getBadges() <=> $trainers[$k1]->getBadges();
});

echo implode(PHP_EOL, $trainers);