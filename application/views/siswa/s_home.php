<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>
    <a href="<?php echo base_url('siswa/tambah'); ?>">tambah</a><br>
    <table border='1'>
        <?php
               if ($data->num_rows()>0) {
                   foreach ($data->result() as $d ) {
                    echo "<tr>
                        <td>$d->nama</td>
                    </tr>";
                }
               } else {
                   echo "tidak ada data untuk ditampilkan!";
               }
                

        ?>
    </table>
</body>
</html>