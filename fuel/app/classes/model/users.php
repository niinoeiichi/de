<?php

class Model_Users extends \Model_Crud
{
    //①テーブルの名前を登録する
    protected static $_table_name = 'users';
    //②テーブルの主キーを登録する
    protected static $_primary_key = 'id';
}