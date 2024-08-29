<!-- baca status terakhir PINTU AIR -->
<?php 
  // include koneksi
  include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>IOT MONITORING IRIGASI PERSAWAHAN</title>

    <script type="text/javascript">

      // CARD PINTU AIR 1-------------------------------------------------------------
      
      function ubahstatus1(value)
      {
        if(value==true) value="ON";
        else value= "OFF";
        document.getElementById('status1').innerHTML = value;
        // ajax relay_______________________

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function()
        {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {
            // ambilrespon 
            document.getElementById('status1').innerHTML = xmlhttp.responseText;
          }
        }
        // execute file php untuk merubah nilai
        xmlhttp.open("GET", "relay.php?stat=" + value, true);
        // kirim data
        xmlhttp.send();

      }
       //CARD PINTU AIR 2-------------------------------------------------------------

      function ubahstatus2(value)
      {
        if(value==true) value="ON";
        else value= "OFF";
        document.getElementById('status2').innerHTML = value;

        // ajax relay_______________________

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function()
        {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {
            // ambilrespon 
            document.getElementById('status2').innerHTML = xmlhttp.responseText;
          }
        }
        // execute file php untuk merubah nilai
        xmlhttp.open("GET", "relay2.php?stat=" + value, true);
        // kirim data
        xmlhttp.send();
      }

        //CARD PINTU AIR 3-------------------------------------------------------------

      function ubahstatus3(value)
      {
        if(value==true) value="ON";
        else value= "OFF";
        document.getElementById('status3').innerHTML = value;

        // ajax relay_______________________

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function()
        {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {
            // ambilrespon 
            document.getElementById('status3').innerHTML = xmlhttp.responseText;
          }
        }
        // execute file php untuk merubah nilai
        xmlhttp.open("GET", "relay3.php?stat=" + value, true);
        // kirim data
        xmlhttp.send();
      }
// __________ajax posisi servo 1
      function ubahposisi1(value)
      { 
        document.getElementById('posisi1').innerHTML = value;


        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function()
        {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {
            // ambilrespon 
            document.getElementById('posisi1').innerHTML = xmlhttp.responseText;
          }
        }
        // execute file php untuk merubah nilai
        xmlhttp.open("GET", "servo.php?pos=" + value, true);
        // kirim data
        xmlhttp.send();

      }
      // __________ajax posisi servo 2
      function ubahposisi2(value)
      { 
        document.getElementById('posisi2').innerHTML = value;


        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function()
        {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {
            // ambilrespon 
            document.getElementById('posisi2').innerHTML = xmlhttp.responseText;
          }
        }
        // execute file php untuk merubah nilai
        xmlhttp.open("GET", "servo2.php?pos=" + value, true);
        // kirim data
        xmlhttp.send();

      }
      // __________ajax posisi servo 3
      function ubahposisi3(value)
      { 
        document.getElementById('posisi3').innerHTML = value;


        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function()
        {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {
            // ambilrespon 
            document.getElementById('posisi3').innerHTML = xmlhttp.responseText;
          }
        }
        // execute file php untuk merubah nilai
        xmlhttp.open("GET", "servo3.php?pos=" + value, true);
        // kirim data
        xmlhttp.send();

      }

    </script>



  </head>
  <body>
      <!-- JUDUL -->
    <div class="container" style="text-align: center; padding-top: 20px;">
      <h2>MONITORING IRIGASI PERSAWAHAN <br>With Nodemcu ESP8266</h2>
    </div>
         <!-- BATASJUDUL -->
        <?php
        include "ad1.php";
        ?>
          <!-- __________________CARD RELAY 1___________________-->
        <div class="container" style="display: flex; justify-content: center; padding-top: 25px">
           <div class="card text-black mb-3" style="width: 20rem; margin-right: 10px;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: red; color: white;">PINTU AIR 1</div>
                <div class="card-body">
                  <div class="form-check form-switch" style="font-size: 50px;">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onchange="ubahstatus1(this.checked)" <?php 
                    if($relay==1 && $id==1) echo "checked";
                  ?>>
                  <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status1"><?php 
                    if($relay==1 && $id==1) echo "ON"; else echo "OFF";
                  ?> </span>  </label>
                  </div>
                </div>
          </div>
    <!--__________ CARD servo 1 _____________ -->

          <div class="card text-black mb-3" style="width: 20rem;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: blue; color: white;">DERAJAT PINTU AIR</div>
                <div class="card-body">
                  <div style="text-align: center; font-size: 20px;">
                   <label for="customRange1" class="form-label">Posisi servo <span id="posisi1"> <?php echo $servo; ?> </span> derajat</label>
                  <input type="range" class="form-range" id="customRange1" min="0" max="180" step="1" value="<?php echo $servo; ?>" oninput="ubahposisi1(this.value)">
                  </div>
                </div>
          </div> <!-- BATAS CARD servo -->
        </div>
        <?php
        include "ad2.php";
        ?>
        <!-- __________________CARD RELAY 2___________________-->
        <div class="container" style="display: flex; justify-content: center; padding-top: 25px">
           <div class="card text-black mb-3" style="width: 20rem; margin-right: 10px;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: red; color: white;">PINTU AIR 2</div>
                <div class="card-body">
                  <div class="form-check form-switch" style="font-size: 50px;">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onchange="ubahstatus2(this.checked)" <?php 
                    if($relay==1) echo "checked";
                  ?>>
                  <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status2"><?php 
                    if($relay==1) echo "ON"; else echo "OFF";
                  ?></span>  </label>
                  </div>
                </div>
          </div>
        <!-- BATAS CARD RELAY -->
        <!--__________ CARD servo 2 _____________ -->

          <div class="card text-black mb-3" style="width: 20rem;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: blue; color: white;">DERAJAT PINTU AIR</div>
                <div class="card-body">
                  <div style="text-align: center; font-size: 20px;">
                  <label for="customRange1" class="form-label">Posisi servo <span id="posisi2"> <?php echo $servo; ?> </span> derajat</label>
                  <input type="range" class="form-range" id="customRange1" min="0" max="180" step="1" value="<?php echo $servo; ?>" oninput="ubahposisi2(this.value)">
                  </div>
                </div>
          </div> <!-- BATAS CARD servo -->
        </div>
        <?php
        include "ad3.php";
        ?>
          <!-- __________________CARD RELAY 3___________________-->
        <div class="container" style="display: flex; justify-content: center; padding-top: 25px">
           <div class="card text-black mb-3" style="width: 20rem; margin-right: 10px;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: red; color: white;">PINTU AIR 3</div>
                <div class="card-body">
                  <div class="form-check form-switch" style="font-size: 50px;">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" onchange="ubahstatus3(this.checked)" <?php
                    if($relay==1) echo "checked";
                  ?>>
                  <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status3"><?php 
                    if($relay==1) echo "ON"; else echo "OFF";
                  ?></span>  </label>
                  </div>
                </div>
          </div>
         <!-- BATAS CARD RELAY -->
        <!--__________ CARD servo 3 _____________ -->

          <div class="card text-black mb-3" style="width: 20rem;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: blue; color: white;">DERAJAT PINTU AIR</div>
                <div class="card-body">
                  <div style="text-align: center; font-size: 20px;">
                   <label for="customRange1" class="form-label">Posisi servo <span id="posisi3"> <?php echo $servo; ?> </span> derajat</label>
                  <input type="range" class="form-range" id="customRange1" min="0" max="180" step="1" value="<?php echo $servo; ?>" oninput="ubahposisi3(this.value)">
                  </div>
                </div>
          </div> <!-- BATAS CARD servo -->
        </div>
        

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>