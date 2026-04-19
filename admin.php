<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>
<?php
include "config.php";

$sql = "SELECT * FROM messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Panel</title>
  <style>
    body { font-family: Arial; background:#111; color:#fff; }
    table { width:100%; border-collapse: collapse; margin-top:20px; }
    th, td { padding:10px; border:1px solid #333; }
    th { background:#222; }
    tr:hover { background:#1a1a1a; }
    .delete { color:red; text-decoration:none; }
  </style>
</head>

<body>

<h2>📊 OptiCore Dashboard</h2>

<table>
<tr>
  <th>Name</th>
  <th>Email</th>
  <th>Service</th>
  <th>Message</th>
  <th>Action</th>
</tr>

<?php
while($row = $result->fetch_assoc()) {
  echo "<tr>
          <td>".$row['name']."</td>
          <td>".$row['email']."</td>
          <td>".$row['service']."</td>
          <td>".$row['message']."</td>
          <td><a class='delete' href='delete.php?id=".$row['id']."'>Delete</a></td>
        </tr>";
}
?>

</table>

</body>
</html>