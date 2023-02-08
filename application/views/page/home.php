    <h1 class="d-lg-flex justify-content-lg-center" style="margin-top: 3%;font-weight: bold;">Takalo-Takalo</h1>
    <div class="container" style="margin-top: 4%;">
        <div class="row">
            <div class="col-md-7 col-lg-7 offset-lg-0">
                <div>
                    <h5 class="text-center"><strong>Produits</strong></h5>
                    <?php
                        foreach($objets as $element)
                        {
                    ?>

                        <div style="padding: 19px;background: #fffef5;box-shadow: 0px 8px 20px rgba(33,37,41,0.28);margin-bottom: 5%;height: 281px;"><img class="float-start d-lg-flex" style="width: auto;height: 229px;" src="<?php echo base_url(); ?>assets/img/ITU_icon_1.png">
                            <div class="float-start" style="margin-left: 5%;margin-top: 4%;">
                                <p class="float-none d-lg-flex justify-content-start" style="font-weight: bold;"><?php echo $element['nom']; ?></p>
                                <p class="float-none d-lg-flex justify-content-start" style="font-weight: bold;"><?php echo $element['nomCat']; ?></p>
                                <p class="float-none d-lg-flex justify-content-start" style="font-weight: bold;"><?php echo $element['valeur']; ?></p>
                                <p class="float-none d-lg-flex justify-content-start" style="font-weight: bold;"><?php echo $element['userName']; ?></p><a href="exchange\<?php echo $element['idObjet']; ?>"><button class="btn btn-primary" type="button">Echanger</button></a><a href="detail/<?php echo $element['idObjet']; ?>" style="margin-top: 1%;font-size: 12px;"><br>Details<br><br></a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>

                    


                </div>
            </div>
            <div class="col-md-5 col-lg-4 offset-md-0 offset-lg-1">
                <div>
                    <form method="post">
                        <h5 class="text-center"><strong>Inserer Produit</strong></h5><input class="form-control" type="text" name="nom" placeholder="Nom" required="" style="margin-top: 5%;"><input class="form-control" type="text" name="description" placeholder="Description" required="" style="margin-top: 5%;">
                        <p style="margin-top: 3%;margin-bottom: 1%;">Categorie</p><select name="categori">
                            <option value="12" selected="">Cat 1</option>
                            <option value="13">This is item 2</option>
                            <option value="14">This is item 3</option>
                        </select><input class="form-control form-control-lg" type="number" min="1" placeholder="Prix" name="prix" required="" style="margin-top: 5%;">
                    </form><input type="file" style="margin-top: 5%;"><button class="btn btn-primary text-center" type="submit" style="margin-top: 5%;width: 45%;">Button</button>
                </div>
            </div>
        </div>
    </div>