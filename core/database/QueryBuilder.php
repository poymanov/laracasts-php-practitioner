<?php

namespace App\Core\Database;

class QueryBuilder
{
	protected $pdo;

	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{
		$stmt = $this->pdo->prepare("SELECT * FROM {$table}");
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_CLASS);
	}

	public function insert($table, $data)
    {
        $params = array_keys($data);
        $sql = sprintf("insert into %s (%s) values (%s)",
            $table,
            implode(',', $params),
            ":" . implode(", : ", $params)
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($data);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}