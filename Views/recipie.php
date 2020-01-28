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
            <p class="discover_text" >Discover</p>
            <img src="../Public/demo/dicover.svg" alt="ERROR IMG">
        </button>

        <button class="button_favourite" style="margin-left: 15em; margin-right: 15em;">
            <p class="discover_text" >Favourite</p>
            <img src="../Public/demo/star.svg" alt="ERROR IMG">
        </button>

            <a href='?page=profile&email=<?=$_SESSION['email']?>'>
        <button class="button_profile">
            <p class="discover_text" >Profile</p>
            <img src="../Public/demo/profile.svg" alt="ERROR IMG">
        </button>
        </a>

    </div>

    <div class = "recipie_grid">

      <div>
          <div class = "row">

            <!-- <?= $rec->getName();?> -->
            <p class="recipie_header" style="margin: 0em ; margin-left: 1em; margin-right: 1em; width: 3em;"><?= $rec->getName();?></p>
            <button style="width: 10em; background: transparent; margin-right: 0em; margin-left: 4em;">
            <img src="../Public/demo/profile.svg" alt="">
            </button>


          </div>


          <p class="recipie_description">
            <?=
              $rec->getDescription();
            ?>
          </p>

      </div>

      <div>


        <div class = "row">

          <button style="width: 7em; height: 7em; background: transparent; margin-right: 0em; margin-left: 3em;">
            <img src="../Public/demo/empty_star.svg", style="margin-left: 0em">
          </button>

          <img src="../Public/demo/<?=$rec->getImage();?>" style="margin-left: 1em; border-radius: 1em; width: 25em">
          

        </div>

    </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>

</html>

<script>

  function foo(){

    const apiUrl = "http://localhost:8000";
    $.ajax({
      url : apiUrl + '/?page=like',
      dataType : 'json'
    })
      .done((res) => {

        });
    });

</script>