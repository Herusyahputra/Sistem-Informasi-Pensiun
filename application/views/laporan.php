<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pensiun Otomatis | Badan Kepegawaian Daerah Provinsi Bengkulu</title>
        <!-- CSS -->
        <style type="text/css">
            table {
                width: 100%;
                border: 1px solid #C6C6C6;
                border-collapse: collapse;                
            }
            table, td, th {
                padding: 5px;
                border: 1px solid #C6C6C6;
            }
        </style>
    </head>
    <body>        
        <h3><p align="center">
        Daftar Pegawai Pensiun
        <br>
        <?php echo $skpd['skpd_nama']; ?>
        <br>
        Provinsi Bengkulu</p></h3>
        Pensiun Pegawai Tahun <?php echo $tahun; ?>
        <table>    
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Eselon</th>    
                    <th>Golongan</th> 
                    <th>Masa Kerja</th>         
                </tr>
            </thead>
            <tbody>                
                <?php $no=1; foreach($pensiun as $data) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['asn_nip']?></td>
                    <td><?php echo $data['asn_nama']; ?></td>
                    <td>
						<?php 
						$tahun = 2019 - (substr($data['asn_nip'], 0, 4));
						echo $tahun ." Tahun"; 
						?>
					</td>
                    <td><?php echo $data['asn_eselon']; ?></td>
                    <td><?php echo $data['asn_gol_akhir']; ?></td>
                    <td>
					    <?php 
					    $tahun = (substr($data['asn_nip'], 0, 4) + 57) - substr($data['asn_nip'], 8, 4);
					    echo $tahun ." Tahun"; 
					    ?>
					</td>                    
                </tr>
                <?php } ?>                
            </tbody>
        </table>        
    </body>
</html>