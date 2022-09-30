
<?php
include '../config/config.php';
$productname = $_POST['productName'];
$mrp = $_POST['mrp'];
$sprice = $_POST['sprice'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$youtubeLink = $_POST['youtubeLink'];
$fileNames = array_filter($_FILES['files']['name']);
$targetDir = "../uploads/";
$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'jfif');

$statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';

$insertQuery1 = $con->query("INSERT INTO products (name,mrp,quantity,sprice,description,youtube_link) VALUES ('$productname','$mrp','$quantity','$sprice','$description','$youtubeLink')");
$last_inserted_id = $con->insert_id;


$fileNames = array_filter($_FILES['files']['name']);

if (!empty($fileNames)) {
    foreach ($_FILES['files']['name'] as $key => $val) {

        $imagecolumn = "";
        $imagecolumn = "image_" . ($key + 1);
      

        // File upload path 
        $fileOldName = basename($_FILES['files']['name'][$key]);
        $fileName = ($last_inserted_id . "_" . $fileOldName);
       
        $targetFilePath = $targetDir . $fileName;

        // Check whether file type is valid 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        if (in_array($fileType, $allowTypes)) {

          
            // Upload file to server 
            if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                // Image db insert sql 
                $insert = $con->query("UPDATE products set  $imagecolumn ='$fileName' WHERE id='$last_inserted_id'");
                if ($insert) {
                    echo "<script>alert('product has been inserted successfully')</script>";
                    echo "<script>window.open('index.php', '_self')</script>";
                } else {

                    echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
                }
            } else {
                $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                echo "<script>alert('Sorry, Some Error To Upload Contact Software Team')</script>";
            }
        }
    }
}
echo $statusMsg;
?>