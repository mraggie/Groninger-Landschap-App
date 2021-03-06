<!DOCTYPE html>
<html lang="en">
<?php include "include/head.php"; ?>
<?php include "include/top_navbar.php"; ?>
<?php
  include('include/db-connect.php');

  $groepID = $_GET['id'];
  $groepnieuw = $db->prepare("SELECT id, groepsnaam, groepsfoto FROM groep WHERE id = :id");
  $groepnieuw->execute(array(':id' => $groepID));


  ?>

  <?php foreach($groepnieuw as $groep): ?>

<title><?php echo $groep[1]; ?></title>
<?php endforeach; ?>
<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-12">
            <div class="card groepborder">
                <div class="card-body">

                  <h3 class="card-groep-title"> Nieuwe verzoeken (1)</h3>
                  <hr>
                  <img class="routelid verzoek" src="assets/images/profile-picture.png" alt="route afbeelding">
                  <p class=  "lidnaam"> <b> Klara Koe </b>
                  <br>
                  Level 5
              </p>

              <br>

              <div class="switch-field nieuweverzoeken">
                <input type="radio" id="radio-one" name="switch-one" value="Weigeren" checked/>
                <label for="radio-one">Weigeren</label>
                <input type="radio" id="radio-two" name="switch-one" value="Accepteren" />
                <label for="radio-two">Accepteren</label>
              </div>
<br>
<br>
                    <h3 class="card-groep-title"> Recente Activiteiten</h3>
                    <hr>


                    <div class="container">
                    <div class="row">
                    <div class="col-sm groepinformatie ">
                      <h6><b>Speurtocht door het landschap </b></h6>
                        <img class="routepin" src="assets/images/pin.png" alt="route afbeelding"><p class="groepfont"><?php echo $groep[1]; ?> </p>
                      <br>
                <p class="groeprouteinfo"> 14:00 -15:00 </p>
                <p class="groeproutetijd"> 45 min </p>
                  <br>
                      <img class="routepin" src="assets/images/pin.png" alt="route afbeelding"><p class="groepfont"> Startpunt: Ruiterdiep (Groninger Landschap) </p>

  <img class="routegroep" src="assets/images/groepsfotos/<?php echo $groepID; echo $groep[2]; ?>" alt="route afbeelding">
  <br>
<br>
  <div class="input-group">
  <div class="input-group-prepend">
    <form class="form-horizontal form-label-left" id="add-avatar" action="functions/functions.php" method="post" enctype="multipart/form-data" name="add-avatar" align="left">
      <input type="hidden" name="groepID" value="<?php echo $groepID; ?>">
    <input type="submit" class="input-group-text" name="add-avatar" value="Uploaden">
    <!-- <span class="input-group-text" id="img">Upload</span> -->
  </div>
  <div class="custom-file">

    <input type="file" class="custom-file-input" id="image" name="image" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Hier uploaden</label>
  </form>
  </div>
</div>



  <br>
  <h6><b>Leden</b></h6>
  <hr>


  <div class="groepleden">
  <img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
  <p class=  "lidnaam"> <b> Jij </b>
  <br>
Beheerder


  <br>
  <div class="progress progressbeheerder">
    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
  </div>
  <br>
  <br>
  <br>
</div>


<div class="groepleden">
<img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
<p class=  "lidnaam"> <b> Jij </b>
<br>
Lid
<button type="button" class="btn btn-group blue groepverwijder">Verwijder</button></p>

<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
<br>
<br>
</div>


<div class="groepleden">
<img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
<p class=  "lidnaam"> <b> Jij </b>
<br>
Lid
<button type="button" class="btn btn-group blue groepverwijder">Verwijder</button></p>

<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
<br>
<br>
</div>


<div class="groepleden">
<img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
<p class=  "lidnaam"> <b> Jij </b>
<br>
Lid
<button type="button" class="btn btn-group blue groepverwijder">Verwijder</button></p>

<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
<br>
<br>
</div>


<div class="groepleden">
<img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
<p class=  "lidnaam"> <b> Jij </b>
<br>
Lid
<button type="button" class="btn btn-group blue groepverwijder">Verwijder</button></p>

<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
<br>
<br>
</div>


<div class="groepleden">
<img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
<p class=  "lidnaam"> <b> Jij </b>
<br>
Lid
<button type="button" class="btn btn-group blue groepverwijder">Verwijder</button></p>

<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
<br>
<br>
</div>


<div class="groepleden">
<img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
<p class=  "lidnaam"> <b> Jij </b>
<br>
Lid
<button type="button" class="btn btn-group blue groepverwijder">Verwijder</button></p>

<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
<br>
<br>
</div>


<div class="groepleden">
<img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
<p class=  "lidnaam"> <b> Jij </b>
<br>
Lid
<button type="button" class="btn btn-group blue groepverwijder">Verwijder</button></p>

<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
<br>
<br>
</div>


<div class="groepleden">
<img class="routelid" src="assets/images/profile-picture.png" alt="route afbeelding">
<p class=  "lidnaam"> <b> Jij </b>
<br>
Lid
<button type="button" class="btn btn-group blue groepverwijder">Verwijder</button></p>

<br>
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<br>
<br>
</div>









                  </div>
<button type="button" class="btn btn-group blue groepverlaten">Groep verlaten</button></p>


<br>

</div>


</div>
</div>

<?php include "include/bottom_navbar.php"; ?>
<?php include "include/scripts.php"; ?>
</body>
</html>
