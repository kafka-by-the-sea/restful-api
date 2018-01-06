## 美佳數位媒體有限公司 - Laravel 實作考題
* 作答時間:約9個小時，含午休、中餐，完成目前進度
## 考題要求
### (已完成) 
1. 使用 laravel 5.3 或 5.5
### (已完成) 
2. 利用 migration 建立 db schema(資料庫類型不限)
### (已完成：但沒驗證)
3. 使用排程每10分鐘同步撈回API資料(關心空氣的議題)，已修改的資料不必update
* 按照Laravel的docs去設定，但不確定能不能work
* https://laravel.com/docs/5.5/scheduling
### (已完成) 
4. 使用 make:auth 實作登入/登出
### (開發中-目前可以把撈回來的資料做列表顯示，加上新增/修改/刪除/查詢的按鈕)
5. 使用 php artisan make:auth 的預設界面，可以由 web 操作撈回來的資料做 新增/修改/刪除/查詢 的動作
* https://data.gov.tw/dataset/6349
### (已完成)
6. 提供 API 對資料做 新增/修改/刪除/查詢 (不需要用 oauth，直接關掉 csrf token 即可)

## 作答內容
## 使用seed製造的假資料
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/books-API/db-data.png)

## 使用Postman讀 api/books
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/books-API/books.png)

## 使用Postman讀 api/books/3
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/books-API/get-book-id.png)

## 使用Postman新增一筆資料 api/books/
- 這邊因為Laravel有防止跨站腳本攻擊，所以先把app\Http\Kernel.php裡面的App\Http\Middleware\VerifyCsrfToken::class這行註解掉
才方便用Postman來做post資料的動作
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/books-API/post-books.png)

## 使用Postman更新 api/books/50
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/books-API/put-book-id.png)

## 使用Postman刪除 api/books/5
- postman的status設為204
- 程式碼為 return response()->json(null, 204)
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/books-API/del-book-id.png)

## 使用 make:auth 實作登入/登出(註冊)
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/restful-api/register.png)

## 使用 make:auth 實作登入/登出(登入後畫面)
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/restful-api/logined-in.png)

## 使用 make:auth 實作登入/登出(登入)
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/restful-api/login.png)

## 使用 make:auth 實作登入/登出(註冊後存到資料庫的畫面)
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/restful-api/db_users_data.png)

## 使用 make:auth 實作登入/登出(登入後的畫面)
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/restful-api/login-name.png)

## 抓取空氣品質預報資料
1. 用jQuery取得json資料
2. 裝composer require barryvdh/laravel-cors 來處理Cross-Origin Resource Sharing的問題
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/restful-api/list.png)
3. 加上新增/編輯/刪除/搜尋的按鈕
![alt text](https://github.com/monkeypg/monkeypg.github.io/blob/master/img/restful-api/ui-button.png)

***

## DB resource attribute

| name             | data type                         |
| ---------------- | --------------------------------- |
| book_id          | integer, auto incremental         |
| book_name        | string, maximum length 100 chars  |
| book_description | string, maximum length 2000 chars |
| book_author      | string, maximum length 100 chars  |
| isbn             | string, 13 digit                 |
| created_at       | linux timestamp                   |
| updated_at       | linux timestamp                   |

## supported methods
### Create a book profile
method: `POST /books`  
request example:  
```json  
{
    "book_name": "Student Cookbook For Dummies",
    "book_description": "Are you a student who s fed up with making do with greasy food and monotonous ingredients? A parent who worries about your son or daughter s mounting tendency to nip to the fast–food van at all times of the day",
    "book_author": 9,
    "isbn": 978986181728,
    "created_at": "1511862794",
    "updated_at": "1511862794"
}
```

response example:  
```json  
{
    "code": 0,
    "message": "The book has been created"
}
```

### Retrieve a book profile
method: `
GET /books/{book_id}`

response:
```json  
{
    "book_id": 1239,
    "book_name": "Student Cookbook For Dummies",
    "book_description": "Are you a student who s fed up with making do with greasy food and monotonous ingredients? A parent who worries about your son or daughter s mounting tendency to nip to the fast–food van at all times of the day",
    "book_author": 9,
    "isbn": 978986181728,
    "created_at": "1511862794",
    "updated_at": "1511862794"
}
```

### Update a book's profile

### Delete a book's profile

