<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css"  />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- nav bar-->
<nav class="navbar navbar-dark bg-info   ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Blue Shappier</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Men <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Shirts</a></li>
          <li><a href="#">Tie</a></li>
          <li><a href="#">Trousers</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Women<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Frocks</a></li>
          <li><a href="#">Jeans</a></li>
          <li><a href="#">Trousers</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">children<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Shirts</a></li>
          <li><a href="#">Pants</a></li>
          <li><a href="#">T-shits</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>

<!-- background img-->
<div id="background-image">
  <div id="image-1"></div>
  <div id="image-2"></div>
</div>

<p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


<div class="col-md-8">
  <div class="row">
    <h2 class="text-center">Fetured Products</h2>
    <div class="col-md-3">
      <h4>Levis Jeans</h4>
      <img src="images/img3.png" alt="" id="images">
      <p class="list-price text-danger">List Price <s>$24.99</s></p>
      <p class="Price"> Our Price : $20.00</p>
      <button type="button" class="btn btn-success" data-toggle="model" data-target="#details-1">Details</button>
    </div>

  </div>

</div> 

</body>
</html>
