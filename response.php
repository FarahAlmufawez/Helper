<!DOCTYPE html>
<html lang="en">
<head>
<title>question </title>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="newstyle1.css">
<link rel="stylesheet" href="homeS.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-win8.css">
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


  <form name ="myform"action="insert1.php"class="w3-container w3-display-middle w3-card-4 w3-center w3-white w3-text-brown w3-margin" style="width:900px;height:450px">
<h2 class="w3-container w3-center w3-text-brown">Ask Question</h2>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest ">
      <textarea class="w3-input w3-border w3-padding-40 w3-left-align"name="message" rows="6" cols="25"  ><?php echo $_POST["message"]; ?></textarea>

    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-book"></i></div>
    <div class="w3-rest">

  <input class="w3-input w3-border w3-padding-20 w3-left-align"name="option" type="text"   value=<?php echo $_POST["option"]; ?>>

    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-tasks"></i></div>
    <div class="w3-rest">

  <input class="w3-input w3-border w3-padding-20 w3-left-align" name="option2" type="text"   value=<?php echo $_POST["option2"]; ?>>

    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-win8-olive w3-ripple"> Submit </button>
</p>
</form>
<script>
$(document).ready(function(){
  $("button").click(function(){
    alert("Your question have been submitted!");
  });
});
</script>

</body>
</html>
