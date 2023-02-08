    <h1 class="text-center" style="font-family: Teko, sans-serif;font-weight: bold;margin-top: 3%;">Nom</h1>
    <section>
        <div class="container">
            <div class="row" style="margin-top: 5%;">
                <div class="col-md-7 col-lg-6 offset-lg-0">
                    <h5 class="text-center"><strong>Your Product</strong></h5>
                    <?php
                        foreach($objets as $element)
                        {
                    ?>
                        <div style="height: 122px;background: #f5f5f5;border-radius: 10;box-shadow: 9px 6px 20px 0px rgba(44,44,44,0.21);margin-top: 32px;padding-left: 10%;padding-top: 2%;"><img class="float-end" style="margin-right: 4%;width: auto;height: 93px;" src="<?php echo base_url(); ?>assets/img/ITU_icon_1.png">
                            <p style="width: 50%;color: rgb(7,43,69);"><?php echo $element['nom']; ?></p>
                            <p style="width: 50%;color: rgb(7,43,69);"><?php echo $element['descri']; ?></p>
                            <p class="text-center float-end" style="width: 50%;color: rgb(7,43,69);"><?php echo $element['valeur']; ?></p>
                            <!-- <p style="width: 50%;color: rgb(7,43,69);">Etat</p> -->
                        </div>
                    <?php
                        }
                    ?>
                   
                </div>
                <div class="col-md-4 offset-md-1 offset-lg-2">
                    <div>
                        <form method="post">
                            <h5 class="text-center"><strong>Insert Product</strong></h5><input class="form-control" type="text" name="nom" placeholder="Nom" required="" style="margin-top: 5%;"><input class="form-control" type="text" name="description" placeholder="Description" required="" style="margin-top: 5%;">
                            <p style="margin-top: 3%;margin-bottom: 1%;">Categorie</p><select name="categori">
                                <option value="12" selected="">Cat 1</option>
                                <option value="13">This is item 2</option>
                                <option value="14">This is item 3</option>
                            </select><input class="form-control form-control-lg" type="number" min="1" placeholder="Prix" name="prix" required="" style="margin-top: 5%;">
                        </form>
                    </div><input type="file" style="margin-top: 5%;"><button class="btn btn-primary text-center" type="submit" style="margin-top: 5%;width: 45%;">Button</button>
                </div>
            </div>
        </div>
    </section>
    <!-- <footer class="footer-clean" style="margin-top: 5%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Echange</a></li>
                        <li><a href="#">Chating</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Team</h3>
                    <ul>
                        <li><a href="#">Personne1</a></li>
                        <li><a href="#">Personne 2</a></li>
                        <li><a href="#">Personne 3</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Takalo-Takalo © 2023</p>
                </div>
            </div>
        </div>
    </footer> -->
   