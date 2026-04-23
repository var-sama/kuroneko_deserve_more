<?php

namespace App\Models;
require_once '../app/core/database.php';

use App\Core\Database;

class Student extends Database
{
    protected $table = 'students';

    // fungsi menampilkan data siswa
    public function getStudents()
    {
        $students = [];
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();
        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }
        return $students;
    }

    // fungsi menampilkan data siswa berdasarkan id
    public function getStudent(int $id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        $result = $stmt->get_result();
        $student = $result->fetch_assoc();
        return $student;
    }

    //fungsi nambah seto baru
    public function insert(array $data)
    {
        $NAME = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);

        $query = "INSERT INTO {$this->table} (name, nis, class, phone_number) VALUES (?, ?, ?, ?)";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("ssss", $NAME, $nis, $class, $phoneNumber);
        $stmt->execute();

        if($stmt->affected_rows > 0) {
            header('Location: /students');
            exit;
        } else {
            echo 'eror mang seto lu bkn org kivotos';
        }
    }
    //fungsi update data seto
    public function update(array $data, int $id)
    {
        $NAME = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);

        $query = "UPDATE {$this->table} SET name = ?, nis=?, class=?, phone_number=? WHERE id =?";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("ssssi", $NAME, $nis, $class, $phoneNumber, $id);
        $stmt->execute();

        if($stmt->affected_rows > 0) {
            header('Location: /students');
            exit;
        } else {
            echo 'eror mang seto lu ud ke do kali ni';
        }
    }

    //fungsi untuk delete siswa
     public function delete(int $id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if($stmt->affected_rows > 0) {
            header('Location: /students');
            exit;
        } else {
            echo 'gabisa hapus.. kok iso';
        }
    }
}

?>