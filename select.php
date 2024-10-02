<?php
require('connection.php');

$select = $conn ->query("SELECT * FROM tb_boss");

echo "<style>
tr:nth-child(odd){background:hsl(240, 4%, 73%)}
</style>
<table cellspacing=10 cellpading=10><tr>
<thead>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>password</th>
<th>Comfirm Password</th>
<th>Date</th>
<th>Gender</th>
</thead>";

while($info=$select->fetch_assoc()){
    echo "<tr>
    <td>".$info['firstname']."</td>
    <td>".$info['lastname']."</td>
    <td>".$info['email']."</td>
    <td>".$info['password']."</td>
    <td>".$info['comfirmpassword']."</td>
    <td>".$info['date']."</td>
    <td>".$info['gender']."</td>
    </tr>";
}
"</table>";
    



?>