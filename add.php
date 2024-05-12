<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>Document</title> 
</head>
<body>
    <div id="head">
    <p>
     <h1>   Kaohsiong Restaurant  </h1>  
    </p> 

    <img class="left1"  src="bunchaca.jpg" alt="">
    <img class="left1" src="bunbo.jpg" alt="">
    <img class="left1"  src="comtam.jpg" alt="">

    <img class="right1"  src="coconut.jpg" alt="">
    <img class="right1"  src="coffee.jpg" alt="">
    <img class="right1"  src="milktea.jpg" alt="">


    </div>

    <form action="index.php" method="get">
    <fieldset>
        <legend id="legend"> <h2> Menu </h2></legend>
        <div class="change "> <p>  Main food  
    <select name="mainfood"  onchange="$('#imageToSwap1').attr('src', this.options[this.selectedIndex].value);">
        <option value="comtam.jpg"> 碎米飯 350 </option>
        <option value="bunbo.jpg"> 顺化牛肉粉 340</option>
        <option value="bunchaca.jpg">魚米線 330</option>
    </select>        
   
    <br><br>
    <img id="imageToSwap1" class="profile" src="comtam.jpg">
    </p> 
    </div> 

    <div class="change" > <p> Beverage  
    <select name="drink" onchange="$('#imageToSwap2').attr('src', this.options[this.selectedIndex].value);">
        <option value="coffee.jpg">咖啡牛奶 120</option>
        <option value="coconut.jpg">椰子水 100</option>
        <option value="milktea.jpg"> 奶茶 80 </option>
    </select>
   
    <br><br>
    <img id="imageToSwap2" class="profile" src="coffee.jpg">
    </p> 

    <div class="change"> <p> Vegetable :     
    <span style="color:red">  西紅柿 20 </span>   <input type="number" name="cachua"  value="0" min="0" max="3"  style="width:2%;height:20px;"> 
    <span style="color:green">  黃瓜 20  </span>   <input type="number" name="dualeo"  value="0" min="0" max="3" style="width:2%;height:20px;"> 
    <span style="color:MediumSeaGreen"> 什錦菜 30 </span>   <input type="number" name="rau"  value="0" min="0" max="3" style="width:2%;height:20px;">    
    </p>
    </div>     

    <div class="change"> 
    <p>  Service fee:
    <input type="text" name="fee" value=" 50" id="text" style="width:2%;"> 
    </p>
    </div>  
    
    <button type="submit" id="submit"  style=" width: 20em;  height: 2em; margin-left:30px">submit</button>
</fieldset>
    </form>

</body>
</html>