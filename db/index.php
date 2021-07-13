<?php
   $db_server="localhost";
   $db_uname="root";
   $db_pass="";
   $db_name="home_assignment_1";

$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
if($conn)
{
    // $query = "insert into users values(NULL,'Fatema Tuj Johura','Fatema','34567')";
    // if(!mysqli_query($conn,$query))
    // {
    //     echo mysqli_error($conn);
    // }
    // else
    // {
    //     echo "connected";
    // }
}
else
{
    echo "not connected";
}
$query = "select id,name,username from users";
$result = mysqli_query($conn,$query);
echo "<table border='1'>";
echo "<tr>
      <td>Name</td><td>Id</td><td>Username</td>
      </tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "</tr";
}
echo "</table>";
?>