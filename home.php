<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<body>

<div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-fw fa-home"></i></a>
<div class="icon-bar-2">
  <a href="#"><i class="fa fa-user-o"></i></a> 
  <a href="#"><i class="fa fa-navicon"></i></a>
<div class="topnav">
  <input type="text" placeholder="Search..">
</div>
</div>
</div></div>
<br>

<div class="second-box">    
  
    <form action="" method ="POST">
        <textarea class = "formDesign"name="texts" id="" cols="30" rows="10"></textarea>
        <div class="icon-bar-sb">
            <button class="active" name='SUBMIT' onclick="myFunction()"><i class="fa fa-fw fa-upload"></i>POST</button>
        </div>
    </form>
</div>
<br>

<?php

if(isset($_POST['SUBMIT'])){
    $text=$_POST['texts'];
    ?>
    <div class="first-box" id='hidden'>
  <div class="icon-bar-fb"> 
    <a class="active" href="#"><i class="fa fa-fw fa-user-circle-o"></i> Tricia Reynoso</a>
  <div class="icon-bar-fb1">
    <a href="#"><i class="fa fa-users"></i></a> 
  <div class="icon-bar-fb2">
    <a href="#"><i class="fa fa-ellipsis-h"></i></a> 

    </div>
    </div>
    </div>
<?php

    echo "<textarea class = 'formDesign2'name='texts'  cols='30' rows='10'>$text</textarea>";
}


?>
</div>


<br><br>

</body>

</html>