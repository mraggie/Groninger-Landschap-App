<!doctype html>
<html lang="en">
<?php include ($_SERVER['DOCUMENT_ROOT']. "/Groninger-Landschap-App/include/head.php"); ?>
<title>Instellingen</title>

  <body>
    <?php include "include/top_navbar.php"; ?>

    <div class="containter">
        <div class="row justify-content-center">
            <div class="card scoreborder img-setting">
                <div class="cardbody text-center">
                    <img src="assets/images/profile-picture.png" class="profile-picture my-4" alt="...">
                </div>
            </div>
            <div class="card scoreborder img-setting my-3">
                <div class="cardbody">
                    <h6 class="pt-4 pb-2 pl-4 instantie-wijzigen">Instantie wijzigen</h6>
                    <button class="btn dropdown-toggle ml-2 mb-4" type="button" id="instellingendropdown dropdownkleur" style="font-size: 14px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Groninger Landschap
                    </button>
                    <div class="dropdown-menu scoreborder" aria-labelledby="instellingendropdown">
                        <a class="dropdown-item dropdown-item-size" href="#">Staro Natuur en Buitengebied</a>
                        <a class="dropdown-item dropdown-item-size" href="#">Stichting IJssellandschap</a>
                        <a class="dropdown-item dropdown-item-size" href="#">GroenFront</a>
                    </div>
                </div>
            </div>
            <div class="card scoreborder img-setting">
                <div class="cardbody text-center">
                <div class="input-group input-group-sm my-4">
                    <input type="text" class="form-control" placeholder="••••••••••••••••" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                </div>
            </div>
            <div class="card scoreborder img-setting my-3">
                <div class="cardbody text-center">
                <div class="input-group input-group-sm my-4">
                    <input type="text" class="form-control" placeholder="meesvenema@info.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                </div>
            </div>

        </div>
    </div>


    
  
    <?php include "include/bottom_navbar.php"; ?>
    <?php include "include/scripts.php"; ?>
  </body>
</html>