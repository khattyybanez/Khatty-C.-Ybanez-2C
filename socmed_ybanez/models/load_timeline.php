<?php
include "db/dbconnect.php";

$query = "SELECT account.firstname, account.lastname, post.content 
          FROM account 
          INNER JOIN post ON account.aid = post.aid";

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='post-box'>";
    echo"<h3>" .$row['firstname'] . " " . $row['lastname'] . "</h3>";
    echo"<p>" . $row['content'] . "</p>";
     "<div class='post-actions'>";
    echo "</div>";
}
?>