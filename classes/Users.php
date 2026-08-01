<?php

class Users extends DatabaseConnect
{
    private array $result;
    private array $msg;
    private mixed $dbconn;
    public function __construct(DatabaseConnect $db)
    {
        $this->dbconn = $db;
        $this->result = array();
        $this->msg = array();
    }

    public function authenticate(string $u_name, string $u_password): bool
    {
        if ($this->dbconn->connect() == false) {
            array_push($this->msg, "DB connection failed");
            return false;
        } else {
            $link = $this->dbconn->get_connection();
            try {
                $u_pass = sha1($u_password);
                $query = "SELECT user_id FROM users WHERE user_name = :u_name AND user_password = :u_password AND user_delete = 0";
                $stmt = $link->prepare($query);
                $stmt->bindValue(':u_name', $u_name, PDO::PARAM_STR);
                $stmt->bindValue(':u_password', $u_pass, PDO::PARAM_STR);
                if ($stmt->execute()) {
                    if ($stmt->rowCount() > 0) {
                        $this->result = $stmt->fetch(PDO::FETCH_ASSOC);
                        return true;
                    } else {
                        array_push($this->msg, "Invalid username or password");
                        return false;
                    }
                } else {
                    array_push($this->msg, "Authentication failed");
                    return false;
                }
            } catch (PDOException $e) {
                array_push($this->msg, $e->getMessage());
                return false;
            }
        }
        return false;
    }

    public function get(int $id = 0): bool
    {
        if ($this->dbconn->connect() == false) {
            array_push($this->msg, "DB connection failed");
            return false;
        }
        $link = $this->dbconn->get_connection();
        try {
            if ($id === 0) {
                $query = "SELECT * FROM users";
                $stmt = $link->prepare($query);
                if ($stmt->execute()) {
                    $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    return true;
                }
            } else {
                $query = "SELECT * FROM users WHERE user_id = :id";
                $stmt = $link->prepare($query);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                if ($stmt->execute()) {
                    $this->result = $stmt->fetch(PDO::FETCH_ASSOC);
                    return true;
                }
            }
        } catch (PDOException $e) {
            array_push($this->msg, $e->getMessage());
            return false;
        }
        return false;
    }
    public function delete(int $id = 0): bool
    {
        if ($this->dbconn->connect() == false) {
            array_push($this->msg, "DB connection failed");
            return false;
        }
        $link = $this->dbconn->get_connection();
        try {
            if ($id === 0) {
                return false;
            } else {
                $query = "DELETE FROM users WHERE user_id = :id";
                $stmt = $link->prepare($query);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                if ($stmt->execute()) {
                    return true;
                }
            }
        } catch (PDOException $e) {
            array_push($this->msg, $e->getMessage());
            return false;
        }
        return false;
    }
    public function get_result(): array
    {
        return $this->result;
    }
    public function get_msg(): array
    {
        return $this->msg;
    }
}
