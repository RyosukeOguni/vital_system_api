# 体調管理API

利用者(users)、バイタル記録(vitals)、天候記録(weather_records)を管理するWebAPI。

## １．設計資料

-   [DB設計](https://docs.google.com/spreadsheets/d/1Dpr1UnTkSQ4foVOOafWeTkwmj__GR3jDHQJB0EJjQD8/edit#gid=355284150)
-   [ER図](https://app.diagrams.net/#G1uFSoukUeDH5xBLUCRw7Xq_U4bZjIn8k6)
-   [APIエンドポイント設計](https://docs.google.com/document/d/1nzwOOMiTEX0H6Al8D5FQha6ZRQWBpHxF127H54lwwH8/edit#heading=h.ufngolqh9dqd)
-   [APIレスポンス応答例](https://docs.google.com/document/d/1xhV_T4maI_YK_tYLV0B6tEElpyJqqwXdqqCGvDUCdVc/edit#heading=h.ufngolqh9dqd)


## ２．使用ライブラリ

-   [laravel/lumen-framework 8.2.1](https://packagist.org/packages/laravel/lumen-framework)
    -   lumenフレームワーク
-   [flipbox/lumen-generator 8.2.0](https://packagist.org/packages/flipbox/lumen-generator)
    -   lumenにartisanコマンドを追加
-   [mnabialek/laravel-sql-logger 2.2.8](https://packagist.org/packages/mnabialek/laravel-sql-logger)
    -   クエリログを記録

## ３．API導入手順

<details>
<summary><u>3-1. 体調管理APIのダウンロード</u></summary>
<ol>
<li>
下記Gitコマンドを入力してGit hubからシステムをダウンロード

```
git clone https://github.com/b-forme-oguni/vital_management_system.git
```
</li>
<li>
生成された<b>"vital_management_system"</b>フォルダをカレントにして、ターミナルから下記コマンドを入力

```
composer install
```
</li>
<li>
<b>"vital_management_system"</b>フォルダ直下に、<b>"vendor"</b>フォルダが生成されれば完了
</li>
</ol>
</details>

<details>
<summary><u>3-2. データベース設定</u></summary>
<ol>
<li>
MySQLにデータベースを作成
</li>
<li>
<b>"vital_management_system"</b>フォルダ直下の<b>".env.example"</b>をコピー
</li>
<li>
コピーしたファイルを<b>".env"</b>にリネームして、下記箇所を変更

```
DB_DATABASE=作成したデータベース名
DB_USERNAME=root
DB_PASSWORD=
```
</li>
<li>
<b>"vital_management_system"</b>フォルダをカレントにして、ターミナルから下記コマンドを入力<br>データベースのマイグレーションとダミーデータの設定を行う

```
php artisan migrate --seed
```
</li>
</ol>

</details>

## ４．作成者情報

-   作成者：小国 亮介
-   所属：株式会社 B-FORME
-   E-mail：oguni@b-forme.net
