<?php

namespace app\migrations;

use app\core\Application;

class m0003_add_default_value_on_status_column_to_users_table
{
    public function up()
    {
        $db = Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ALTER COLUMN status SET DEFAULT 0");
    }

    public function down()
    {
        $db = Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ALTER COLUMN status DROP DEFAULT");
    }
}