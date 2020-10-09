<?php

namespace DBsystem74I\Migration;

use DBsystem74I\Database\Blueprint;

require_once __DIR__ . '/../config/app.php';
require config['path']['queryFunction'];

require_once config['path']['BluePrint'];
require config['path']['Connect'];
class Migrate
{
    public function tables()
    {
        $table = new Blueprint;
        return [
            0 => [
                $table->Integer('id', TRUE, null, true),
                $table->String('name'),
                $table->String('username'),
                $table->String('email'),
                $table->String('body'),
                $table->Timestamps()
            ],
            1 => [
                $table->Integer('id', TRUE, null, true),
                $table->String('title'),
                $table->String('body'),
                $table->Timestamps()
            ]
        ];
    }
}
$db = new Migrate;

Query('asspp', $db->tables()[0]);
Query('asspp2', $db->tables()[0]);
Query('asspp3', $db->tables()[0]);
