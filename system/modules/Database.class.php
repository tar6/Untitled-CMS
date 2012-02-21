<?php
/**
 * Last Updated: 02-16-2012
 *
 * @author	Ian_M
 * @package	{package}
 * @version	1.0.0
 * @link	{link}
 *
 */

class Database {

	private $queryAmount;
	private $tablePrefix;
	private $lastQuery;

	/**
	 * Initiates a database link
	 * @param $host The databases host
	 * @param $username The username to the database
	 * @param $password The password to the username
	 * @param $database The database name
	 * @param $prefix The prefix for the tables
	 */
	function __construct($host, $username, $password, $database, $prefix = "") {
		$this->queryAmount = 0;
		$this->tablePrefix = $prefix;
		$this->lastQuery = NULL;
		mysql_connect($host, $username, $password) or die("Cannot connect with the username ".$user);
		mysql_select_db($database) or die("The selected database '".$database."' is unavailable");
	}

	/**
	 * Run a query
	 * @param $query The query to run
	 * @return The result of the query its self
	 */
	function query($query) {
		$this->queryAmount++;
		$this->lastQuery = mysql_query($query) or $this->debugAndDie($query);
		return $this->lastQuery;
	}

	/**
	 * Does the same as query() but does not return anything
	 * Should be used for INSERT, UPDATE, etc
	 * @param $query The query to execute
	 */
	function execute($query) {
		$this->queryAmount++;
		mysql_query($query) or $this->debugAndDie($query);
	}

	/**
	 * Get the number of rows of a query.
	 * @return The number of rows
	 */
	function num_rows($query = NULL) {
		if ($result == NULL)
		return mysql_num_rows($this->lastQuery);
		else
		return mysql_num_rows($query);
	}

	/**
	 * Get the count of rows in a table, with or without a condition.
	 * @param $table The table name where to check the count for
	 * @return The number of rows
	 */
	function count($table, $where = NULL) {
		$this->queryAmount++;
		if ($where == NULL)
		$query = mysql_query("SELECT COUNT(*) FROM `{$this->tablePrefix}{$table}`");
		else
		$query = mysql_query("SELECT COUNT(*) FROM `{$this->tablePrefix}{$table}` WHERE $where");
		$result = mysql_fetch_row($query);
		return $result[0];
	}

	/**
	 * @todo Add debugging..
	 */
	function debug() {
	}

	/**
	 * @todo Rewrite this to debug the query even more
	 */
	function debugAndDie($query) {
		die("<p style=\"margin: 2px;\">".mysql_error()."</p></div>");
	}

	/**
	 * Shortcut to escape things within queries
	 * @param $string The string to escape
	 * @return The escaped version of $string
	 */
	function escape($string) {
		return mysql_real_escape_string($string);
	}

	/**
	 * Closes the connection to the mysql server
	 */
	function close() {
		mysql_close();
	}

}
?>
