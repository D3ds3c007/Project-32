
    <section style="margin-top: 3%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-5">
                    <div id="scroll-Your-product" style="height: 383px;background: #f7f7f7;padding: 22px;box-shadow: 6px 9px 9px rgba(33,37,41,0.27);">
                        <h5 style="text-align: center;box-shadow: 0px 0px;">Your Product</h5>
                        <div class="d-xl-flex align-items-xl-center" id="scrool-product" style="background: rgba(214,214,214,0);height: 260px;padding: 32px;box-shadow: 0px 0px;">
                           <?php
                            foreach($objetUser1 as $o1)
                            {
                                
                           ?>
                           <a href="..\validate\<?php echo $idUser; ?>\<?php echo $objetUser2['idUser']; ?>\<?php echo $o1['idObjet']; ?>\<?php echo $objetUser2['idObjet']; ?>">
                                <div data-bss-hover-animate="bounce" style="margin-right: 6%;box-shadow: 0px 0px;">
                                    <div style="box-shadow: 0px 0px;"><img src="<?php echo base_url();?>assets/img/ITU_icon_1.png" style="width: auto;height: 65px;box-shadow: 0px 0px;"></div>
                                    <p style="box-shadow: 0px 0px;"><?php echo $o1['nom']; ?></p>
                                </div>
                            </a>
                            <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6 offset-xl-1" style="padding: 8px;background: #f7f7f7;box-shadow: 6px 9px 9px rgba(33,37,41,0.27);">
                    <div class="float-start" style="height: 366px;background: rgba(255,255,255,0);"><img src="<?php echo base_url();?>assets/img/ITU_icon_1.png" style="width: auto;height: 344px;margin-right: 38px;"></div>
                    <div style="margin-right: 35%;margin-top: 10%;width: 519.104px;">
                        <p>Produit : <?php echo $objetUser2['nom']; ?></p>
                        <p class="d-flex">Description : <?php echo $objetUser2['descri']; ?></p>
                        <p>Prix : <?php echo $objetUser2['valeur']; ?></p>
                        <p>Prorio : <?php echo $objetUser2['userName']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section><button class="btn btn-primary d-xl-flex" type="button" style="margin-top: 3%;background: rgb(159,23,39);border-style: none;margin-left: 47%;">Annuler</button>
