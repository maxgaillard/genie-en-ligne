<?php
class TutorielVue extends Vue {
    ///////////////////////////////////
    // Section pour la vue des tutos//
    /////////////////////////////////
    public function afficheListeConsulter(){
        //Vue pour eleves
?>
        <div class="row">

            <?php
                    foreach($this->aListeTutos as $oTutoriel){
                        echo '<div class="col-md-4 portfolio-item">'
                        echo '<img class="img-responsive espaceAvant coinRond" src="../../images/video.jpg" alt="Mathématique" data-toggle="modal" data-target="#myModal1">'
                        echo '<h3 class="espaceApres"> <a href="#">La division</a></h3>'
                        echo '<p class="auteurDate">Jean Label, 10 octobre 2014</p> '
                        echo '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>'
                        echo '</div>'
                        }
                ?>
    <?php
    }



    ///////////////////////////////////
    // Section pour les tuteur//
    /////////////////////////////////
    
    public function afficheListeGererTuteur(){
        //Sans bouton approuver
?>
        <div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <div class="">

            </div>
        </div>
    </div>
</div>
<form >
    <div class="row">
        <div class="col-lg-12">
            <table id="tabRechercherTuto" class="table table-striped text-center">
                <tr>
                    <th class="text-center">Titre</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Date crée</th>
                    <th class="text-center">Statut</th>
                    <th class="text-center">Matière</th>
                    <th class="text-center">Niveau scolaire</th>
                    <th class="text-center">Action</th>
                </tr>
                <?php
                    foreach($this->aListeTutos as $oTutoriel){
                        echo '<tr>';
                            echo '<td id="txtTitre">'.$oTutoriel->getTitre().'</td>';
                            echo '<td id="txtType">'.$oTutoriel->getSorteTuto().'</td>';
                            echo '<td id="txtDateCree">'.$oTutoriel->getDateSoumis().'</td>';
                            echo '<td id="txtStatut">'.$oTutoriel->getTypeApprouver().'</td>';
                            echo '<td id="txtMatiere">'.$oTutoriel->getSorteMatiere().'</td>';
                            echo '<td id="txtNiveau">'.$oTutoriel->getNiveauScolaire().'</td>';
                            echo '<td>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/visualiser/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="visualiser" class="glyphicon glyphicon-play"></span>';
                                echo '</a>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/modifier/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="Modifier" class="glyphicon glyphicon-pencil"></span>';
                                echo '</a>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/supprimer/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="Supprimer" class="glyphicon glyphicon-remove"></span>';
                                echo '</a>';
                            echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div> <!-- .col-lg-12 -->
    </div> <!-- .row -->
</form>
<div class="col-sm-10 col-sm-offset-10">
    <button type="button" id="btnAjouterVideo" class="btn btn-success col-sm-offset-1">
    <span class="glyphicon glyphicon-plus"></span>Ajouter</button>
</div>
<?php
    }
    
    ///////////////////////////////////
    // Section pour les proffesseurs//
    /////////////////////////////////

    //gerer et voir tous les tuto de tour leur tuteur  
    public function afficheListeTutoTuteursProfesseur(){?>
        <div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <div class="">

            </div>
        </div>
    </div>
</div>
<form >
    <div class="row">
        <div class="col-lg-12">
            <table id="tabRechercherTuto" class="table table-striped text-center">
                <tr>
                    <tr>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Titre</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Date crée</th>
                        <th class="text-center">Matière</th>
                        <th class="text-center">Niveau scolaire</th>
                         <th class="text-center">Statut</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tr>
                <?php
                    foreach($this->aListeTutos as $oTutoriel){
                        echo '<tr>'; 
                            echo '<td id="txtNom">'.$oTutoriel->getNomTuteur().'</td>';                           
                            echo '<td id="txtTitre">'.$oTutoriel->getTitre().'</td>';
                            echo '<td id="txtType">'.$oTutoriel->getSorteTuto().'</td>';
                            echo '<td id="txtDateCree">'.$oTutoriel->getDateSoumis().'</td>';
                            echo '<td id="txtMatiere">'.$oTutoriel->getSorteMatiere().'</td>';
                            echo '<td id="txtNiveau">'.$oTutoriel->getNiveauScolaire().'</td>';
                            echo '<td id="txtStatut">'.$oTutoriel->getTypeApprouver().'</td>';
                            echo '<td>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/visualiser/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="visualiser" class="glyphicon glyphicon-play"></span>';
                                echo '</a>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/modifier/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="Modifier" class="glyphicon glyphicon-pencil"></span>';
                                echo '</a>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/supprimer/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="Supprimer" class="glyphicon glyphicon-remove"></span>';
                                echo '</a>';
                                
                            echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div> <!-- .col-lg-12 -->
    </div> <!-- .row -->
</form>
<div class="col-sm-10 col-sm-offset-10">
    <button type="button" id="btnAjouterVideo" class="btn btn-success col-sm-offset-1">
    <span class="glyphicon glyphicon-plus"></span>Ajouter</button>
</div>
<?php      //Avec bouton approuver
    }


    //gerer la liste des tuto fait par le proffesseur  
    public function afficheListeGererProfesseur(){?>
        <div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <div class="">

            </div>
        </div>
    </div>
</div>
<form >
    <div class="row">
        <div class="col-lg-12">
            <table id="tabRechercherTuto" class="table table-striped text-center">
                <tr>
                    <th class="text-center">Titre</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Date crée</th>
                    <th class="text-center">Matière</th>
                    <th class="text-center">Niveau scolaire</th>
                    <th class="text-center">Action</th>
                </tr>
                <?php
                    foreach($this->aListeTutos as $oTutoriel){
                        echo '<tr>';                            
                            echo '<td id="txtTitre">'.$oTutoriel->getTitre().'</td>';
                            echo '<td id="txtType">'.$oTutoriel->getSorteTuto().'</td>';
                            echo '<td id="txtDateCree">'.$oTutoriel->getDateSoumis().'</td>';
                            echo '<td id="txtMatiere">'.$oTutoriel->getSorteMatiere().'</td>';
                            echo '<td id="txtNiveau">'.$oTutoriel->getNiveauScolaire().'</td>';
                            echo '<td>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/visualiser/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="visualiser" class="glyphicon glyphicon-play"></span>';
                                echo '</a>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/modifier/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="Modifier" class="glyphicon glyphicon-pencil"></span>';
                                echo '</a>';
                                echo '<a href="'.WEB_ROOT.'/tutoriel/supprimer/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                    echo '<span title="Supprimer" class="glyphicon glyphicon-remove"></span>';
                                echo '</a>';
                                
                            echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </table>
        </div> <!-- .col-lg-12 -->
    </div> <!-- .row -->
</form>
<div class="col-sm-10 col-sm-offset-10">
    <button type="button" id="btnAjouterVideo" class="btn btn-success col-sm-offset-1">
    <span class="glyphicon glyphicon-plus"></span>Ajouter</button>
</div>
<?php      //Avec bouton approuver
    }

    //gerer la liste des tutos a prouver par proffesseur  
     public function afficheListeGererApprouverProfesseur(){?>
            <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
                <div class="">

                </div>
            </div>
        </div>
    </div>
    <form >
        <div class="row">
            <div class="col-lg-12">
                <table id="tabRechercherTuto" class="table table-striped text-center">
                    <tr>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Titre</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Date crée</th>
                        <th class="text-center">Matière</th>
                        <th class="text-center">Niveau scolaire</th>
                        <th class="text-center">Action</th>
                    </tr>
                    <?php
                        foreach($this->aListeTutos as $oTutoriel){
                            echo '<tr>';
                                echo '<td id="txtNom">'.$oTutoriel->getNomTuteur().'</td>';
                                echo '<td id="txtTitre">'.$oTutoriel->getTitre().'</td>';
                                echo '<td id="txtType">'.$oTutoriel->getSorteTuto().'</td>';
                                echo '<td id="txtDateCree">'.$oTutoriel->getDateSoumis().'</td>';
                                echo '<td id="txtMatiere">'.$oTutoriel->getSorteMatiere().'</td>';
                                echo '<td id="txtNiveau">'.$oTutoriel->getNiveauScolaire().'</td>';
                                echo '<td>';
                                    echo '<a href="'.WEB_ROOT.'/tutoriel/visualiser/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                        echo '<span title="visualiser" class="glyphicon glyphicon-play"></span>';
                                    echo '</a>';
                                    echo '<a href="'.WEB_ROOT.'/tutoriel/modifier/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                        echo '<span title="Modifier" class="glyphicon glyphicon-pencil"></span>';
                                    echo '</a>';
                                    echo '<a href="'.WEB_ROOT.'/tutoriel/supprimer/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                        echo '<span title="Supprimer" class="glyphicon glyphicon-remove"></span>';
                                    echo '</a>';
                                    echo '<a href="'.WEB_ROOT.'/tutoriel/approuver/'.$oTutoriel->getContenuId().'" class="btn btn-primary btn-xs">';
                                        echo '<span title="approuver" class="glyphicon glyphicon-ok"></span>';
                                    echo '</a>';
                                echo '</td>';
                            echo '</tr>';
                        }
                    ?>
                </table>
            </div> <!-- .col-lg-12 -->
        </div> <!-- .row -->
    </form>

    <?php
            //Avec bouton approuver
        }

    //////////////////////////////////////
    // Section pour tout les formulaires//
    /////////////////////////////////////
    public function afficheFormulaireCreationVideo(){?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Ajouter
                </h1>
                <form action="index.php" s="<?php echo WEB_ROOT;?>/tutoriel/creerVideo/" method="post" role="form">
                    <fieldset class="col-md-12">
                        <legend>Ajouter un vidéo</legend>
                        <div class="form-group">
                            <label>Titre</label>
                            <input id="titre" name="titre" class="form-control">
                        </div>
                         <div class="row">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <label>Matière</label>
                                    <select></select>
                               </div>
                                <div class="col-lg-3">
                                    <label>Niveau secondaire</label>
                                    <select></select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><br/>Lien de video</label>
                            <textarea id="lien" name="lien" class="form-control" rows="1"></textarea>
                            <p class="form-control-static">Le lien du vidéo doit etre un lien YouTube.</p>
                        </div>
                        <button type="button" id="submit" name="submit" class="btn btn-primary">Soumettre</button>
                    </fieldset>
                </form>
            </div>
        </div>
    <?php
    }
    
    public function afficheFormulaireCreationTexte(){?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Ajouter
                </h1>
                <form action="index.php" s="<?php echo WEB_ROOT;?>/tutoriel/creerVideo/" method="post" role="form">
                    <fieldset class="col-md-12">
                        <legend>Ajouter du texte</legend>
                        <div class="form-group">
                            <label>Titre</label>
                            <input id="titre" name="titre" class="form-control">
                        </div>
                         <div class="row">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <label>Matière</label>
                                    <select></select>
                               </div>
                                <div class="col-lg-3">
                                    <label>Niveau secondaire</label>
                                    <select></select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><br/>Écrivez votre texte</label>
                            <textarea id="lien" name="lien" class="form-control" rows="4"></textarea>
                        </div>
                        <button type="button" id="submit" name="submit" class="btn btn-primary">Soumettre</button>
                    </fieldset>
                </form>
            </div>
        </div>
    <?php
        
    }
    
    // a changer les gens champs pour modifier vue marche
    public function afficheFormulaireModificationVideo(){?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Modification
                </h1>
                <form action="index.php" s="<?php echo WEB_ROOT;?>/tutoriel/creerVideo/" method="post" role="form">
                    <fieldset class="col-md-12">
                        <legend>Modifier votre vidéo</legend>
                        <div class="form-group">
                            <label>Titre</label>
                            <input id="titre" name="titre" class="form-control" value="<?php echo $this->oTutoriel->getTitre();?>">
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <label>Matière</label>
                                    <select></select>
                               </div>
                                <div class="col-lg-3">
                                    <label>Niveau secondaire</label>
                                    <select></select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><br/>Lien de votre vidéo</label>
                            <textarea id="lien" name="lien" class="form-control" rows="1">
                                <?php echo $this->oTutoriel->getContenu();?>
                            </textarea>
                            <p class="form-control-static">Le lien du vidéo doit etre un lien YouTube.</p>
                        </div>
                        <button type="button" id="submit" name="submit" class="btn btn-primary">Soumettre</button>
                    </fieldset>
                </form>
            </div>
        </div>
    <?php
    }
    
    public function afficheFormulaireModificationTexte(){
        ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Modification
                </h1>
                <form action="index.php" s="<?php echo WEB_ROOT;?>/tutoriel/creerVideo/" method="post" role="form">
                    <fieldset class="col-md-12">
                        <legend>Modifier votre texte</legend>
                        <div class="form-group">
                            <label>Titre</label>
                            <input id="titre" name="titre" class="form-control" value="<?php echo $this->oTutoriel->getTitre();?>">
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-lg-3">
                                    <label>Matière</label>
                                    <select></select>
                               </div>
                                <div class="col-lg-3">
                                    <label>Niveau secondaire</label>
                                    <select></select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><br/>Écrivez votre texte</label>
                            <textarea id="texte" name="texte" class="form-control" rows="4">
                                <?php echo $this->oTutoriel->getContenu();?>
                            </textarea>
                        </div>
                        <button type="button" id="submit" name="submit" class="btn btn-primary">Soumettre</button>
                    </fieldset>
                </form>
            </div>
        </div>
    <?php
    }

    //TODO: Ajouter des méthodes au besoin
}
?>