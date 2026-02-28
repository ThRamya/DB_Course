<?php

if ($_FILES["myfile"]["error"] === 0) {
    move_uploaded_file(
        $_FILES["myfile"]["tmp_name"],
        "uploads/" . $_FILES["myfile"]["name"]
    );
    echo "File uploaded successfully";
} else {
    echo "Upload failed";
}

?>