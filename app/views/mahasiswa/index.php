<h2>Mahasiswa</h2>

<a href="<?php echo URL; ?>/mahasiswa/input" class="btn">Input Mahasiswa</a>

<table>
      <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>PRODI</th>
            <th>JENIS KELAMIN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nim']; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['prodi']; ?></td>
                  <td><?php echo $row['jenis_kelamin']; ?></td>
                  <td><a href="<?php echo URL; ?>/mahasiswa/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/mahasiswa/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>