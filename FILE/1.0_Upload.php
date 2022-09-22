<?php 


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Upload file</title>
    </head>

    <?php 
        $upload_errors = array(
            UPLOAD_ERR_OK       => "There is no error",
            UPLOAD_ERR_INI_SIZE => "The uploaded file exceeds the upload_max_filesize directive",
            UPLOAD_ERR_FORM_SIZE => "The uploaded file exceeds the MAX_FILE_SIZE derective",
            UPLOAD_ERR_PARTIAL => "The uploaded file was only partially uploaded.",
            UPLOAD_ERR_NO_FILE => "No file was uploaded",
            UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk.",
            UPLOAD_ERR_EXTENSION => "A PHP extension stopped the file upload."
        );
        
        if($_POST){
            echo "<pre>";
            print_r($_FILES["file_upload"]);
            echo "</pre>";

            $the_file = $_FILES['file_upload']['name'];
            $temp_name = $_FILES['file_upload']['tmp_name'];
            $directory = "uploads";
            $the_error = $_FILES['file_upload']['error'];
            
            /**
             * ! move_uploaded_file() Hàm di chuyển tệp tải lên ở đây
             * @return true_or_false
             */ 
            if (move_uploaded_file( $temp_name, $directory . "/" . $the_file )) {
                $the_message = "File uploaded successfully. ";
            } else {
                $the_message = $upload_errors[$the_error];
            }
        } else {
            $the_message = "";
        }

    ?>
    <body>  
        
        <form action="upload.php" enctype="multipart/form-data" method="post">

            <h2>
                <?php 

                    if(!empty($upload_errors)){

                        echo $the_message;

                    }


                ?>
            </h2>

            <input type="file" name="file_upload">
            <p></p>
            <input type="submit" name="submit">

        </form>

    </body>

</html>