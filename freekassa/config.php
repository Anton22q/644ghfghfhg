<?php

class Config
{
    // �������� �� ������� � ������ �������� free-kassa.ru
    const MERCHANT_ID = '1';
    const SECRET_KEY_1 = '1';
    const SECRET_KEY_2 = '1';
    
    // ��������� ������ � ���.
    const ITEM_PRICE = 1;

    // ������� ���������� ������, �������� `users`
    const TABLE_ACCOUNT = 'accounts';
    // �������� ���� �� ������� ���������� ������ �� �������� ������������ ����� ��������/�����, �������� `email`
    const TABLE_ACCOUNT_NAME = 'name';
    // �������� ���� �� ������� ���������� ������ ������� ����� ��������� �� ��������� ���������� ������, �������� `sum`, `donate`
    const TABLE_ACCOUNT_DONATE= 'money';

    // ��������� ���������� � ��
    // ����
    const DB_HOST = '1';
    // ��� ������������
    const DB_USER = '1';
    // ������
    const DB_PASS = '1';
    // �������� ����
    const DB_NAME = '1';
}