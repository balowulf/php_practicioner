<?php

class Connection
{
    public static function makePostgres(array $config)
    {
        try {
            return new PDO(
                $config['dsn'], $config['username'], $config['password']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public static function makeMysql(array $config)
    {
        try {
            return new PDO(
                "{$config['connection']};dbname={$config['name']}",
                $config['username'],
                $config['password']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
