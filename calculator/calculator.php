<?php


function calculator(){
  $one = $_POST['one'];

  $two = $_POST['two'];
  
  $operator = $_POST['operator'];
  if($_POST){

    switch($operator){
        case  '+' ;
         $result1 = $one + $two ;
         return $result1;
        break ;
        case  '/' ;
         $result2 = $one / $two ;
         return $result2;
        break ;
        case  '*' ;
         $result3 = $one * $two ;
         return $result3;
        break ;
        case  '-' ;
       $result4 = $one - $two ;
       return $result4;
    }
    }
}
echo "the result" ." " . calculator()  ;




?>






<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
  <form method="post" class="pt-5">
  <div class="container">

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">number-1</label>
    <div class="col-sm-8">
      <input type="text" name="one" class="form-control" id="inputEmail3" placeholder="number">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">numer-2</label>
    <div class="col-sm-8">
      <input type="text" name="two" class="form-control" id="inputPassword3" placeholder="number">
    </div>
  </div>


  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">operator</label>
    <div class="col-sm-8">
      <input type="text" name="operator" class="form-control" id="inputPassword3" placeholder="operator">
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