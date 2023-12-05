<?php

namespace App\Models;

use App\Core\Model;

class Mahasiswa extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_mahasiswa";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $nim = $_POST['nim'];
          $nama = $_POST['nama'];
          $prodi = $_POST['prodi'];
          $jk = $_POST['jenis_kelamin'];

          $sql = "INSERT INTO tb_mahasiswa
            SET nim=:nim, nama=:nama, prodi=:prodi, jenis_kelamin=:jenis_kelamin";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nim", $nim);
          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":prodi", $prodi);
          $stmt->bindParam(":jenis_kelamin", $jk);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_mahasiswa WHERE id=:id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $id = $_POST['id'];
          $nim = $_POST['nim'];
          $nama = $_POST['nama'];
          $prodi = $_POST['prodi'];
          $jk = $_POST['jenis_kelamin'];

          $sql = "UPDATE tb_mahasiswa
          SET nim=:nim, nama=:nama, prodi=:prodi, jenis_kelamin=:jenis_kelamin WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nim", $nim);
          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":prodi", $prodi);
          $stmt->bindParam(":jenis_kelamin", $jk);
          $stmt->bindParam(":id", $id);

          $stmt->execute();
     }
     public function delete($id)
      {
            $sql = "DELETE FROM tb_mahasiswa WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
