<?php
include 'upload.php'
?>
<!DOCTYPE html>
<html lang="en-US"
<head>
<title> Store Receipts with rTracker</title>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Upload Your Receipt</h1>
    <div class="wrapper">
        <?php if (!empty($statusMsg)){ ?>
            <p class="status <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
        <?php } ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Select Image File:</label>
                <input type="file" name="image" class="form-control">
            </div>

            <input type="submit" name="submit" class="btn-primary" value="Upload">
        <form>

        <a href="view.php">View uploaded receipts</a>
    </div>
</div>
</body>
</html>