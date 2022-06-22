<?php

require '../database/db.php';

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
        $lam=$data['lampiran'];
        $file=$data['file_pdf'];
?>

<tr>
<?php if ($data['file_pdf'] === null || trim($data['file_pdf']) === "") { ?>
<tr style="background-color:#FFC07C;color:#994F01;">
<?php } else { ?>
<tr><?php } ?>
    <td style="text-align: center; "><?=$noUrut++?></td> 
    <td style="text-align: center; "><?=$noAgenda?></td>
    <td><?=$tglAgenda?></td>
    <td style="text-align: center; "><?=$tk?></td>
    <td><?=$tglSurat?></td>
    <td style="text-align: center; "><?=$noSurat?></td>
    <td style="text-align: center; "> <?=$asalSurat?></td>
    <td style="text-align: center; "><?=$per?></td>
    <td style="text-align: center; "><?=$lam?></td>
    <?php if ($data['file_pdf'] === null || trim($data['file_pdf']) === "") { ?>
    <td style="text-align: center; ">-</td>
    <?php } else { ?>
        <td style="text-align: center; "><a href="<?= "../berkas/" . $data['file_pdf']; ?>" target="_blank">&#x1F4C1;</a></td>
    <?php } ?>
    </td>
    <td style="text-align: center; ">
    <a href="../suratmasuk/cetak_disposisi.php?id=<?=$data['id']?>" target="_blank" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
    </td>
</tr>

<?php }  }?>