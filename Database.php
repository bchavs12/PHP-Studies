<?php
class Database
{
  public $connection;
  public $statement;

  public function __construct($config, $username = 'root', $password = '')
  {
    $dsn = 'mysql:' . http_build_query($config, '', ';');

    $this->connection = new PDO($dsn, $username, $password, [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  /**
   * This section has specifics own databse class methods
   */

  /**
   * Prepare, execute and return a database class to be fetch throughout the database methods
   */
  public function query($query, $params = [])
  {
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);

    return $this;
  }

  /**
   * FetchAll data from the statement that was require in the queryFunction and return 
   */
  public function findAll()
  {
    return $this->statement->fetchAll();
  }

  /**
   * Fetch the statement that was require in the queryFunction and return 
   */
  public function find()
  {
    return $this->statement->fetch();
  }

  /**
   * Fetch the statement that was require in the query
   * With a handlerError if the database was not found.
   */
  public function findOrFail()
  {
    $result = $this->find();

    if (!$result) {
      abort();
    }

    return $result;
  }
}
