# laravel_bbs

## 使用技術
- MySQL
- BootStrap
- Laravel Framework 6.2.0
- PHP 7.3.9

## 主な機能
- CRUD
- ページネーション

## URL構造
|メソッド|URL|説明|
|:-----------|------------:|:------------:|
|GET,HEAD|/|トップページ。投稿の一覧を表示する。|
|POST|posts|投稿を追加する。|
|GET,HEAD|posts/create|投稿の作成ページを表示する。|
|GET,HEAD|posts/{post}|投稿の詳細を表示する。|
|PUT,PATCH|posts/{post}|投稿を編集する。|
|DELETE|posts/{post}|投稿を削除する。|
|GET,HEAD|posts/{post}/edit|投稿の編集ページを表示する。|
|POST|comments|投稿にコメントを追加する。|

参考：
- https://blog.hiroyuki90.com/articles/laravel-bbs/
- https://qiita.com/Minalinsky_1911/items/b684cfabe0f2fde0c67b
