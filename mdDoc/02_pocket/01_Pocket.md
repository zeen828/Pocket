[回上層目錄](../../README.md)

# 寶可夢
寶可夢專案的基礎資料規劃。

## 資料庫規劃
1. 寶可夢世代分類
2. 寶可夢遊戲

## 建立[遷移]
```bash
php artisan make:migration CreatePocketGenerations --path="database/migrations/20210101Pocket"
php artisan make:migration CreatePocketGames --path="database/migrations/20210101Pocket"
```

## 執行[遷移]
```bash
php artisan migrate --path="database/migrations/20210101Pocket"
```

## 建立[匯入]
```bash
php artisan make:seeder Pocket01DataSeeder
```

## 執行[匯入]
```bash
php artisan db:seed --class=Pocket01DataSeeder
```

## 資料參考
[wiki](https://zh.wikipedia.org/wiki/%E5%AE%9D%E5%8F%AF%E6%A2%A6%E7%B3%BB%E5%88%97)