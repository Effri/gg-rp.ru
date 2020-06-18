<?php

class Config
{
    // Настроек от проекта в личном кабинете free-kassa.ru
    const MERCHANT_ID = '211523';
    const SECRET_KEY_1 = 'c8j88ion';
    const SECRET_KEY_2 = 'c8j88ion';
    
    // Стоимость товара в руб.
    const ITEM_PRICE = 1;

    // Таблица начисления товара, например `users`
    const TABLE_ACCOUNT = 'accounts';
    // Название поля из таблицы начисления товара по которому производится поиск аккаунта/счета, например `email`
    const TABLE_ACCOUNT_NAME = 'login';
    // Название поля из таблицы начисления товара которое будет увеличено на колличево оплаченого товара, например `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'redbucks';

    // Параметры соединения с бд
    // Хост
    const DB_HOST = '31.31.196.95';
    // Имя пользователя
    const DB_USER = 'u1042490_ggrp';
    // Пароль
    const DB_PASS = '6VUPXf_1';
    // Назывние базы
    const DB_NAME = 'u1042490_ggrp';
}