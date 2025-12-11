<?php

declare(strict_types=1);

namespace App;

class Calculator
{
    /**
     * テストの点数で指定範囲内の人数をカウント
     * 例: 60点以上80点以下の生徒が何人いるか
     */
    public function countScoresInRange(array $scores, int $min, int $max): int
    {
        $count = 0;
        foreach ($scores as $score) {
            if ($score >= $min && $score <= $max) {
                $count++;
            }
        }

        return $count;
    }
}
