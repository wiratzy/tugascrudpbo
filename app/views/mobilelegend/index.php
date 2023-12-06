<h2>Hero Mobile Legend</h2>

<a href="<?php echo URL; ?>/mobilelegend/input" class="btn">Input Hero Mobile Legend</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>PERAN</th>
            <th>HARGA</th>
            <th>JENIS KELAMIN</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['peran']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><?php echo $row['jenis_kelamin']; ?></td>
                  <td><a href="<?php echo URL; ?>/mobilelegend/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/mobilelegend/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>