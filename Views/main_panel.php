<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Dynut</title>
  


  <link rel="stylesheet" href="../Public/css/style.css">

</head>



<body>


</div class=".Web">
    

    <div class="main_buttons">

        <button class="button_discover">
            <p class="discover_text" >DISCOVER</p>
            <img src="../Public/demo/dicover.svg" alt="ERROR IMG">
        </button>

        <button class="button_discover" style="margin-left: 10em; margin-right: 10em;">
            <p class="discover_text" >DISCOVER</p>
            <img src="../Public/demo/dicover.svg" alt="ERROR IMG">
        </button>

        <button class="button_discover">
            <p class="discover_text" >DISCOVER</p>
            <img src="../Public/demo/dicover.svg" alt="ERROR IMG">
        </button>

    </div>

    <div class="main_grid">


    <?php foreach($images as $image): ?>

        <div>
            <img src=..//Public//demo//<?= $image["image"] ?>>
        </div>

        <?php endforeach ?>


<!-- 
        <div>
            <img src="../Public/demo/grid.svg">
        </div>

        <div>
            <img src="../Public/demo/grid.svg">
        </div>

        <div>
            <img src="../Public/demo/grid.svg">
        </div>

        <div>
            <img src="../Public/demo/grid.svg">
        </div>

        <div>
            <img src="../Public/demo/grid.svg">
        </div>

        <div>
            <img src="../Public/demo/grid.svg">
        </div> -->

    </div>




</body>

</html>

