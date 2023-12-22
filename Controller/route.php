<?php
$routes = array(
    // Pour se connecter
    'Inscription' => array('nom' => 'Inscription','header'=> 'HeaderResponsable' ,'controleur' => null,'model' => 'RInscription', 'vue' => 'RInscriptionVue', 'js' => 'JsInscription', 'visible' => true, 'active' => true),
    'Connexion' => array('nom' => 'connexion' ,'header'=> 'HeaderIndex','controleur'=> null, 'model' => 'CConnexion', 'vue' => 'CConnexionFormVue', 'js' => null, 'visible' => true, 'active' => true),
    'Déconnexion'=> array('nom' => 'Déconnexion' ,'header'=> null,'controleur'=> null, 'model' => 'CDéconnexion', 'vue' => null, 'js' => null, 'visible' => true, 'active' => true),

    // Main
    'IndexMain' => array('nom' => 'IndexMain','header'=> 'HeaderIndex','controleur' => null,'model' => null, 'vue' => 'IndexMain', 'js' => 'JsMain', 'visible' => true, 'active' => true),
    'Contact' => array('nom' => 'Contact' ,'header'=> 'HeaderIndex','controleur' => null,'model' => null, 'vue' => 'Contact', 'js' => null, 'visible' => true, 'active' => true),
    'ProduitMain' => array('nom' => 'ProduitMain' ,'header'=> 'HeaderIndex','controleur' => null,'model' => 'ProduitMain', 'vue' => 'ProduitMain', 'js' => null, 'visible' => true, 'active' => true),
    'Reset' => array('nom' => 'Reset' ,'header'=> 'HeaderIndex','controleur' => null,'model' => 'Reset', 'vue' => 'ResetVue', 'js' => null, 'visible' => true, 'active' => true),
    'Recup' => array('nom' => 'Recup' ,'header'=> 'HeaderIndex','controleur' => null,'model' => 'Recup', 'vue' => 'RecupVue', 'js' => null, 'visible' => true, 'active' => true),
    'Change' => array('nom' => 'Change' ,'header'=> 'HeaderIndex','controleur' => null,'model' => 'ChangePasswordModel', 'vue' => 'ChangePasswordVue', 'js' => null, 'visible' => true, 'active' => true),

    // Visiteur
    'IndexVisiteur' => array('nom' => 'IndexVisiteur' ,'header'=> 'HeaderVisiteur','controleur' => null,'model' => 'VCreationCR', 'vue' => 'VCreationCRIndexVue', 'js' => null, 'visible' => true, 'active' => true),
    'HistoriqueCompteRendu' => array('nom' => 'HistoriqueCompteRendu','header'=> 'HeaderVisiteur','controleur' => null,'model' => 'VHistoriqueCR', 'vue' => 'VHistoriqueCR', 'js' => null, 'visible' => true, 'active' => true),
    'ModifCR' => array('nom' => 'ModifCR','header'=> 'HeaderVisiteur','controleur' => null,'model' => 'VModifCR', 'vue' => 'VModifCRVue', 'js' => null, 'visible' => true, 'active' => true),
    'ProduitVisiteur' => array('nom' => 'ProduitVisiteur','header'=> 'HeaderVisiteur','controleur' => null,'model' => 'VProduit', 'vue' => 'VProduitVue', 'js' => null, 'visible' => true, 'active' => true),
    'Consultation' => array('nom' => 'Consultation','header'=> 'HeaderVisiteur','controleur' => null,'model' => 'VConsultation', 'vue' => 'VConsultationVue', 'js' => null, 'visible' => true, 'active' => true),
    'ModifConsultation' => array('nom' => 'ModifConsultation','header'=> 'HeaderVisiteur','controleur' => null,'model' => 'VModifConsultation', 'vue' => 'VModifConsultationVue', 'js' => null, 'visible' => true, 'active' => true),


    // Delegue Régionale
    'IndexDelegue' => array('nom' => 'IndexDelegue' ,'header'=> 'HeaderDelegue','controleur' => null, 'model' => 'DIndex','vue' => 'DIndexVue', 'js' => null, 'visible' => true, 'active' => true),
    'EnvoiMail' => array('nom' => 'EnvoiMail','header'=> 'HeaderDelegue','controleur' => null,'model' => 'DEnvoiMail', 'vue' => 'DEnvoiMailVue', 'js' => null, 'visible' => true, 'active' => true),
    'HistoriqueCRDelegue' => array('nom' => 'HistoriqueCRDelegue','header'=> 'HeaderDelegue','controleur' => null,'model' => 'DHistoriqueCRAll', 'vue' => 'DHistoriqueCRAllVue', 'js' => null, 'visible' => true, 'active' => true),
    'StatsDelegue' => array('nom' => 'StatsDelegue','header'=> 'HeaderDelegue','controleur' => null,'model' => 'StatsDelegue', 'vue' => 'StatsDelegueVue', 'js' => null, 'visible' => true, 'active' => true),
    'HistoriqueCompteRenduDelegue' => array('nom' => 'HistoriqueCompteRenduDelegue','header'=> 'HeaderDelegue','controleur' => null,'model' => 'DHistoriqueCompteRendu', 'vue' => 'DHistoriqueCompteRenduVue', 'js' => null, 'visible' => true, 'active' => true),
    'NouveauCR' => array('nom' => 'NouveauCR','header'=> 'HeaderDelegue','controleur' => null,'model' => 'DNouveauCR', 'vue' => 'DNouveauCRVue', 'js' => null, 'visible' => true, 'active' => true),
    'ModifCRDelegue' => array('nom' => 'ModifCRDelegue','header'=> 'HeaderDelegue','controleur' => null,'model' => 'DModifCR', 'vue' => 'DModifCRVue', 'js' => null, 'visible' => true, 'active' => true),
    'ProduitDelegue' => array('nom' => 'ProduitDelegue','header'=> 'HeaderDelegue','controleur' => null,'model' => 'DProduit', 'vue' => 'DProduitVue', 'js' => null, 'visible' => true, 'active' => true),

    // Responsable
    'IndexResponsable' => array('nom' => 'IndexResponsable' ,'header'=> 'HeaderResponsable','controleur' => null, 'model' => 'RIndex','vue' => 'RIndexVue', 'js' => null, 'visible' => true, 'active' => true),
          //Praticien
    'Praticien' => array('nom' => 'Praticien' ,'header'=> 'HeaderResponsable','controleur' => null,'model' => 'RPraticien', 'vue' => 'RPraticienVue', 'js' => null, 'visible' => true, 'active' => true),
    'ModifPraticien' => array('nom' => 'ModifPraticien','header'=> 'HeaderResponsable','controleur' => null,'model' => 'RModifPraticien', 'vue' => 'RModifPraticienVue', 'js' => null, 'visible' => true, 'active' => true),
    'AjouterPraticien' => array('nom' => 'AjouterPraticien','header'=> 'HeaderResponsable','controleur' => null,'model' => 'RAjouterPraticien', 'vue' => 'RAjouterPraticienVue', 'js' => 'JsAjouterPraticien', 'visible' => true, 'active' => true),
        //Produit
    'ProduitResponsable' => array('nom' => 'ProduitResponsable' ,'header'=> 'HeaderResponsable','controleur' => null,'model' => 'RProduit', 'vue' => 'RProduitVue', 'js' => null, 'visible' => true, 'active' => true),
    'ModifProduit' => array('nom' => 'ModifProduit','header'=> 'HeaderResponsable','controleur' => null,'model' => 'RModifProduit', 'vue' => 'RModifProduitVue', 'js' => null, 'visible' => true, 'active' => true),
    'AjouterProduit' => array('nom' => 'AjouterProduit','header'=> 'HeaderResponsable','controleur' => null,'model' => 'RAjouterProduit', 'vue' => 'RAjouterProduitVue', 'js' => null, 'visible' => true, 'active' => true),
        //Equipe
    'HistoriqueUser' => array('nom' => 'HistoriqueUser','header'=> 'HeaderResponsable','controleur' => null,'model' => 'RHistoriqueUser', 'vue' => 'RHistoriqueUserVue', 'js' => null, 'visible' => true, 'active' => true),
    'ModifUser' => array('nom' => 'ModifUser','header'=> 'HeaderResponsable','controleur' => null,'model' => 'RModifUser', 'vue' => 'RModifUserVue', 'js' => null, 'visible' => true, 'active' => true),
        //CompteRendu
    'HistoriqueCRResponsable' => array('nom' => 'HistoriqueCRResponsable','header'=> 'HeaderResponsable','controleur' => null,'model' => 'RHistoriqueCR', 'vue' => 'RHistoriqueCRVue', 'js' => null, 'visible' => true, 'active' => true),


    // Commun
        //Mail
    'BoiteMail' => array('nom' => 'BoiteMail','header'=> 'HeaderVisiteur','controleur' => null,'model' => 'VBoiteMail', 'vue' => 'VBoiteMailVue', 'js' => null, 'visible' => true, 'active' => true),
    'BoxMailDelegue' => array('nom' => 'BoxMailDelegue','header'=> 'HeaderDelegue','controleur' => null,'model' => 'DBoiteMail', 'vue' => 'DBoiteMailVue', 'js' => null, 'visible' => true, 'active' => true),


);
?>