<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../layout/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../layout/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="../../css/style.css"/>
</head>

<body style="background:url(IMG_2647.jpg); background-size: 1500px auto; background-repeat:no-repeat">
<?php
include 'UserNavBar.php';
?>
  <div class="contaDDiv" style="margin:auto; background:rgba(0,0,0,0.4)" class="contaDDiv">
  
        <p class="Addoda">Special Order</p>

    <form class="productform" style="text-align: -webkit-center;" action="OrderCode.php" enctype="multipart/form-data" method="post">

        <img src="placeholder.png" id="img" />
                <br />
        <input class="form-control" id="file" type="file" name="image" onChange="imgchange(this)" autofocus/>
        
       <input class="form-control" type="text" name="productname" placeholder="Enter Product's Name"/>
        
       <textarea class="form-control" type="text" name="description" placeholder="Description.."></textarea>
       
       <div class="multiselect">
    <div class="selectBox" id="selectbbooxx" onclick="showCheckboxes()">
      <select>
        <option>Categories</option>
      </select>
      <div class="overSelect"></div>
    </div>
    <div id="checkboxes">
      <label for="one">
        <input type="checkbox" id="one" name="1"/> Jewelry</label>
      <label for="two">
        <input type="checkbox" id="two" name="2"/> Medals</label>
      <label for="three">
        <input type="checkbox" id="three" name="3"/> Clothes</label>
      <label for="four">
        <input type="checkbox" id="four" name="4"/> Bags</label>
      <label for="five">
        <input type="checkbox" id="five" name="5"/> Toys</label>
        <label for="six">
        <input type="checkbox" id="six" name="6"/> Paintings</label>
      <label for="seven">
        <input type="checkbox" id="seven" name="7"/> Paper Art</label>
        <label for="eight">
        <input type="checkbox" id="eight" name="8"/> Portrait</label>
    </div>
  </div>
        <input type="submit" class="btn btn-primary btn-block" value="Submit"/>
    </form>
  </div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

</script>


    <script src="jquery/jquery-3.1.0.min.js"></script>
    <script>

        function imgchange(f) {
            var filePath = $('#file').val();
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img').attr('src', e.target.result);
            };
            reader.readAsDataURL(f.files[0]);
        }


    </script>
</body>
</html>
