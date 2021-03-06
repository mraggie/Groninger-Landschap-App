<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<?php include "include/top_navbar.php"; ?>
<?php
  include('include/db-connect.php');






  ?>
<title>Groep Aanmaken</title>
<body>
<div class="container groepruimte">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder groepborderboven">
                <div class="card-body">

                    <h3 class="card-groep-title">Naam van de groep</h3>

                    <br>

                    <div class="container">
                      <form method="post" action="functions/functions.php" name="add-group" enctype="multipart/form-data">
                      <input type="text" class="form-control"  placeholder="Naam invoeren" name="naamgroep" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">


                  </div>




</div>
            </div>
        </div>
    </div>
</div>


<div class="container groepruimte">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                    <h3 class="card-groep-title">Groepsomschrijving</h3>

                    <br>

                    <div class="container">
        <input type="text" class="form-control"  placeholder="Beschrijving invoeren" name="groepbeschrijving" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

                  </div>
</div>
            </div>
        </div>
    </div>
</div>

<div class="container groepruimte">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                    <h3 class="card-groep-title">Maximaal aantal personen</h3>

                    <br>

                    <div class="container">

                      <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton dropdownkleur" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      10
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">1</a>
      <a class="dropdown-item" href="#">2 </a>
      <a class="dropdown-item" href="#">3</a>
      <a class="dropdown-item" href="#">4</a>
      <a class="dropdown-item" href="#">5</a>
      <a class="dropdown-item" href="#">6</a>
      <a class="dropdown-item" href="#">7</a>
      <a class="dropdown-item" href="#">8</a>
      <a class="dropdown-item" href="#">9</a>
      <a class="dropdown-item" href="#">10</a>
      <a class="dropdown-item" href="#">11</a>
      <a class="dropdown-item" href="#">12</a>
      <a class="dropdown-item" href="#">13</a>
      <a class="dropdown-item" href="#">14</a>
      <a class="dropdown-item" href="#">15</a>
      <a class="dropdown-item" href="#">16</a>
      <a class="dropdown-item" href="#">17</a>
      <a class="dropdown-item" href="#">18</a>
      <a class="dropdown-item" href="#">19</a>
      <a class="dropdown-item" href="#">20</a>

    </div>
  </div>

                  </div>
</div>
            </div>
        </div>
    </div>
</div>


<div class="container groepruimte ">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                    <h3 class="card-groep-title">Toegankelijkheid</h3>

                    <br>


                    <div class="switch-field pl-4 py-2">
                        <input type="radio" id="radio-one" name="switch-one" value="Iedereen" checked/>
                        <label for="radio-one" style="font-size: 14px;">Iedereen</label>
                        <input type="radio" id="radio-two" name="switch-one" value="Niemand" />
                        <label for="radio-two" style="font-size: 14px;">Niemand</label>
                    </div>



</div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder groepborderboven">
                <div class="card-body">

                  <div class=" accepteervoorwaarden">

  <input type="checkbox" id="vehicle1" value="Bike">
  <label for="vehicle1"> Ik ga Akkoord met de <br> <a href="wet-regelgeving">Algemene voorwaarden</a></label><br>


                </div>




</div>
            </div>
        </div>
    </div>
</div>





<div class="container groepruimte">
    <div class="row justify-content-md-center">
        <div class="col-12">





                    <br>


<br>


                  <div class="container groepaanmaakbutton">



    <!-- <a href="" class="stretched-link" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><p class="bekijkenbutton">  </p></a> -->
    <input type="submit" name="add-group" value="Groep Aanmaken" class="bekijkenbutton">
  </form>
<br><br>
                </div>

        </div>
    </div>
</div>

<div class="modal fade" id="UpgradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-shop-header">
                <h5 class="modal-title" id="exampleModalLabel">Groep is aangemaakt</h5>
                <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Je bent momenteel de enige in de groep. Kies één van onderstaande opties om mensen uit te nodigen
                </p>
                <img class="zoekicon" src="assets/images/search.png" alt="route afbeelding">
                <p>
                  <p class="zoekinput">
                      <input type="text" class="zoeklidinput"  placeholder="Tik om een naam in te voeren ">
                  </p>

                  <img class="zoekicon" src="assets/images/instagram.png" alt="route afbeelding">
                  <p>
                    <p class="iconinput">
                        Uitnodigen via Instagram
                    </p>

                    <img class="zoekicon" src="assets/images/facebook.png" alt="route afbeelding">
                    <p>
                      <p class="iconinput">
                          Uitnodigen via Facebook
                      </p>


                      <img class="zoekicon" src="assets/images/at.png" alt="route afbeelding">
                      <p>
                        <p class="iconinput">
                            Uitnodigen via email
                        </p>

<div class="uitnodigenbutton">
<a href="groepbeheerder.php" button type="button" class="btn btn-group blue">Verder</button></a>
  <br>


</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">Annuleren</button>
            </div>
        </div>
    </div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.innerHTML === "Iedereen") {
    x.innerHTML = " Niemand!";
  } else {
    x.innerHTML = "Iedereen";
  }
}

$(document).ready(function () {
    $('.dropdown-toggle').dropdown();
});
</script>




<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>
