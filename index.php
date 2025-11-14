<?php
require "database.php";
$rows = $conn->query("SELECT * FROM posts");
?>
<!DOCTYPE html>
<html>
<head>
<script>
function confirmDelete(id){
    if(confirm("Delete this item?")){
        window.location = "delete.php?id=" + id;
    }
}
</script>
</head>
<body>
<h2>All Posts</h2>
<?php while($r = $rows->fetch_assoc()): ?>
<div>
    <b><?php echo $r['title']; ?></b>
    <button onclick="confirmDelete(<?php echo $r['id']; ?>)">Delete</button>
</div>
<?php endwhile; ?>
</body>
</html>
