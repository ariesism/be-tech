# 關於
### 環境需求
這次使用Laravel最新版進行開發，必須環境為：
- laravel 10
- php 8.1^


### 做法
- 根據題目所示，利用安裝sanctum進行api開發
- 利用ORM中polymorphic relationship將圖片上傳解藕
- 回傳api格式由resource設定一致性回應方式
- 在PostController中，用apiResource統一管理，但根據題目僅開啟index, store
- 資料驗證，另外由Requests進行分門別類的驗證
- 圖片上傳是存於public中，可以對外查看
- 必須**登入**才能新增貼文和查看全部貼文的api
    ```
    {{base_url}}/api/login

    POST request body
    {
        "username": "owen",
        "password": "password"
    }
    ```
- 建立seeder，利用faker建立10筆使用者資料
    - 固定使用者為
        'username' => 'owen',
        'password' => bcrypt('password'),  // 登入密碼為 password，加密後存入資料庫
        'email' => 'owen@example.com',
- 修改預設了的user table schema，亦修改了user model中 **protected $fillable**中的賦值與資料表一致性
- 新增model，建立必要設定及關聯
    - post
    - image
- 建立trait讓上傳圖片可以變成單一模組


### 步驟
請先建立資料庫，並將資料庫相關連線加入至.env中
例如：
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=be-tech
DB_USERNAME=root
DB_PASSWORD=root
```
---
在terminal中依序輸入下列步驟
```
composer install --no-dev
php artisan migrate --seed
php artisan optimize
```