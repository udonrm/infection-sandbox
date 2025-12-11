# Infection サンドボックス

PHPのミューテーションテストツール [Infection](https://infection.github.io/) を試すためのサンプルプロジェクト。

## セットアップ

```bash
composer install
```

## テスト実行

```bash
./vendor/bin/phpunit
```

## Infection実行

```bash
./vendor/bin/infection
```

## プロジェクト構成

- `src/Calculator.php` - テスト対象のクラス
- `tests/CalculatorTest.php` - PHPUnitテスト（DataProvider使用）
- `infection.json5` - Infection設定ファイル
