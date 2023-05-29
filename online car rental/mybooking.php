<?php

include 'connection.php';

if(isset($_GET['em'])) {
    $email = $_GET['em'];
    $sql = "SELECT * FROM info WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>Name</th>
                <th>Email</th>
                <th>Rent Date</th>
                <th>Return Date</th>
              </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["rentdate"]."</td>
                    <td>".$row["returndate"]."</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No data found";
    }
}

?> 