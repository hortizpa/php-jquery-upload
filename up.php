<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
        $path = 'images/'; // upload directory
        if(!empty($_POST['name']) || !empty($_POST['email']) || $_FILES['image'])
        {
            $img = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
            $final_image = rand(1000,1000000).$img; // prevents accidental overwrite
            if(in_array($ext, $valid_extensions)) 
            { 
                $path = $path.strtolower($final_image); 
                if(move_uploaded_file($tmp,$path)) 
                {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    //Processs form...
                    //
                    echo $final_image;
                }
            } else {
            echo 'invalid';
            }
        }
    }
?>