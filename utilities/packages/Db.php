<?php
// This file contains definitions for database connections getters and setters
require_once "./constants.php";

class Db
{

    // Db connection constants
    const HOST = '';
    const DBNAME = '';
    const CHARSET = '';
    const USERNAME = '';
    const PASSWORD = '';

<<<<<<< HEAD
    private ?PDO $pdo = NULL;
=======
    private $pdo = NULL;
>>>>>>> 8c9f4ce (Organized folder structure and Added the DB class)

    function __construct($dbname = self::DBNAME)
    {

        // Define the data source name
<<<<<<< HEAD
        $dsn = "msql:host=" . self::HOST . ";dname=" . $dbname . ";charset=" . self::CHARSET;
=======
        static $dsn = "msql:host=" . self::HOST . ";dname=" . $dbname . ";charset=" . self::CHARSET;
>>>>>>> 8c9f4ce (Organized folder structure and Added the DB class)

        // Options for the pdo object
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, self::USERNAME, self::PASSWORD, $options);
    }

    function __destruct()
    {
        echo Config::values['destructor_message'];
        return;
    }

    // Methods: GET, GET
    public function read(string $tableName)
    {

        // Make sure the db connection has been established
        $this->dbconnectionEstablished();

        // Generate query
        $query = "SELECT * FROM " . $tableName . " LIMIT " . Config::values['resultsLimit'] . " ;";
        // Execute the query
        $stmt = $this->pdo->query($query);

        // Return all rows for the entry
        return $stmt->fetchAll();
    }

    public function get(
        string $tableName,
        string $criteria = "id",
        string $value
    ) {

        // Make sure the db connection has been established
        $this->dbconnectionEstablished();

        // Generate the query 
        $query = "SELECT * FROM " . $tableName . " WHERE " . $criteria . " == " . $value;
        // Execute the query
        $stmt = $this->pdo->query($query);

        return $stmt->fetchAll();
    }

    public function delete(
        string $tableName,
        string $criteria,
        string $value
    ) {

        // Make sure the db connection has been established
        $this->dbconnectionEstablished();

        // Generate the query 
        $query = "DELETE FROM " . $tableName . " WHERE " . $criteria . " == " . $value;
        // Execute the query
        $stmt = $this->pdo->query($query);

        return $stmt->fetchAll();
    }

    public function update(
        string $tableName,
        string $criteria = '==',
        array $valuesToUpdate
    ) {

        // Make sure the db connection has been established
        $this->dbconnectionEstablished();

        // Generate values to update from the values to update object
        $setParts = [];
        $params = [];
        foreach ($valuesToUpdate as $column => $value) {
            $setParts[] = "`" . $column . "` = ?";
            $params[] = $value;
        }
        $setClause = implode(", ", $setParts);
        $params[] = $value; // Add the value for the WHERE clause

        // Just for debugging
        echo $setClause;

        // Generate the query 
        $query = "UPDATE " . $tableName . " SET " . $setClause . " WHERE " . $criteria . " = ?";
        // Prepare the statement
        $stmt = $this->pdo->prepare($query);

        try {

            // Execute the query with parameters
            $stmt->execute($params);
        } catch (Exception $e) {

            echo "An unexpected error occured: " . $e->getMessage();
            return Config::values['operation_error_message'] . "update";
        }

        return Config::values['success_message'] . "update";
    }

    // Utility methods
    private function dbconnectionEstablished()
    {

        if (!isset($this->pdo)) {
            throw new Exception("Database connection has not been establshied is not established.");
        }
        return Config::values['success_message'] . "dbconnectionEstablished";
    }
}
