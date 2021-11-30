<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
        <?php  
            if(isset($_POST['file_submit'])){ 
                echo 'yes';

                
            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';

            //db connection open
            $conn =mysqli_connect('localhost','root','','ecom5_db');

            //senetize
           // $name =mysqli_real_escape_string($conn,$_POST['name']);
           // $photto =mysqli_real_escape_string($conn,$_POST['photto']);

            //bulid in the query
           // $sql ="INSERT INTO users_tbl(`name`,`photto`)VALUES('','')";

            //execute the query
           // mysqli_query($conn,$sql);

            //display  the result
                echo'seccessfully';

            //db connection close 
            mysqli_close($conn);
            }
           /*  else{ 
                echo 'no';
            } */
        
        
        
        ?>

    <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data" class="w-50 offset-3">
        <div class="mb-3">
            <label for="name" class="form-label">fullname</label>
            <input type="text" name="fullname" class="form-control" id="name" aria-describedby="emailHelp">
            <div id="name" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="photto" class="form-label">Photto</label>
            <input type="file"  name="photto"class="form-control" id="photto">
        </div>
       
        <button type="submit" name="file_submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>