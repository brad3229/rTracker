<?php 
// Include the database configuration file  
//require_once 'dbConfig.php'; 
 
// Get image data from database 
$sql = "SELECT image FROM images ORDER BY id DESC";
$result = $db->query($sql);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Retrieve receipts from rTracker</title>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Retrieve receipts from rTracker</h1>

    <div class="gallery">
        <?php if($result->num_rows > 0){ ?>
        <div class="img-box">
            <?php while($row = $result->fetch_assoc()){ ?>
                <img src="data:image/jpg;charset=utf-8;base64,<?php echo base64_encode($row['image']); ?>" />
            <?php } ?>
        <div>
        <?php }else{ ?>
        <p class="status error">Image(s) not found...</p>
        <?php } ?>
    </div>

    <a href="index.php"Upload images</a>
</div>
</body> 
</html>   