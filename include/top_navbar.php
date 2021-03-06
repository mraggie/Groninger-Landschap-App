<nav class="navbar navbar-top-home fixed-top">
        <div class="container navtop">
          <div class="row justify-content-between">
            <div class="col-auto mr-auto">
              <a onclick="goBack()">
                <i class="fas fa-arrow-left"></i></a>
                <strong id="paginatitel"></strong>
            </div>
            <div class="col-auto">
              <a href="shop.php" data-transition="slide" rel="external"><img src="assets/images/icons/winkel.svg" class="jumbo-img-top" alt="..."></a>
              <a href="" data-transition="slide" rel="external" data-toggle="modal" data-target="#UpgradeModal"><img src="assets/images/icons/bell.svg" class="jumbo-img-top" alt="..."></a>
            </div>
          </div>
        </div>
    </nav>
    <div class="modal fade" id="UpgradeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header modal-shop-header">
                  <h5 class="modal-title" id="exampleModalLabel">Meldingen</h5>
                  <button type="button" class="close close-shop" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>

            <div class="modal-body">
                <p>
                   <a href="fotowedstrijd" class="melding" data-transition="slide" rel="external">Je loopt nu in de buurt van het Iwema steenhuis, dat is een <a href="fotowedstrijd">fotowedstrijd!</a></a><br><br>
                   <a href="qr-scanner" class="melding" data-transition="slide" rel="external">Kijk goed op je kaart, kijk goed om je heen! Een <a href="qr-scanner">QR-code</a><a href="qr-scanner" class="melding" data-transition="slide" rel="external"> bevindt zich in jouw buurt!</a></a> <br><br>
                   <a href="foto-overzicht" class="melding" data-transition="slide" rel="external">Nog geen foto ingezonden voor de foto wedstrijd? <a href="foto-overzicht">Doe het snel</a><a href="foto-overzicht" class="melding" data-transition="slide" rel="external"> en verzamel zoveel mogelijk stemmen!</a></a> <br><br>
                   <a href="groep" class="melding" data-transition="slide" rel="external">Je bent uitgenodigd voor de groep: Ontbijtgranen en melk. Ga snel naar <a href="groep">groepen</a><a href="groep" class="melding" data-transition="slide" rel="external"> om de uitnodiging te bekijken!</a></a>
                </p>
            </div>

            <div class="modal-footer">
            <a href="" data-transition="slide" rel="external"><button type="button" class="btn btn-secondary btn-info-shop" data-dismiss="modal">Sluit meldingen</button></a>
            </div>
          </div>
      </div>
    </div>
  <div class="app-breaks">
