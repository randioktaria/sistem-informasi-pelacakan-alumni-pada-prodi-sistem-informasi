<?php
/*------------------------------------------|
| Create By Randi Oktaria Rinanda           |
| Email : randioktaria1@gmail.com           |
|-------------------------------------------|
| Jurusan Sistem Informasi                  |
| Fakultas Ilmu Komputer                    |
| Universitas Putra Indonesia YPTK - PADANG |
|------------------------------------------*/

session_start();

require __DIR__. '/../vendor/autoload.php';
require __DIR__. '/../config/config.php';

# membuat objek app
$app = 'Engine\App';
new $app;

