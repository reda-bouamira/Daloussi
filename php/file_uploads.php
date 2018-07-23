<!-- <?php 
	if ($_POST) {
        if ($_FILES["uploaded_file"]["error"] != 0) { 
            $error = "File Upload Error #" . $_FILES["uploaded_file"]["error"]; 
        } else {
            $filename = basename($_FILES['uploaded_file']['name']); 
            $newname = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR. $filename;

            if (!(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) { 
                $error = "Sorry. A problem occurred during thefile saving process."; 
            }
        }
    }

    // Does nothing for now_________ not being used.
	function reArrayFiles(&$file_post) {

	    $file_ary = array();
	    $file_count = count($file_post['name']);
	    $file_keys = array_keys($file_post);

	    for ($i=0; $i<$file_count; $i++) {
	        foreach ($file_keys as $key) {
	            $file_ary[$i][$key] = $file_post[$key][$i];
	        }
	    }

	    return $file_ary;
	}
 ?>

<form action="file_uploads.php" method="post" enctype="multipart/form-data">
  Send these files:<br />
  <input name="userfile[]" type="file" /><br />
  <input name="userfile[]" type="file" /><br />
  <input type="submit" value="Send files" />
</form>

<?php if ($_POST): ?>
        <pre><?= print_r($_FILES) ?></pre> 
    <?php endif ?> -->

<?php
    // Processing an uploaded file. No security guards!
    
    $error = false;

    if ($_POST) {
        if ($_FILES["uploaded_file"]["error"] != 0) { 
            $error = "File Upload Error #" . $_FILES["uploaded_file"]["error"]; 
        } else {
            $filename = basename($_FILES['uploaded_file']['name']); 
            $newname = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR. $filename;

            if (!(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $newname))) { 
                $error = "Sorry. A problem occurred during when saving file."; 
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>File Uploads</title>
</head>

<body>
    <h1>File Uploads</h1>
    <?php if ($error): ?>
        <p><?= $error ?></p>
    <?php endif ?>
    <form method="post" enctype="multipart/form-data">
        <label for="uploaded_file">Filename:</label>
        <input type="file" name="uploaded_file" id="uploaded_file" />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    
    <?php if ($_POST): ?>
        <pre><?= print_r($_FILES) ?></pre> 
    <?php endif ?>
</body>
</html>