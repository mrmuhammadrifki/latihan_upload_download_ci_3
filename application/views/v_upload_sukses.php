<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Upload</title>
</head>
<body>
<center><h1>Membuat Upload File Dengan Codeigniter</h1></center>
<ul>
    <?php foreach ($upload_data as $item => $value) : ?>
        <li><?php echo $item; ?>: <?php echo $value; ?></li>
    <?php endforeach; ?>
</ul>
<a href="<?php echo base_url() . 'upload/lakukan_download/' . $upload_data['file_name']; ?>">Download File</a>
</body>
</html> 