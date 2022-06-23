<?php

require '../../database/db.php';

if(isset($_POST['keyword'])){
    $noUrut = 1;
    $keyword = $_POST['keyword'];
    $tampil = mysqli_query($conn,"SELECT*FROM surat_masuk WHERE no_agenda LIKE'%".$keyword."%' OR
    tk_keamanan LIKE '%".$keyword."%' OR
    tgl_agenda LIKE '%".$keyword."%' OR
    tgl_surat LIKE '%".$keyword."%' OR
    no_surat like '%".$keyword."%' OR
    asal_surat LIKE '%".$keyword."%' OR
    perihal like '%".$keyword."%'
    ORDER BY id DESC

    ");
    while($data = mysqli_fetch_array($tampil)){
        $noAgenda=$data['no_agenda'];
        $tglAgenda=$data['tgl_agenda'];
        $tk=$data['tk_keamanan'];
        $tglSurat=$data['tgl_surat'];
        $noSurat=$data['no_surat'];
        $asalSurat=$data['asal_surat'];
        $per=$data['perihal'];
        $lmpr=$data['lampiran'];
        $file=$data['file_pdf'];

?>

<tr>
<?php if ($data['catatan'] === null || trim($data['catatan']) === "") { ?>
<tr style="background-color:#FFC07C;color:#994F01;">
<?php } else { ?>
<tr><?php } ?>
    <td><?=$noUrut++?></td>
    <td><?=$noAgenda?></td>
    <td><?=$tglAgenda?></td>
    <td><?=$tk?></td>
    <td><?=$tglSurat?></td>
    <td><?=$noSurat?></td>
    <td><?=$asalSurat?></td>
    <td><?=$per?></td>
    <td><?=$lmpr?></td>
    <?php if ($data['file_pdf'] === null || trim($data['file_pdf']) === "") { ?>
    <td style="text-align:center;">-</td>
    <?php } else { ?>
        <td style="text-align:center;"><a href="<?= "../berkas/" . $data['file_pdf']; ?>" target="_blank">&#x1F4C1;</a></td>
    <?php } ?>
    </td>
    <td style="text-align:center;">
        <a href="../suratmasuk/cetak_disposisi.php?id=<?=$data['id']?>" target="_blank" class="view"  data-toggle="tooltip"><i class="material-icons">&#xE431;</i></a>
    </td>
    <td style="text-align:center;">
        <a href="../suratmasuk/disposisi.php?id=<?=$data['id']?>" target="_blank" class="view"  data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
        <a href="../suratmasuk/editsurat.php?id=<?php echo $data['id'];?>" class="edit"  data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
        <a href="../suratmasuk/delete_masuk.php?id=<?php echo $data['id'];?>" class="delete"  data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
    </td>
</tr>

<?php }  }?>