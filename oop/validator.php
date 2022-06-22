<?php 
 
 class validator{



# Clean Function to sanitize the data
function Clean($input)
{
    return stripslashes(strip_tags(trim($input)));
}



# Validate Function to validate the data 
function Validate($input, $case, $length = 6)
{

    $status = true;

    switch ($case) {

        case 'required':
            if (empty($input)) {
                $status = false;
            }
            break;

        case 'email':
            if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
                $status = false;
            }
            break;

        case 'min':
            if (strlen($input) < $length) {
                $status = false;
            }
            break;

        case 'max':
            if (strlen($input) > $length) {
                $status = false;
            }
            break;

        case 'int':
            if (!filter_var($input, FILTER_VALIDATE_INT)) {
                $status = false;
            }
            break;

        case 'image':

            # Validate Extension . . . 
            $imageType = $input;
            $extensionArray = explode('/', $imageType);
            $extension =  strtolower(end($extensionArray));

            $allowedExtensions = ['png', 'jpg', 'jpeg', 'webp'];    // PNG 

            if (!in_array($extension, $allowedExtensions)) {

                $status = false;
            }

            break;

        case 'date':
            $dateArray = explode('-', $input);

            if (!checkdate($dateArray[1], $dateArray[2], $dateArray[0])) {
                $status = false;
            }
            break;
    }


    return $status;
}


 }




 $obj = new validator;

 $name = "root"; 
 $email = "rootyahoo.com";

# Clean . . . 
$name =  $obj->Clean($name);
$email = $obj->Clean($email);

# Validation . . . 
$errors = [];
if (!$obj->Validate($name, 'required')) {
    $errors['name'] = 'Name is required';
}

if (!$obj->Validate($email, 'required')) {
    $errors['email'] = 'Email is required';
} elseif (!$obj->Validate($email, 'email')) {
    $errors['email'] = 'Email is required';
}


  if(count($errors) > 0){
    foreach ($errors as $key => $value) {
        # code...
        echo '* '.$key.' : '.$value.'<br>';
    }
  }else{
    echo 'No Errors';
  }