# swagger

## 利用ライブラリ

**L5-Swagger**
Swagger-php swagger-uiを適応したラッパーライブラリ

https://github.com/DarkaOnLine/L5-Swagger

## 設定
App\Http\Controllers\Swagger\Swaggerに基本設定があります。

次のコマンドで`/storage/api-docs/api-docs.json`が生成されます
```
$ php artisan l5-swagger:generate
```
http://localhost:8080/api/documentation
にアクセスすることでswagger-uiが立ち上がります。

.envファイル内で次の設定をすることで変更毎に自動生成を行うこともできます。\
ただしパフォーマンスに影響があります。
```
L5_SWAGGER_GENERATE_ALWAYS=false
```


## Swagger-php
https://zircote.github.io/swagger-php/
直接の利用したい場合、openapiコマンドを呼び出すことができます。
```
./vendor/bin/openapi --help
```


## 記述方法
Swagger-phpドキュメントのDoctrinアノテーションのコラムで例が見れます。
https://zircote.github.io/swagger-php/guide/annotations.html

書き方の参考として次のリンクを使用できます
https://github.com/zircote/swagger-php/tree/master/Examples/petstore-3.0

Swaggerのアーキテクチャに関しては、Swagger仕様定義を行なっている次のドキュメント
https://swagger.io/

設計規約 日本語文献
https://future-architect.github.io/articles/20200409/