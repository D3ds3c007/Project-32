    <h1 style="text-align: center;margin-top: 4%;font-weight: bold;">Description</h1>
    <section style="margin-top: 4%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="d-xl-flex justify-content-xl-center" style="height: 392px;background: rgba(255,255,255,0);"><img class="d-xl-flex justify-content-xl-center" style="width: auto;height: 100%;" src="<?php echo base_url() ?>assets/img/ITU_icon_1.png"></div>
                </div>
                <div class="col-md-6">
                    <div style="height: 392px;background: #f5f5f5;padding: 36px;">
                        <h1 style="font-size: 29px;text-align: left;">Detail</h1>
                        <p style="margin-top: 6%;"><strong>Produit : <?php echo $objet['nom']; ?></strong></p>
                        <p><?php echo $objet['descri']; ?></p>
                        <p>Prix : <?php echo $objet['valeur']; ?></p>
                        <p><strong>Proprio : <?php echo $objet['userName']; ?></strong></p>
                        <form><button class="btn btn-primary" type="button">Echanger</button></form>
                    </div>
                </div>
            </div>
        </div>
    </section>
