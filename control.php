<?php 
  // include koneksi
  include "koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - PETANI CERDAS</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="assets/css/shared/iconly.css">

<!-- AJAX -->
<script type="text/javascript">

      // CARD PINTU AIR 1-------------------------------------------------------------
      
      function ubahstatus1(value)
      {
        if(value==true){
            value="Terbuka";
            document.getElementById('sp1').innerHTML = "POSISI TERBUKA";
        }
        else{
            value= "Tertutup";
            document.getElementById('sp1').innerHTML = "POSISI TERTUTUP";
        }
        if(value == "Terbuka"){
            document.getElementById('ip1').style.backgroundColor = "blue";
        } else{
            document.getElementById('ip1').style.backgroundColor = "red";
        }
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
        if(value==true){
            value="Terbuka";
            document.getElementById('sp2').innerHTML = "POSISI TERBUKA";
        }
        else{
            value= "Tertutup";
            document.getElementById('sp2').innerHTML = "POSISI TERTUTUP";
        }
        if(value == "Terbuka"){
            document.getElementById('ip2').style.backgroundColor = "blue";
        } else{
            document.getElementById('ip2').style.backgroundColor = "red";
        }
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
        if(value==true){
            value="Terbuka";
            document.getElementById('sp3').innerHTML = "POSISI TERBUKA";
        }
        else{
            value= "Tertutup";
            document.getElementById('sp3').innerHTML = "POSISI TERTUTUP";
        }
        if(value == "Terbuka"){
            document.getElementById('ip3').style.backgroundColor = "blue";
        } else{
            document.getElementById('ip3').style.backgroundColor = "red";
        }
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

       //manualControl-------------------------------------------------------------

       function ubahstatus4(value)
      {
        if(value==true){
            value="Manual";
        }
        else{
            value= "Automatis"
        }
        document.getElementById('status4').innerHTML = value;

        // ajax relay_______________________

        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function()
        {
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
          {
            // ambilrespon 
            document.getElementById('status4').innerHTML = xmlhttp.responseText;
          }
        }
        // execute file php untuk merubah nilai
        xmlhttp.open("GET", "manualControl.php?stat=" + value, true);
        // kirim data
        xmlhttp.send();
      }

    </script>
<!-- /AJAX -->

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="index.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li
                class="sidebar-item active ">
                <a href="control.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Control</span>
                </a>
            </li>
            
           
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<!-- <div class="page-heading">
    <h3>Profile Statistics</h3>
</div> -->
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
            <?php
            include "ad1.php";
            ?>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <?php
                                    if($relay == 1){ ?>
                                        <div class="stats-icon mb-2" id="ip1" style="background-color:blue;">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="stats-icon mb-2" id="ip1" style="background-color:red;">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">PINTU AIR 1</h6>
                                    <h6 class="font-extrabold mb-0" id="sp1"><?php
                                    if($relay == 1)echo"POSISI TERBUKA";else echo"POSISI TERTUTUP"
                                    ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include "ad2.php";
                ?>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <?php
                                    if($relay == 1){ ?>
                                        <div class="stats-icon mb-2" id="ip2" style="background-color:blue;">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="stats-icon mb-2" id="ip2" style="background-color:red;">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">PINTU AIR 2</h6>
                                    <h6 class="font-extrabold mb-0" id="sp2"><?php
                                    if($relay == 1)echo"POSISI TERBUKA";else echo"POSISI TERTUTUP"
                                    ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include "ad3.php";
                ?>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <?php
                                    if($relay == 1){ ?>
                                        <div class="stats-icon mb-2" id="ip3" style="background-color:blue;">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    <?php }else{ ?>
                                        <div class="stats-icon mb-2" id="ip3" style="background-color:red;">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">PINTU AIR 3</h6>
                                    <h6 class="font-extrabold mb-0" id="sp3"><?php
                                    if($relay == 1)echo"POSISI TERBUKA";else echo"POSISI TERTUTUP"
                                    ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                    <h6 class="font-extrabold mb-0">112</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- BAGAN MONITORING TAMPILAN IRIGASI -->
                            <h4>CONTROLING</h4>
                        </div>
                        <div class="card-body">
                            <div>
        <!-- Manual Control -->
        <?php
        include "ad4.php";
        ?>
        <div class="container" style="display: flex; justify-content: center; padding-top: 25px">
           <div class="card text-black mb-3" style="width: 15rem; margin-right: 15px;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: red; color: white;">Manual Control</div>
                <div class="card-body">
                  <div class="form-check form-switch" style="font-size: 50px;">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault4" onchange="ubahstatus4(this.checked)" <?php 
                    if($manualControl==1) echo "checked";
                  ?>>
                  <label class="form-check-label" for="flexSwitchCheckDefault4"> <span id="status4" style="color:white;"><?php 
                    if($manualControl==1) echo "Manual"; else echo "Automatis";
                  ?> </span>  </label>
                  </div>
                </div>
          </div> 
        </div>
        <!-- /Manual Control -->
        <?php
        include "ad1.php";
        ?>
        <!-- __________________CARD RELAY 1___________________-->

        <div class="container" style="display: flex; justify-content: center; padding-top: 25px">
           <div class="card text-black mb-3" style="width: 15rem; margin-right: 15px;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: red; color: white;">PINTU AIR 1</div>
                <div class="card-body">
                  <div class="form-check form-switch" style="font-size: 50px;">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault1" onchange="ubahstatus1(this.checked)" <?php 
                    if($relay==1) echo "checked";
                  ?>>
                  <label class="form-check-label" for="flexSwitchCheckDefault1"> <span id="status1" style="color:white;"><?php 
                    if($relay==1) echo "Terbuka"; else echo "Tertutup";
                  ?> </span>  </label>
                  </div>
                </div>
          </div> 
        </div>

        <?php
        include "ad2.php";
        ?>
                     <!-- __________________CARD RELAY 2___________________-->
        <div class="container" style="display: flex; justify-content: center; padding-top: 25px">
           <div class="card text-black mb-3" style="width: 15rem; margin-right: 15px;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: red; color: white;">PINTU AIR 2</div>
                <div class="card-body">
                  <div class="form-check form-switch" style="font-size: 50px;">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault2" onchange="ubahstatus2(this.checked)" <?php 
                    if($relay==1) echo "checked";
                  ?>>
                  <label class="form-check-label" for="flexSwitchCheckDefault2"> <span id="status2" style="color:white;"><?php 
                    if($relay==1) echo "Terbuka"; else echo "Tertutup";
                  ?></span>  </label>
                  </div>
                </div>
          </div>
         <!-- BATAS CARD RELAY -->
        </div>

        <?php
        include "ad3.php";
        ?>
                     <!-- __________________CARD RELAY 3___________________-->
        <div class="container" style="display: flex; justify-content: center; padding-top: 25px">
           <div class="card text-black mb-3" style="width: 15rem; margin-right: 15px;">
              <div class="card-header" style="font-size: 30px; text-align: center; background-color: red; color: white;">PINTU AIR 3</div>
                <div class="card-body">
                  <div class="form-check form-switch" style="font-size: 50px;">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault3" onchange="ubahstatus3(this.checked)" <?php
                    if($relay==1) echo "checked";
                  ?>>
                  <label class="form-check-label" for="flexSwitchCheckDefault3"> <span id="status3" style="color:white;"><?php 
                    if($relay==1) echo "Terbuka"; else echo "Tertutup";
                  ?></span>  </label>
                  </div>
                </div>
          </div>
         <!-- BATAS CARD RELAY -->
        </div>







                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Profile Visit</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-primary" width="32" height="32" fill="blue"
                                            style="width:10px">
                                            <use
                                                xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Europe</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0">862</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-europe"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-success" width="32" height="32" fill="blue"
                                            style="width:10px">
                                            <use
                                                xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">America</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0">375</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-america"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi text-danger" width="32" height="32" fill="blue"
                                            style="width:10px">
                                            <use
                                                xlink:href="assets/images/bootstrap-icons.svg#circle-fill" />
                                        </svg>
                                        <h5 class="mb-0 ms-3">Indonesia</h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h5 class="mb-0">1025</h5>
                                </div>
                                <div class="col-12">
                                    <div id="chart-indonesia"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Comments</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/faces/5.jpg">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">Congratulations on your graduation!</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-md">
                                                        <img src="assets/images/faces/2.jpg">
                                                    </div>
                                                    <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <p class=" mb-0">Wow amazing design! Can you make another tutorial for
                                                    this design?</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="assets/images/faces/1.jpg" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">Usama</h5>
                            <h6 class="text-muted mb-0">@uusaamaa_</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Paper INFO</h4>
                </div>
                
                <P class="px-4 py-3"> PETANI adalah penjaga stabilitas negara Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</P>
               
                <!-- <div class="card-content pb-4">
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/4.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Hank Schrader</h5>
                            <h6 class="text-muted mb-0">@johnducky</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/5.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">Dean Winchester</h5>
                            <h6 class="text-muted mb-0">@imdean</h6>
                        </div>
                    </div>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="assets/images/faces/1.jpg">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1">John Dodol</h5>
                            <h6 class="text-muted mb-0">@dodoljohn</h6>
                        </div>
                    </div> -->
                    <div class="px-4">
                        <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Start Conversation</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Visitors Profile</h4>
                </div>
                <div class="card-body">
                    <div id="chart-visitors-profile"></div>
                </div>
            </div>
        </div>
    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

</body>

</html>
