<?php

declare(strict_types=1);

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    /**
     * 指定範囲内の点数の人数を正しくカウントする
     */
    #[DataProvider('countScoresInRangeProvider')]
    public function testCountScoresInRange(array $scores, int $min, int $max, int $expected, string $description): void
    {
        $this->assertSame($expected, $this->calculator->countScoresInRange($scores, $min, $max), $description);
    }

    public static function countScoresInRangeProvider(): array
    {
        return [
            '65, 75の2人が範囲内' => [[55, 65, 75, 85, 95], 60, 80, 2, '65, 75の2人が範囲内'],
            '境界値を含む' => [[60, 70, 80], 60, 80, 3, '境界値を含む'],
            '範囲外' => [[50, 55, 59], 60, 80, 0, '範囲外'],
            '空配列' => [[], 60, 80, 0, '空配列'],
        ];
    }
}
