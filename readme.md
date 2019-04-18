# Оформление заявок на поставку товаров


Оформление заявок на поставку товаров. 
В состав входят:
- Погода в Брянске
- Справочник заявок. Постраничный просмотр
- Справочник заявок. Группировка по статусам
- Справочник товаров
- Добавление и редактирование заявок на товары. Расширенный режим редактирования количества товаров

## Видео
[![Видео](https://i.ytimg.com/vi/5TZ-zzYagJ8/hqdefault.jpg?sqp=-oaymwEZCPYBEIoBSFXyq4qpAwsIARUAAIhCGAFwAQ==&rs=AOn4CLAhyLeEdHZ7n1PI1D3a8VnZih8t_g)](https://www.youtube.com/watch?v=5TZ-zzYagJ8&feature=youtu.be)

## Инсталляция
- `composer install`
-  настроить `.env` файл
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan db:seed`
- `gulp watch`


## Техническое задание

- Создать страницу на которой выводится текущая температура в Брянске (запрос из php) (Работа с api какого-либо сервиса например: https://tech.yandex.ru/weather/)

- Создать страницу со списоком заказов в табличном виде
    - поля 
        - ид_заказа 
        - название_партнера 
        - стоимость_заказа 
        - наименование_состав_заказа 
        - статус_заказа
    - ид_заказа - ссылка на редактирование заказа в новой вкладке
- Создать страницу редактирования заказа
    - поля для редактирования:
        - email_клиента(редактирование, обязательное)
        - партнер(редактирование, обязательное)
        - продукты(вывод наименования + количества единиц продукта)
        - статус заказа(редактирование, обязательное)
        - стоимость заказ(вывод)
        - сохранение изменений в заказе

- Создать страницу со списком продуктов в табличном виде:
    - поля 
        - ид_продукта 
        - наименование_продукта 
        - наименование_поставщика 
        - цена
    - сортировка по алфавиту по возрастанию
    - пагинация по 25 элементов
    - редактирование цены каждого продукта с помощью ajax запроса
- Дополнительный функционал для страницы списка заказов
    - список заказов разбить на вкладки(bootstrap)
        - владка просроченные
            - дата доставки раньше текущего момента
            - статус заказа 10
            - сортировка по дате доставки по убыванию
            - ограничение 50 штук
        - текущие
            - дата доставки 24 часа с текущего момента
            - статус заказа 10
            - сортировка по дате доставки по возрастанию
        - новые
            - дата доставки после текущего момента
            - статус заказа 0
            - сортировка по дате доставки по возрастанию
            - ограничение 50
        - выполненные
            - дата доставки в текущие сутки
            - статус заказа 20
            - сортировка по дате доставки по убыванию
            - ограничение 50


#### Дополнительная информация
Статусты заказа:
- 0 новый
- 10 подтвержден
- 20 завершен

