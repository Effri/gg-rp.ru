<?php

class Config
{
    // �������� �� ������� � ������ �������� free-kassa.ru
    const MERCHANT_ID = '211523';
    const SECRET_KEY_1 = 'c8j88ion';
    const SECRET_KEY_2 = 'c8j88ion';
    
    // ��������� ������ � ���.
    const ITEM_PRICE = 1;

    // ������� ���������� ������, �������� `users`
    const TABLE_ACCOUNT = 'accounts';
    // �������� ���� �� ������� ���������� ������ �� �������� ������������ ����� ��������/�����, �������� `email`
    const TABLE_ACCOUNT_NAME = 'login';
    // �������� ���� �� ������� ���������� ������ ������� ����� ��������� �� ��������� ���������� ������, �������� `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'redbucks';

    // ��������� ���������� � ��
    // ����
    const DB_HOST = '31.31.196.95';
    // ��� ������������
    const DB_USER = 'u1042490_ggrp';
    // ������
    const DB_PASS = '6VUPXf_1';
    // �������� ����
    const DB_NAME = 'u1042490_ggrp';
}