    <h1 style="text-align: center;margin-top: 3%;">Admin Zone</h1>
    <section style="margin-top: 4%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div style="height: 232px;background: #ffffff;box-shadow: 10px 11px 18px rgba(33,37,41,0.22);padding: 39px;">
                        <p style="color: rgb(33, 37, 41);"><strong>Nombre de personne inscrit :</strong></p>
                        <p style="color: rgb(33, 37, 41);"><strong>Transaction :</strong></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="height: 232px;background: #ffffff;box-shadow: 10px 11px 18px rgba(33,37,41,0.22);">
                        <?php
                            foreach($objets as $element)
                            {
                        ?>
                        <div style="padding: 19px;background: #fffef5;box-shadow: 0px 8px 20px rgba(33,37,41,0.28);margin-bottom: 5%;height: 323px;"><img class="float-start d-lg-flex" style="width: 50%;height: 229px;">
                            <div class="float-start" style="margin-left: 5%;margin-top: 4%;">
                                <p class="float-none d-lg-flex justify-content-start" style="font-weight: bold;">Produit : <?php echo $element['nom']; ?></p>
                                <p class="float-none d-lg-flex justify-content-start" style="font-weight: bold;">Categorie :  <?php echo $element['nomCat']; ?></p>
                                <p class="float-none d-lg-flex justify-content-start" style="font-weight: bold;">Prix : <?php echo $element['valeur']; ?> Ar</p>
                                <p class="float-none d-lg-flex justify-content-start" style="font-weight: bold;">Proprio : <?php echo $element['userName']; ?></p>
                                <button class="btn btn-primary" type="button" style="background: rgb(253,13,56);border-style: none;">Supprimer</button>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
 