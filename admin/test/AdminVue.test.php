 <div class="page-header">
   	<h1>Mes tests unitaires</h1>
</div>
    <?php
    	 
    	/*=====================================*/
	    /*======GESTION DES RESPONSABLES=======*/
	    /*==========DROITS SUPERADMIN==========*/
	    /*=====================================*/

    	echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheListeResponsables";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $aListeUtilistateurs = array(
                                                new Utilisateur(561, 'bob', ' ', 'Bob', 'Bar', 'bob@bob.com', 4),
                                                new Utilisateur(562, 'bob2', ' ', 'Bob2', 'Bar', 'bob2@bob.com', 4)
                                                );

                    $oVue = new AdminVue();
                    $oVue->aListeUtilisateurs = $aListeUtilistateurs;
                    $oVue->afficheListeResponsables();

                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheAjouterResponsable";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";
                	$oCommission = new Commission();
                    $aListeCommissions = $oCommission->rechercherListeCommissions(); //demande la liste de toutes les commissions 

                    $oVue = new AdminVue();
                    $oVue->aListeCommissions = $aListeCommissions; //création d'une propriété dans l'objet dans lequel on met le data
                    $oVue->afficheAjouterResponsable();

                echo "</div>";
            echo "</div>";
        echo "</div>";
		
		echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheModifierResponsables";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oCommission = new Commission();
                    $aListeCommissions = $oCommission->rechercherListeCommissions();

                    $oVue = new AdminVue();
                    $oVue->oUtilisateur = new Utilisateur(1, 'bob', ' ', 'Bob', 'Bar', 'bob@bob.com', 4);
                    $oVue->aListeCommissions = $aListeCommissions; //création d'une propriété dans l'objet
                    $oVue->afficheModifierResponsables();

                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheListeCommissions";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheListeCommissions();

                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheListeEcoles";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheListeEcoles();

                echo "</div>";
            echo "</div>";
        echo "</div>";

    /*=====================================*/
    /*======FIN GESTION DES RESPONSABLES===*/
    /*==========DROITS SUPERADMIN==========*/
    /*=====================================*/

    /*================================================*/
    /*============GESTION DES PROFESSEURS=============*/
    /*==DROITS RESPONSABLES DES COMMISSIONS SCOLAIRE==*/
    /*================================================*/

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheListeProfesseurs";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheListeProfesseurs();

                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheAjouterProfesseur";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheAjouterProfesseur();

                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheModifierProfesseurs";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheModifierProfesseurs();

                echo "</div>";
            echo "</div>";
        echo "</div>";

    /*================================================*/
    /*=========FIN GESTION DES PROFESSEURS============*/
    /*==DROITS RESPONSABLES DES COMMISSIONS SCOLAIRE==*/
    /*================================================*/

         echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheListeTuteurs";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheListeTuteurs();

                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheAjouterTuteur";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheAjouterTuteur();

                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheModifierTuteurs";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheModifierTuteurs();

                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<div class='col-xs-12'>";
            echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>";
                    echo "<h4>";
                        echo "Test afficheSupprimerUtilisateurs";
                    echo "</h4>";
                echo "</div>";
                echo "<div class='panel-body'>";

                    $oVue = new AdminVue();
                    $oVue->afficheSupprimerUtilisateurs();

                echo "</div>";
            echo "</div>";
        echo "</div>";

    ?>