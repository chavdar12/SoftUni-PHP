<?php
if (isset($_FILES['upload']) && $_FILES["upload"]["error"] === 0) {
    $file_name = $_FILES['upload']['name'];
    $file_tmp = $_FILES['upload']['tmp_name'];
    $file_size = $_FILES['upload']['size'];
    $file_type = $_FILES['upload']['type'];

    $file_name = basename($file_name);
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowed_extensions = ['txt', 'png', 'jpg', 'jpeg'];
    $max_size = 20000000; // 20 MB

    if (in_array($file_extension, $allowed_extensions)) {
        if ($file_size <= $max_size) {
            $uploadDir = 'C:/xampp/htdocs/PHP/dom/6/002/upload/';
            $uploadFile = $uploadDir . uniqid() . '-' . $file_name;

            if (move_uploaded_file($file_tmp, $uploadFile)) {
                echo "File uploaded successfully.";
            } else {
                echo "File upload failed.";
            }

        } else {
            echo "File size must be less than or equal to 20 MB.";
        }
    } else {
        echo "Invalid file type. Only txt, png, jpg, or jpeg files are allowed.";
    }

} else {
    if (isset($_FILES['upload']) && $_FILES['upload']['error'] !== 0) {
        $error_code = $_FILES['upload']['error'];
        switch ($error_code) {
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                echo "The uploaded file exceeds the maximum file size limit.";
                break;
            case UPLOAD_ERR_PARTIAL:
                echo "The file was only partially uploaded.";
                break;
            case UPLOAD_ERR_NO_FILE:
                echo "No file was uploaded.";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                echo "Missing a temporary folder.";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                echo "Failed to write file to disk.";
                break;
            case UPLOAD_ERR_EXTENSION:
                echo "A PHP extension stopped the file upload.";
                break;
            default:
                echo "Unknown upload error.";
                break;
        }
    }
}