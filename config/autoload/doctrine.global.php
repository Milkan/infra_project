<?php
return array (
    'doctrine' => array (
        'connection' => array (
            'orm_default' => array (
            'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => array (
                    'host' => '192.168.50.48',
                    'port' => 3306,
                    'unix_socket' => '/var/lib/mysql/mysql.sock',
                    'user' => 'root',
                    'password' => '35340Liffre',
                    'dbname' => 'platform_management',
                    'charset' => 'utf8'
                )
            )
        )
    )
);