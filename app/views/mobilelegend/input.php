<h2>Input Mahasiswa</h2>

<form action="<?php echo URL; ?>/mobilelegend/save" method="post">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>PERAN</td>
            <td><input type="text" name="peran" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="number" name="harga" required></td>
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
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>

</form>