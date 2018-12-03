
<?php
// Read from the formulary (login.html)
//
$servername = "localhost:3306";
$username = "root";
$password = "root";
//$password = "";
$db = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) { //si falla conexion (!)
    die("Connection failed: " . mysqli_connect_error()); //se acaba
}
//echo "Connected successfully";
// select from user where ....
$query = "SELECT name FROM users"; //elegir todos users
//echo $query;
$result = mysqli_query($conn, $query); //dar el resultado de la conexion y el query
/* numeric array */
?>
<html> 
<head>
<style>
   /* https://www.w3schools.com/css/tryit.asp?filename=trycss_table_striped */
   table {
    border-collapse: collapse;
    width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<table border=0>
<?php
while($row = mysqli_fetch_array($result)){ //mientras tenga x dato guardame esa linea en esta variable(row)
    //echo $row[0] . "<br>";
    //row0 porque solo SELECT name, si fuera SELECT name, pass seria row1
    // <tr>=fila / <td>=columna
?>
    <tr>
    <td>
        <?php echo $row[0] ?>:
    </td>
    <td>
        <form action="deleteuser.php" method="POST">
            <input type="hidden" name="user" value="<?php echo $row[0] ?>">
            <input type="submit" value="delete">
        </form>
    </td>
    <td>
        <form action="updateuser.php" method="POST">
            <input type="hidden" name="user" value="<?php  echo$row[0] ?>">
            <input type="submit" value="update">
        </form>
    </td>
    </tr>
<?php
}
?>
</table>
</body>
</html>
