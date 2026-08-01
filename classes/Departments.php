<?php

class Departments extends DatabaseConnect
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
      public function get(int $id = 0): bool
      {
            if ($this->dbconn->connect() == false) {
                  array_push($this->msg, "DB connection failed");
                  return false;
            }
            $link = $this->dbconn->get_connection();
            try {
                  if ($id === 0) {
                        $query = "SELECT * FROM departments";
                        $stmt = $link->prepare($query);
                        if ($stmt->execute()) {
                              $this->result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                              return true;
                        }
                  } else {
                        $query = "SELECT * FROM departmants WHERE dept_id = :id";
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
      public function add(string $name, string $name_short): bool
      {
            if ($this->dbconn->connect() == false) {
                  array_push($this->msg, "DB connection failed");
                  return false;
            }
            $link = $this->dbconn->get_connection();
            try {
                  $query = "INSERT INTO departments(dept_name, dept_name_short) VALUES (:name, :name_short)";
                  $stmt = $link->prepare($query);
                  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                  $stmt->bindParam(':name_short', $name_short, PDO::PARAM_STR);
                  if ($stmt->execute()) {
                        return true;
                  }
                  return true;
            } catch (PDOException $e) {
                  array_push($this->msg, $e->getMessage());
                  return false;
            }
            return false;
      }
      public function edit(string $name, string $name_short, int $id): bool
      {
            if ($this->dbconn->connect() == false) {
                  array_push($this->msg, "DB connection failed");
                  return false;
            }
            $link = $this->dbconn->get_connection();
            try {
                  $query = "UPDATE departments SET dept_name = :name, dept_name_short :name_short WHERE dept_id = :id";
                  $stmt = $link->prepare($query);
                  $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                  $stmt->bindParam(':name_short', $name_short, PDO::PARAM_STR);
                  $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                  if ($stmt->execute()) {
                        return true;
                  }
                  return true;
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
                        $query = "DELETE FROM departments WHERE dept_id = :id";
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
