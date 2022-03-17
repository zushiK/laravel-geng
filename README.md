# ステッチDXプロジェクト バックエンド
APIサーバーとして利用するため、jsonで返信する以外の機構は取り外してあります。
https://github.com/SAI-DEV01/stitch-dx-back

## 機能要件
- PHP > 8.0
- MYSQL > 8.0
- redis > 6.0


## 環境構築
このプロジェクトではdockerを利用します。laravelに既存で用意されているlaravel sailを利用します。
あらかじめdockerを利用できる環境を用意してください。

sailの詳細は[こちら](https://readouble.com/laravel/8.x/ja/sail.html)をご覧ください。

### envファイルの用意
.env.exampleファイルを.envとしてコピーしてください。

### composerインストール
依存パッケージのインストールを行います。このプロジェクトではPHP8.0以上が必須です。
ローカルでバージョン要件が満たされている場合、ローカルから`composer install`コマンドを打つことでインストールを行うことができます。

バージョンを満たしていない場合などで、dockerをコンテナを一時的に立ち上げて起動する場合は以下のコマンドを実行してください。
```shell
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Package manifest generated successfully.と出ていれば正常終了です。

### npmインストール
```shell
./vendor/bin/sail npm install
```

### dockerコンテナの立ち上げ
```shell
./vendor/bin/sail up -d
```

### 初回ビルド&DBマイグレーション
```
./vendor/bin/sail npm run dev
./vendor/bin/sail php artisan migrate
```
---