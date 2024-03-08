<?php
namespace Core;
use PDO;
class db {
    public $con;
    public $statement;
    public function __construct($dbConfig, $user = "root", $pwd = "")
    {
        

        $dsn = "mysql:" .  http_build_query($dbConfig, "",";");
        $this->con = new PDO($dsn, $user, $pwd, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
        public function query($query, $params = [])
        {
            $this->statement = $this->con->prepare($query);

            $this->statement->execute($params);
    
            return $this;
        }
        public function all() {
            return $this->statement->fetchAll();
        }
        public function get() {
            return $this->statement->fetch();
        }
        public function fetchOrFail() {
            $values = $this->get();
            if (! $values) {
                abort();
            }
            return $values;
        }
}
?>