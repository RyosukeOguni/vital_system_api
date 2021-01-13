# シロクマ体調管理システム

利用者(users)の診断結果を、診断記録(medicals)に書き込むシステム。
診断記録には、記録日の天候状態や気温などを含む天候記録(weather_records)が紐づけられる。

## 設計資料

  - [画面設計](https://docs.google.com/spreadsheets/d/1Dpr1UnTkSQ4foVOOafWeTkwmj__GR3jDHQJB0EJjQD8/edit#gid=355284150)
  - [DB設計](https://docs.google.com/spreadsheets/d/1Dpr1UnTkSQ4foVOOafWeTkwmj__GR3jDHQJB0EJjQD8/edit#gid=355284150)
  - [ER図](https://app.diagrams.net/#G1uFSoukUeDH5xBLUCRw7Xq_U4bZjIn8k6)
  - [APIエンドポイント設計](https://docs.google.com/document/d/1nzwOOMiTEX0H6Al8D5FQha6ZRQWBpHxF127H54lwwH8/edit#heading=h.ufngolqh9dqd)
  - [APIレスポンス応答例](https://docs.google.com/document/d/1xhV_T4maI_YK_tYLV0B6tEElpyJqqwXdqqCGvDUCdVc/edit#heading=h.ufngolqh9dqd)
  - [開発スケジュール](https://docs.google.com/spreadsheets/d/1pktmIHOrpgIP3QI_BYsrIrVsLGvIot12vGroCmr9JU0/edit#gid=0)

## 仕様／ライブラリ

* laravel/lumen-framework 8.2.1
* flipbox/lumen-generator 8.2.0
* mnabialek/laravel-sql-logger 2.2.8

## システム構築方法

### laravel/lumenインストール

▼installコマンド

```
composer create-project --prefer-dist laravel/lumen vital_management_system
```

▼bootstrap\app.php

```php
//ファサードとエロケントのコメントアウトを解除
$app->withFacades();
$app->withEloquent();
```

### artisanコマンドを追加（flipbox/lumen-generator）

▼installコマンド

```
composer require flipbox/lumen-generator
```

▼bootstrap\app.php

```php
//サービスプロバイダを追加
$app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
```

### クエリログを記録（mnabialek/laravel-sql-logger）

▼installコマンド

```
composer require mnabialek/laravel-sql-logger --dev
```

▼bootstrap\app.php

```php
//サービスプロバイダを追加
$app->register(Mnabialek\LaravelSqlLogger\Providers\ServiceProvider::class);
```

## システム導入方法

DEMOの実行方法など、"hoge"の基本的な使い方を説明する

```bash
git clone https://github.com/hoge/~
cd examples
python demo.py
```

## システム運用方法



## 作成者情報

* 作成者：小国亮介
* 所属：株式会社B-FORME
* E-mail：oguni@b-forme.net
