# laravel_bbs

## 使用技術
- PHP 7.3.9
- Laravel Framework 6.2.0
- MySQL 5.7.26
- BootStrap

## 主な機能
- 記事一覧表示機能
- 記事詳細表示機能
- 記事投稿機能
- ページネーション機能

## URL構造
|メソッド|URL|説明|
|:-----------|:------------|:------------|
|GET,HEAD|/|トップページ。投稿の一覧を表示する。|
|POST|posts|投稿を追加する。|
|GET,HEAD|posts/create|投稿の作成ページを表示する。|
|GET,HEAD|posts/{post}|投稿の詳細を表示する。|
|PUT,PATCH|posts/{post}|投稿を編集する。|
|DELETE|posts/{post}|投稿を削除する。|
|GET,HEAD|posts/{post}/edit|投稿の編集ページを表示する。|
|POST|comments|投稿にコメントを追加する。|

## 課題
- 画像アップロード機能を追加する
- ログイン機能の実装

## 参考
- Laravelチュートリアル：https://blog.hiroyuki90.com/articles/laravel-bbs/
- マークダウン記法：https://qiita.com/Minalinsky_1911/items/b684cfabe0f2fde0c67b
- LaravelでRoute::resourceを使うときに気をつけること：https://qiita.com/sympe/items/9297f41d5f7a9d91aa11
- ローカルのプロジェクトをGitHubへアップロードする方法：https://qiita.com/devzip8/items/28ac253ea295ad6c2b73
