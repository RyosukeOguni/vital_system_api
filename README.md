# シロクマ体調管理システム

利用者(users)の診断結果を、診断記録(medicals)に書き込むシステム。
診断記録には、記録日の天候状態や気温などを含む天候記録(weather_records)が紐づけられる。

## １．設計資料

  - [画面設計](https://docs.google.com/drawings/d/1HRpf0FsIG2ihrmZNM-kWKNghog_lJaFbb94c3Ihc5AA/edit)
  - [DB設計](https://docs.google.com/spreadsheets/d/1Dpr1UnTkSQ4foVOOafWeTkwmj__GR3jDHQJB0EJjQD8/edit#gid=355284150)
  - [ER図](https://app.diagrams.net/#G1uFSoukUeDH5xBLUCRw7Xq_U4bZjIn8k6)
  - [APIエンドポイント設計](https://docs.google.com/document/d/1nzwOOMiTEX0H6Al8D5FQha6ZRQWBpHxF127H54lwwH8/edit#heading=h.ufngolqh9dqd)
  - [APIレスポンス応答例](https://docs.google.com/document/d/1xhV_T4maI_YK_tYLV0B6tEElpyJqqwXdqqCGvDUCdVc/edit#heading=h.ufngolqh9dqd)
  - [開発スケジュール](https://docs.google.com/spreadsheets/d/1pktmIHOrpgIP3QI_BYsrIrVsLGvIot12vGroCmr9JU0/edit#gid=0)

## ２．使用API
### 2-1.内部API
* [体調管理システム](http://localhost:8000)
### 2-2.外部API
* [OpenWeatherMap](https://openweathermap.org/api)

## ３．使用ライブラリ

* laravel/lumen-framework 8.2.1
* flipbox/lumen-generator 8.2.0
* mnabialek/laravel-sql-logger 2.2.8

## ４．ライブラリ導入手順
<details>
<summary><u>4-1. lumenインストール（laravel/lumen-framework）</u></summary>
<br>

**> installコマンド**

```
composer create-project --prefer-dist laravel/lumen vital_management_system
```

**> bootstrap\app.php**

```php
//ファサードとエロケントのコメントアウトを解除
$app->withFacades();
$app->withEloquent();
```
<br>
</details>

<details>
<summary><u>4-2. artisanコマンドを追加（flipbox/lumen-generator）</u></summary>
<br>

**> installコマンド**

```
composer require flipbox/lumen-generator
```

**> bootstrap\app.php**

```php
//サービスプロバイダを追加
$app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
```
<br>
</details>

<details>
<summary><u>4-3. クエリログを記録（mnabialek/laravel-sql-logger）</u></summary>
<br>

**> installコマンド**

```
composer require mnabialek/laravel-sql-logger --dev
```

**> .envに追記**

```
SQL_LOGGER_DIRECTORY="logs/sql"
SQL_LOGGER_USE_SECONDS=false
SQL_LOGGER_CONSOLE_SUFFIX=
SQL_LOGGER_LOG_EXTENSION=".sql"
SQL_LOGGER_ALL_QUERIES_ENABLED=true
SQL_LOGGER_ALL_QUERIES_OVERRIDE=false
SQL_LOGGER_ALL_QUERIES_PATTERN="#.*#i"
SQL_LOGGER_ALL_QUERIES_FILE_NAME="[Y-m-d]-log"
SQL_LOGGER_SLOW_QUERIES_ENABLED=true
SQL_LOGGER_SLOW_QUERIES_MIN_EXEC_TIME=100
SQL_LOGGER_SLOW_QUERIES_PATTERN="#.*#i"
SQL_LOGGER_SLOW_QUERIES_FILE_NAME="[Y-m-d]-slow-log"
SQL_LOGGER_FORMAT_NEW_LINES_TO_SPACES=false
SQL_LOGGER_FORMAT_ENTRY_FORMAT="/* [origin]\\n   Query [query_nr] - [datetime] [[query_time]] */\\n[query]\\n[separator]\\n"

```

**> bootstrap\app.php**

```php
//サービスプロバイダを追加
$app->register(Mnabialek\LaravelSqlLogger\Providers\ServiceProvider::class);
```
<br>
</details>


## ５．システム導入手順
<details>
<summary><u>5-1. システムのダウンロード</u></summary>
<br>

**> git cloneコマンド**

```
git clone https://github.com/b-forme-oguni/vital_management_system.git
```
<br>
</details>

<details>
<summary><u>5-2. データベース設定</u></summary>
<br>

**> .envのデータベース設定を編集**

```
DB_DATABASE=vital_management_system
DB_USERNAME=root
DB_PASSWORD=
```
<br>
</details>

## ６．システム運用方法
<details>
<summary><u>6-1. 利用者管理</u></summary>

- 6-1-1 利用者の登録
- 6-1-2 利用者情報の編集
- 6-1-3 利用者情報の削除
- 6-1-1 利用者の登録

</details>

<details>
<summary><u>6-2. 体調管理</u></summary>

- 6-2-1 体調の登録
- 6-2-2 体調の編集
- 6-2-3 利用者の月間体調表の出力

</details>

## ７．作成者情報

* 作成者：小国亮介
* 所属：株式会社B-FORME
* E-mail：oguni@b-forme.net
