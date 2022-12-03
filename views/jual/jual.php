<?php
function rupiah($angka){
    $hasil_rupiah="Rp " . number_format($angka,2,',',',');
    return $hasil_rupiah
}
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<h1 class="text-center">Daftar Barang</h1>
<table class="table table-bordered table-responsive">
    <table class="bg-warning">;
        <tr>
            <th>Nomor</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Action</th>
</tr>
</thead>
<tbody>
    <?php
    foreach ($data['jual'] as $jual)
{ ?>
<<tr>
    <td><?=$jual['idjual']?></td>
    <td><?=$jual['tgljual']?></td>
    <td><?=$jual['idbarang']?></td>
    <td><?=$jual['jmlbarang']?></td>
    <td><?=$jual['totalharga']?></td>
    <td><?=$jual['total']?></td>
    <td><?=$jual['kembali']?></td>
    <td><a href="<?=$base_url.'/jual/add/'.$jual['idbarang']?>">Beli</a></td>
    </tr>
    <?php
} ?>
</tbody>
</table>