<nav class="navbar navbar-light navbar-expand-lg navigation-clean" style="background: rgb(2,21,35);color: rgb(255,255,255);">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Takalo-Takalo</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2" style="color: rgb(255,255,255);background: #ffffff;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon" style="color: rgb(255,255,255);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <form class="d-xl-flex flex-grow-1 flex-wrap"  action="search" method="POST"  style="height: 40px;"><i class="fa fa-search" style="font-size: 16px;margin-left: 5%;margin-top: 2%;"></i><input type="search" style="margin-left: 2%;border-style: none;border-radius: 9px;height: 90%;" name="tap" placeholder="Recherche" autocomplete="on">
                    <p class="d-inline-flex flex-grow-1 flex-wrap" style="color: rgba(255,255,255,0.55);margin-left: 3%;height: 30px;margin-top: 1%;width: 61;margin-bottom: 18px;">Categorie</p><select class="d-inline-flex flex-grow-1 flex-wrap" style="margin-left: 1%;border-radius: 6px;height: 90%;" name="categ">
                        <option value="Tous">Tous</option>
                        <?php
                        foreach($cat as $c)
                            {
                        ?>
                            <option value="<?php $c['nomCat']; ?>"><?php echo $c['nomCat']; ?></option>
                        <?php
                            }
                        ?>
                    </select><button class="btn btn-primary flex-grow-1 flex-wrap" type="submit" style="background: rgb(196,200,230);color: rgb(54,53,64);margin-left: 2%;border-style: none;height: 90%;">Valider</button>
                </form>
                <ul class="navbar-nav ms-auto" style="padding-left:50px;">
                    <li class="nav-item"><a class="nav-link active" style="color:white;" href="profile">Profile (<?php echo $nom; ?>)</a></li>
                    <li class="nav-item"><a class="nav-link" style="color:white;" href="proposition">Liste Echange</a></li>
                </ul>
            </div>
        </div>
    </nav>