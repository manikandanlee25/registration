<?php
require_once("./connect.php");

$result=[];
$query="SELECT * FROM `register` ";
$exec = mysqli_query( $con, $query);
while($rs =mysqli_fetch_object($exec))
{
    $obj = new stdClass();
    $obj->serialnumber= $rs->serialnumber;
    $obj->Name= $rs->Name;
    $obj->email= $rs->email;
    $obj->mobilenumber= $rs->mobilenumber;
    $obj->city= $rs->city;
    $obj->state= $rs->state;
    $obj->country= $rs->country;
    $obj->pincode= $rs->pincode;
    array_push($result, $obj);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <link rel="stylesheet" href="./assets/bootsstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/validation/css/validationEngine.jquery.css">
     
</head>
<body>
     <?php
      foreach($result as $v)
     {
        
     }
      ?>
      <div class="p-4 mt-5 mb-4 ">
      <div class="container ">
        <div class="row">
            <div class="col-lg-4 offset-md-4 mt-lg-5">
                <div class="card">
                <div class="card-header text-center bg-warning">registration form</div>
                    <div class="card-body ">
                        <form id="myform1" method="post" action="./save.php">
                        <div class="mb-3">
                                <label for="">serialnumber</label>
                                <input type="text" class="form-control validate[required]" placeholder="serialnumber" id="serialnumber" name="serialnumber"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control validate[required]" placeholder=" Name" id="Name" name="Name"/>
                            </div>
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control validate[required,custom[email]]" placeholder="email Id" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="">mobilenumber</label> 
                                <input type="mobilenumber" name="number" id="mobilenumber" class="form-control validate[required,maxSize[10]]" placeholder="mobilenumber">
                                 
                            </div>
                            <div class="mb-3">
                                <label for="">city</label>
                                <input type="text" class="form-control validate[required]" placeholder="city" id="name" name="city"/>
                            </div>

                            <div class="mb-3">
                                <label for="">state</label>
                                <select class="form-select validate[required]" id="state" name="state">
                                <option selected>select state</option>
                                <option value="TN">TN</option>
                                <option value="KL">KL</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Country</label>
                                <input type="text" class="form-control validate[required]" placeholder="Type Your Country" id="country" name="country">
                            </div>
                            <div class="mb-3">
                                <label for="">pincode</label>
                                <input type="pincode" class="form-control  validate[required,maxSize[6]]" placeholder="pincode" id="name" name="pincode"/>
                            </div>
                            <div class="d-grid gap-2 col-6 mb-3 mx-auto">
                                <button class="btn btn-primary">save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
    <script src="./assets/js/jquery-3.6.0.min.js "></script>
   <script src="./assets//validation/js/languages/jquery.validationEngine-en.js "></script>
   <script src="./assets/validation/js/jquery.validationEngine.min.js "></script>
   <script>
      $("#myform1").validationEngine();
   </script>
  </body>
</html>