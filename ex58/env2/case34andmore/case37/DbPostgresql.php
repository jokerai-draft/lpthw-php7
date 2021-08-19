<?php

class DbPostgreSQL extends Db
{
    public function select($table, $fields)
    {
        // Build PostgreSQL specific select query
        // then execute it with $this->pdo
    }
}

