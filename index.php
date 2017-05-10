<?php
include_once 'inc/class.crud.php';
$crud = new CRUD();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Latihan OOP</title>
</head>
<body>

<div id="header">
<label>coba oop php </label>
</div>

<center>
<table id="dataview">
<tr>
<td colspan="5"><a href="add_records.php">Tambah (+)</a></td>
</tr>
<?php
$res = $crud->read();
if(mysql_num_rows($res)>0)
{
	while($row = mysql_fetch_array($res))
	{
	?>
    <tr>
    <td><?php echo $row['first_name']; ?></td>
    <td><?php echo $row['last_name']; ?></td>
    <td><?php echo $row['user_city']; ?></td>
    <td><a href="edit_records.php?edt_id=<?php echo $row['user_id']; ?>">Edit</a></td>
    <td><a href="dbcrud.php?del_id=<?php echo $row['user_id']; ?>">Hapus</a></td>
    </tr>
    <?php
	}	
}
else
{
	?><tr><td colspan="5">Silahkan masukan data</td></tr><?php
}
?>
</table>

<footer>
           <center> RINA PUJI ASTUTI(2014150023) | © 2017</center> 
</footer>

</center>
</body>
</html>