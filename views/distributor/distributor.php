<table border=1>
    <caption><h1>List Distributor</h1>
    <thead>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No Telpon</th>
        <th colspan=2>Tools</th>
</thead>
<?php
$no=1;
foreach ($data['distributor'] as $distributor){
    ?>
<tbody>
    <td><?= $no ?></td>
    <td><?= $distributor['nmdist']?></td>
    <td><?= $distributor['alamat']?></td>
    <td><?= $distributor['notelp']?></td>
    <td>Ubah</td>
    <td>Hapus</td>
</tbody>
<?php
$no++;
}
?>
</table>