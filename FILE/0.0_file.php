<?php 
    
    /**
     * Upload file structure 
     * Super Global - $_FILES['example_file']
     * Keys in the associative array
     * * name	        file name
     * * type	        jpg, png, gif, doc, txt 
     * * size           in bytes
     * * tmp_name	    temporary name 
     * * error	        the error code 
     * ! Example - $size = $_FILE['example_file']['size']	         
     * 
     * 
     * File Upload Errors Lists 
     * ? Constant	                Value	               Description 
     * * UPLOAD_ERR_OK	            0	            There is no error.
     * * UPLOAD_ERR_INI_SIZE	    1	            Bigger then the upload_max_filesize directive.
     * * UPLOAD_ERR_FORM_SIZE	    2	            The uploaded file exceeds the MAX_FILE_SIZE.
     * * UPLOAD_ERR_PARTIAL	        3	            The uploaded file was only partially uploaded.
     * * UPLOAD_ERR_NO_FILE         4	            No file was uploaded.
     * * UPLOAD_ERR_NO_TMP_DIR	    6	            Missing a temporary folder. Introduced in PHP 5.0.3.
     * * UPLOAD_ERR_CANT_WRITE	    7	            Failed to write file to disk. Introduced in PHP 5.1.0.
     * * UPLOAD_ERR_EXTENSION	    8	            A PHP extension stoppped the file upload.        
     */

?>