<!DOCTYPE html>
<html>

<head>
    <title> Buku </title>
</head>

<body>

    <table border="1">
        <tr>
            <th> No </th>
            <th> Judul </th>
            <th> Pengarang </th>
            <th> Penerbit </th>
        </tr>
        <?php
		$no = 1;
		for ($i = 0; $i < count($DataBuku); $i++) {
			echo '<tr>';
			echo '<td>' . $no . '</td>';
			echo '<td>' . $DataBuku[$i]['judul'] . '</td>';
			echo '<td>' . $DataBuku[$i]['pengarang'] . '</td>';
			echo '<td>' . $DataBuku[$i]['penerbit'] . '</td>';
			echo '</tr>';

			$no++;
		}
		?>
    </table>

</body>

</html> 
