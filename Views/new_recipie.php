<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>Dynut</title>
  


  <link rel="stylesheet" href="../Public/css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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

        <button class="button_profile">
            <p class="discover_text" >Profile</p>
            <img src="../Public/demo/profile.svg" alt="ERROR IMG">
        </button>

    </div>

    <div class = "recipie_grid">

      <div>
          <div class = "row">
            

          <input type="text" id="recipie_name">
            <!-- <p class="recipie_header" style="margin: 0em ; margin-left: 1em; margin-right: 1em; width: 3em;">Recipie</p> -->



          </div>


          <textarea id="desc" type="text" style="font-size: 3em; width: 10em; height: 8em"></textarea>
          <!-- <input type="text" style="font-size: 3em;"> -->

      </div>

      <div>



   
          <input type="file" id="pic" accept="image/*"> 
 
          <button style="width: 0em; height: 0em; background: transparent;">
            <img id="img1" style="width: 12em">
          </button>

          <div class="row">

            <p class="nickname" style="font-size: 3em; margin-top: 1.5em; margin-left: 3em;">Add new recipie</p>
            
            <button onclick="send()" style="width: 1; height: 1; background: transparent; margin-top: 3em;">
              <img src="../Public/demo/+.svg">
            </button>

          </div>


    </div>



    </div>


  <form id="form" action="?page=recipie_upload" method="post">
  
  </form>


  <input value= "<?=$_SESSION['id']?>" type='hidden' id='uID'>

</body>

</html>

<script>

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      
      reader.onload = function(e) {
        $('#img1').attr('src', e.target.result);
      }
      
      reader.readAsDataURL(input.files[0]);
    }
  }


  function send() {
    var desc = $('#desc').val();
    var image_path = $('#pic').val();
    var name = $('#recipie_name').val();
    var id = $('#uID').val();

    $('#form').html("<input name='desc' value='" + desc + "'> <input name='image_path' value='" + image_path + "'> <input name='recipie_name' value='" + name + "'> <input name='id' value='" + id + "'>'");    
    $('#form').submit();
  }

  $("#pic").change(function() {
    readURL(this);
  });

</script>