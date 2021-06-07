

<?php
$Physics = $_GET['Physics'];

$Chemistry = $_GET['Chemistry'];

$Biology = $_GET['Biology'];

$Mathematics = $_GET['Mathematics'];

$Computer = $_GET['Computer'];


$grade = 500 ;

 print_r($_GET) ;

     $sum = $Physics + $Chemistry + $Biology + $Mathematics + $Computer ;
     $percentage = ($sum / 500)  * 100 ;
     
echo "grade is " ." " . $percentage  . "%";
    
if($percentage >= 90){
    echo "grade is A"; 
}elseif($percentage >= 80){
    echo " " . "grade is B"; 
}elseif($percentage >= 70){
    echo " " . "grade is C"; 
}elseif($percentage >= 60){
    echo " " . "grade is D"; 
}elseif($percentage >= 40){
    echo " " . "grade is E"; 
}else{
    echo " " . "grade is F"; 
}




?>



<!doctype html>
<html lang="en">
  <head>
    <title>grade_percentage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <form method="get" class="pt-5">
  <div class="container">

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Physics</label>
    <div class="col-sm-8">
      <input type="text" name="Physics" class="form-control" id="inputEmail3" placeholder="Physics">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Chemistry</label>
    <div class="col-sm-8">
      <input type="text" name="Chemistry" class="form-control" id="inputPassword3" placeholder="Chemistry">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Biology</label>
    <div class="col-sm-8">
      <input type="text" name="Biology" class="form-control"  placeholder="Biology">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Mathematics</label>
    <div class="col-sm-8">
      <input type="text" name="Mathematics" class="form-control"  placeholder="Mathematics">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label"> Computer</label>
    <div class="col-sm-8">
      <input type="text" name="Computer" class="form-control"  placeholder="Computer">
    </div>
  </div>


 

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
  </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>