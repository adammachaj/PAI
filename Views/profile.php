<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Dynut</title>
  


  <link rel="stylesheet" href="../Public/css/style.css">

</head>


<body>


    <div class=".Web">
        
        <div class="main_buttons">

            <a href="?page=main_page">
            <button class="button_discover" style="margin-right: 20em;">
                <p class="discover_text" >DISCOVER</p>
                <img src="../Public/demo/dicover.svg" alt="ERROR IMG">
            </button>
            </a>

            <button class="button_favourite" style="margin-left: 20em;">
                <p class="discover_text" >FAVOURITE</p>
                <img src="../Public/demo/dicover.svg" alt="ERROR IMG">
            </button>


        </div>

        <div class="profile_grid">

            <div>
                <img src="../Public/demo/profile_big.svg", style="margin-right: 10em; margin-bottom: 0em; margin-left: 1em;">
                <p class="nickname", style="margin-top: 0em; margin-bottom: 0.3em;"><?=$rec->getName();?></p>
                <p class="bio_header", style="margin-top: 0em;">Bio</p>
                <p class="bio_description">Hello world</p>

            </div>
    
            <div>

            <?php foreach($images as $image): ?>
        <a href='?page=recipie&id=<?=$image['Recipie_ID']?>'>
        <div>
            <img src=..//Public//demo//<?= $image["image"] ?> style="width: 15em; margin-bottom:3em">
        </div>
        </a>

        <?php endforeach ?>
            </div>

            <div style="margin-left: 2em, margin-top: 4em">

            
                <a href='?page=new_recipie'>
                    <p class='nickname' style='font-size: 2em'>New Recipie</p>
                </a>

            </div>

        </div>

    </div> 

</body>

</html>