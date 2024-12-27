<?php
class Fourdoku {
    private $matrix;
    private $changed;

    public function __construct() {
        $this->changed = false;
        $this->init();
    }

    public function init(): void
    {
        $this->matrix = array_fill(0, 4, array_fill(0, 4, 0));
    }

    public function generate(): void
    {
        $this->fillDiagonal();
        $this->placeOne();
        $this->placeCandidates();
        $this->placeZeroes();

        $tries = 0;
        while ($this->changed && $tries < 10) {
            $tries++;
            $this->changed = false;
            $this->placeCandidates();
            $this->placeZeroes();
        }

        if ($tries >= 10) {
            $this->init();
            $this->generate();
        }
    }

    private function fillDiagonal(): void
    {
        $nums = [1, 2, 3, 4];
        for ($i = 0; $i < 4; $i++) {
            shuffle($nums);
            $this->matrix[$i][$i] = $nums[0];
        }
    }

    private function placeOne(): void
    {
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($this->matrix[$i][$j] == 0) {
                    $candidates = $this->getCandidates($i, $j);
                    if (count($candidates) == 1) {
                        $this->matrix[$i][$j] = $candidates[0];
                        $this->changed = true;
                    }
                }
            }
        }
    }

    private function placeCandidates(): void
    {
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($this->matrix[$i][$j] == 0) {
                    $candidates = $this->getCandidates($i, $j);
                    if (count($candidates) == 1) {
                        $this->matrix[$i][$j] = $candidates[0];
                        $this->changed = true;
                    }
                }
            }
        }
    }

    private function placeZeroes(): void
    {
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                if ($this->matrix[$i][$j] == 0) {
                    $candidates = $this->getCandidates($i, $j);
                    if (count($candidates) != 1) {
                        $this->matrix[$i][$j] = 0;
                    }
                }
            }
        }
    }

    private function getCandidates($row, $col): array
    {
        $candidates = [1, 2, 3, 4];
        for ($i = 0; $i < 4; $i++) {
            if (in_array($this->matrix[$row][$i], $candidates)) {
                unset($candidates[array_search($this->matrix[$row][$i], $candidates)]);
            }
            if (in_array($this->matrix[$i][$col], $candidates)) {
                unset($candidates[array_search($this->matrix[$i][$col], $candidates)]);
            }
        }
        return $candidates;
    }

    public function print(): void
    {
        echo "<table>";
        for ($i = 0; $i < 4; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 4; $j++) {
                echo "<td>" . ($this->matrix[$i][$j] == 0 ? "&nbsp;" : $this->matrix[$i][$j]) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>