[回上層目錄](../../README.md)

# 集成式卡牌
集成式卡牌遊戲資料整理。

## 資料庫規劃
1. 寶可夢卡牌彈數
2. 寶可夢卡牌分類
3. 寶可夢卡牌屬性
4. 寶可夢卡牌

## 建立[遷移]
```bash
php artisan make:migration CreatePocketCardBomb --path="database/migrations/20210103Card"
php artisan make:migration CreatePocketCardType --path="database/migrations/20210103Card"
php artisan make:migration CreatePocketCardAttributes --path="database/migrations/20210103Card"
php artisan make:migration CreatePocketCards --path="database/migrations/20210103Card"
```

## 執行[遷移]
```bash
php artisan migrate --path="database/migrations/20210103Card"
```

## 建立[匯入]
```bash
php artisan make:seeder Pocket03CardDataSeeder
```

## 執行[匯入]
```bash
php artisan db:seed --class=Pocket03CardDataSeeder
```

## 資料參考
[wiki](https://zh.wikipedia.org/wiki/%E5%AF%B6%E5%8F%AF%E5%A4%A2%E9%9B%86%E6%8F%9B%E5%BC%8F%E5%8D%A1%E7%89%8C%E9%81%8A%E6%88%B2)