<?php

namespace Snowdog\DevTest\Migration;

use Snowdog\DevTest\Core\Database;

class Version3
{
    /**
     * @var Database|\PDO
     */
    private $database;

    public function __construct(
        Database $database
    ) {
        $this->database = $database;
    }

    public function __invoke()
    {
        $this->alterPageTable();
    }

    private function alterPageTable()
    {
        $alterQuery = <<<SQL
ALTER TABLE `pages`
  ADD COLUMN `load_time` FLOAT NOT NULL COMMENT 'Load_time',
  ADD COLUMN `last_view` DATETIME NULL DEFAULT NULL;
SQL;
        $this->database->exec($alterQuery);
    }
}