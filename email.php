<!DOCTYPE html>
<html>

<head>
    <title> email</title>

    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="newstyle1.css">
<link rel="stylesheet" href="homeS.css">
<script src="https://kit.fontawesome.com/a88ea28e71.js" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<style>
body {
  background-color: #EFEAD8;
}
.navbar{
  position: sticky;
  top: 0;
  left: 0;
  width: 100%;
  background: #5F7161;
  z-index: 9;
}

.nav{
  padding: 10px 10vw;
  display: flex;
  justify-content: space-between;
}

.nav h1{
  color: #EFEAD8;
  position: sticky;
  top: 0;
  left: 0;
  font-size: 60px;
  font-family: 'Times New Roman', Times, serif;
}

.brand-logo{
  height: 60px;
}

.nav-items{
  display: flex;
  align-items: center;
}

.search{
  width: 500px;
  display: flex;
}

.search-box{
  width: 80%;
  height: 40px;
  padding: 10px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  border: 1px solid #EFEAD8;
  text-transform: capitalize;
  background: none;
  color: #a9a9a9;
  outline: none;
}

.search-btn{
  width: 20%;
  height: 40px;
  padding: 10px 20px;
  border: none;
  outline: none;
  cursor: pointer;
  background: #D0C9C0;
  color: #6D8B74;
  text-transform: capitalize;
  font-size: 15px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
}

.search-box::placeholder{
  color: #a9a9a9;
}

.nav-items a{
  margin-left: 20px;
}

.nav-items a img{
  width: 30px;
}

.links-container{
  width: 100%;
  display: flex;
  padding: 10px 10vw;
  justify-content: center;
  list-style: none;
  border-top: 1px solid #d1d1d1;
}

.link{
  text-transform: capitalize;
  padding: 0 10px;
  margin: 0 5px;
  text-decoration: none;
  color: #6D8B74;
  opacity: 0.5;
  transition: .5s;
  font-size: 20px;
}

.link:hover{
  opacity: 1;
}
.error {color: #FF0000;}
</style>
</head>
<body>
  <div style="background:#5F7161;">
  <div class="container">
  <div class="row">
  <div class="col-md-4"><h1 id="logo">HELPER</hl></div>

  <div class="col-md-8">
  <ul id="menu" class="Float-right"><li><a href="mynew.php">Home</a></li>
  <li><a href="page111.php">Calculator</a></li>
  <li><a href="book.html">Books</a></li>
  <li><a href="video.html">Videos</a></li>
  <li><a href="test6.php">Questions</a></li>
  <li><a href="test5.php">Appointments</a></li>
  <li><a href="login.php">Login</a></li>
  <li><a href="logout.php" onclick="alert('You have logged out successfully!');">Logout</a></li>
</ul>
</div>
  </div>
  </div>
  </div>
    <form method="post" name="myform"action=""class="w3-container w3-display-middle w3-card-4 w3-center w3-white w3-text-brown w3-margin" style="width:900px;height:400px">
    <h2 class="w3-container w3-center w3-text-brown">Confirmation</h2>
    <div>
    <center>
        <?php


        echo '<h3 style="color:#5F7161;">Your appointment was booked Successfully!!<br></h3>';
        echo '<h4 style="color:#5F7161;">You will receive an email with full information.</h4>';

        ?>
        </center>

    </div>

    </form>


</body>

</html>
