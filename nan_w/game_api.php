<?php
    $file_contents = file_get_contents('./data/data.json');
    $data = json_decode($file_contents, true);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP JSON parser sample</title>
    </head>



<body>
<table border="1" bordercolor="blue">
    <tr bgcolor="yellow">
        <th> 날짜 </th>
</tr>

<?php foreach ($data as $row) { ?>
    <tr align="center">

    <td> <?php print $row['date']; ?> </td>

<?php } ?>

</table>

<?php
foreach ($data as $row) {
    print $row['data'];
    print ', ';
    print $row['quantity'];
    print '<br />';
}
?>

<?php
foreach ($data as $row) {
    printf("<li>%s %s %s %s %s</li>\n", $row['data'], $row['item'], $row['price']);
}
?>

</body>
</html>