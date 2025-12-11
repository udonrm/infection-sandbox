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

    /**
     * 数値の配列から統計情報を計算する
     * - sum: 合計
     * - average: 平均
     * - max: 最大値
     * - min: 最小値
     */
    public function calculateStats(array $numbers): array
    {
        if (empty($numbers)) {
            return [
                'sum' => 0,
                'average' => 0,
                'max' => 0,
                'min' => 0,
            ];
        }

        $sum = 0;
        $max = $numbers[0];
        $min = $numbers[0];

        foreach ($numbers as $number) {
            $sum += $number;
            if ($number > $max) {
                $max = $number;
            }
            if ($number < $min) {
                $min = $number;
            }
        }

        $average = $sum / count($numbers);

        return [
            'sum' => $sum,
            'average' => $average,
            'max' => $max,
            'min' => $min,
        ];
    }
}
