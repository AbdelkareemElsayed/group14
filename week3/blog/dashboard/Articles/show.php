<?php
require '../helpers/dbConnection.php';
require '../helpers/functions.php';

#####################################################################################################################
$id = $_GET['id'];
$sql = "select articles.* , categories.title as cat_title ,  users.name as UserName , users.image as userImage from articles inner join categories on articles.cat_id = categories.id  inner join users on articles.addedBy = users.id where articles.id = $id";
$op  = DoQuery($sql);
$data = mysqli_fetch_assoc($op);

################################################################################################################
require '../layouts/header.php';
require '../layouts/nav.php';
require '../layouts/sidNav.php';
?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <?php
            Message('Accounts/Display');
            ?>
        </ol>


         
         <h1>Article Details</h1>
         <p> <img src="uploads/<?php echo $data['image'] ?>" width="400px" height="400px"> </p>
         <p> title :   <?php echo  $data['title']; ?> </p>
         <p> Content : <?php echo  $data['content']; ?> </p>
         <p> Category : <?php echo $data['cat_title'] ?> </p>
         <p> Date :     <?php echo date('Y/m/d',$data['date']) ?> </p>
         
         <p> AddedBy :  <?php echo  $data['UserName']; ?> </p>
         <p> UserImage : <img src="../Admins/uploads/<?php echo $data['userImage'];?>" width="80px" height="80px" > </p>




    </div>
</main>


<?php
require '../layouts/footer.php';
?>