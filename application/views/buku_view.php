<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
        </tr>
            
        <?php
            $no = 1;
            for($i = 0; $i < count($data_buku); $i++) {
                echo '<tr>';
                    echo '<td>'.$no.'</td>';
                    echo '<td>'.$data_buku[$i]['judul'].'</td>';
                    echo '<td>'.$data_buku[$i]['pengarang'].'</td>';
                    echo '<td>'.$data_buku[$i]['penerbit'].'</td>';
                echo '</tr>';


                $no++;
            }
        ?>
    </table>
</body>
</html>