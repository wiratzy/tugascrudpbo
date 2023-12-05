<h2>Edit Mahasiswa</h2>

<form action="<?php echo URL; ?>/mahasiswa/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="number" name="nim" value="<?php echo $data['row']['nim']?>" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>PRODI</td>
            <td><input type="text" name="prodi" value="<?php echo $data['row']['prodi']?>" required></td>
        </tr>
        <tr>
            <td>JENIS KELAMIN</td>
            <td>
                <select name="jenis_kelamin">
                    <option value="Laki-Laki">Laki Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>