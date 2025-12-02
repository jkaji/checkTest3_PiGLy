# checkTest3_PiGLy
第３回確認テスト（PiGLy）の提出

環境構築
　Dockerの設定
　　ディレクトリの作成
　　Docker-compose.yml の作成
　　Nginx の設定
　　PHP の設定
　　MySQL の設定
　　docker compose up -d --build のコマンドでビルド
　Laravelの設定
　　PHPコンテナにログイン（docker compose exec php bash）
　　composerがインストールされていることを確認（composer -v）
　　Laravelのプロジェクトの作成（composer create-project "laravel/laravel=8.*" . --prefer-dist）
　　時間設定の修正
　　.envファイルの修正（.env環境変数を適宜変更）
　　viewファイルの作成
　　cssファイルの作成
　　APP_KEYの作成（php artisan key:generate）
　　マイグレーション（php artisan migrate）の実行
　　シーディング（php artisan db:seed）の実行
　　バリデーションの設定（フォームリクエストの作成）

　開発環境
　　管理画面：http://localhost/weight_logs
　　ログイン画面：http://localhost/login
　　phpMyAdmin: http://localhost:8080/

使用技術（実行環境）
　docker-compose.yml 3.8
　PHP 8.2
　Laravel 8
　MYSQL 8.0.26
　Composer 2.9.2
　nginx 1.21.1
   Fortify
URL
　開発環境: http://localhost/
　phpMyAdmin: http://localhost/8080/

ER図


ER図
