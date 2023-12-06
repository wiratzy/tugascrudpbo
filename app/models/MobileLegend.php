<?php

namespace App\Models;

use App\Core\Model;

class MobileLegend extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_mobilelegend";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $nama = $_POST['nama'];
          $peran = $_POST['peran'];
          $harga = $_POST['harga'];
          $jk = $_POST['jenis_kelamin'];

          $sql = "INSERT INTO tb_mobilelegend
            SET nama=:nama, peran=:peran, harga=:harga, jenis_kelamin=:jenis_kelamin";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":peran", $peran);
          $stmt->bindParam(":harga", $harga);
          $stmt->bindParam(":jenis_kelamin", $jk);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_mobilelegend WHERE id=:id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
          $id = $_POST['id'];
          $nama = $_POST['nama'];
          $peran = $_POST['peran'];
          $harga = $_POST['harga'];
          $jk = $_POST['jenis_kelamin'];

          $sql = "UPDATE tb_mobilelegend
          SET nama=:nama, peran=:peran, harga=:harga, jenis_kelamin=:jenis_kelamin WHERE id=:id";

          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":nama", $nama);
          $stmt->bindParam(":peran", $peran);
          $stmt->bindParam(":harga", $harga);
          $stmt->bindParam(":jenis_kelamin", $jk);
          $stmt->bindParam(":id", $id);

          $stmt->execute();
     }
     public function delete($id)
      {
            $sql = "DELETE FROM tb_mobilelegend WHERE id=:id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(":id", $id);
            $stmt->execute();
      }
}
