<?php

include('config.php');

//Display Product

$query = "SELECT * FROM `add_pro`";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result) > 0){


 
?>


<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
        <h2>All Categories </h2>
        <hr>
    <table class="table table-warning">
        <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
               
                    <th scope="col">Quantity</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                    <th scope="row"><?php echo $data['pid']?></th>
                    <td><?php echo $data['pname']?></td>
                    <td><?php echo $data['quantity']?></td>
                    <td><?php echo $data['description']?></td>
                    <td><img src="<?php echo 'images/' . $data['image']?>" width="100px" height="100px"></td>

                    <td>
                        <?php
                        if($data['status'] == 0){
                            echo "Active";
                        }else{
                            echo "Deactivate";
                        }    
                        
                        ?>
                    </td>
                </tr>
                <?php
                    }
                }
                
                ?>
                </tbody>
            </table>
           
            </div>

        </div>

    </div>


</body>

</html>





























