<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Dynut</title>
  


  <link rel="stylesheet" href="../Public/css/style.css">

</head>



<body>

    <?php

        if($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'user'){
            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=login");
        }

    ?>

</div class=".Web">
    

    <div class="main_buttons">
    

        <button class="button_discover">
            <p class="discover_text" >DISCOVER</p>
            <img src="../Public/demo/dicover.svg" alt="ERROR IMG">
        </button>


        <button class="button_favourite" style="margin-left: 10em; margin-right: 5em;">
            <p class="discover_text" >FAVOURITE</p>
            <img src="../Public/demo/star.svg" alt="ERROR IMG">
        </button>


        <a href='?page=profile&email=<?=$_SESSION['email']?>'>
        <button class="button_profile">
            <p class="discover_text" >Profile</p>
            <img src="../Public/demo/profile.svg" alt="ERROR IMG">
        </button>
        </a>


    </div>

    <div class="main_grid">


    <?php foreach($images as $image): ?>
        <a href='?page=recipie&id=<?=$image['Recipie_ID']?>'>
        <div>
            <img src=..//Public//demo//<?= $image["image"] ?> style="width: 16em; margin-bottom:3em">
        </div>
        </a>

        <?php endforeach ?>


    </div>


    <a href='?page=logout'>
    <button>
        <p class = 'nickname'>Logout</p>
    </button>
    </a>




</body>

</html>

