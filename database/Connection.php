<?php

class Connection
{	
	public static function make($config)
	{
		try {
			return new PDO("mysql:host={$config['localhost']};dbname={$config['database']}", $config['user'], $config['password'], $config['options']);
		} catch(PDOException $e) {
			die($e->getMessage());
		}		
	}
}