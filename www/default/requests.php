<?php
    $exo1 = "SELECT * FROM employes";
    $exo2 = "SELECT DISTINCT Pays FROM fournisseur";
    $exo3 = "SELECT Nom FROM produit WHERE Prix > 30.00";
    $exo4 = "SELECT Nom, Prix FROM produit WHERE Prix > 30.00 ORDER BY Prix DESC";
    $exo5 = "SELECT Nom, Prix FROM produit WHERE N_Cat = 3 AND Prix > 10.00";
    $exo6 = "SELECT Nom, Pays FROM employes WHERE Pays = 'France' OR Pays = 'Royaume-Uni'";
    $exo7 = "SELECT * FROM produit ORDER BY Prix LIMIT 2";
    $exo8 = "SELECT * FROM produit ORDER BY Nom DESC LIMIT 2";
    $exo9 = "SELECT Societe, Ville, Pays FROM fournisseur ORDER BY 3, 2, 1;";
    $exo10 = "SELECT societe FROM client WHERE Societe LIKE '__N%';";
    $exo11 = "SELECT Pays FROM client UNION SELECT Pays FROM Fournisseur;";
    $exo12 = "SELECT DISTINCT Pays FROM client WHERE Pays IN (SELECT Pays FROM fournisseur);";

    $test = "SELECT * FROM produit p, categorie c WHERE p.N_Pr = c.N_Cat";

    $exo13 = "
        SELECT DISTINCT Pays
        FROM client
        WHERE Pays NOT IN (SELECT Pays FROM fournisseur);
    ";

    $exo14 = "
        SELECT pro.Nom, cat.Nom
        FROM produit pro, categorie cat
        WHERE pro.N_Cat = cat.N_Cat;
    ";

    $exo15 = "
        SELECT emp.Nom, com.N_Com
        FROM employes emp, commande com
        WHERE emp.N_Emp = com.N_Emp;
    ";

    $exo16 = "
        SELECT DISTINCT pro.Nom
        FROM produit pro, detailscommande DC
        WHERE DC.Quantite > 20
        AND pro.N_Pr = DC.N_Pr;
    ";

    $exo17 = "
        SELECT cl.Contact, cl.Pays, pro.Nom, fo.Pays
        FROM client cl, commande co, detailscommande DC, produit pro, fournisseur fo
        WHERE cl.Pays <> fo.Pays
        AND cl.N_Cl = co.N_CL
        AND co.N_Com = DC.N_Com
        AND DC.N_Pr = pro.N_Pr
        AND pro.N_Fou = fo.N_Fou;
    ";

    $exo18 = "
        SELECT emp.Nom, com.N_Com
        FROM employes emp, commande com
        WHERE emp.N_Emp = com.N_Emp
    ";

    $exo18bis = "
        SELECT emp.Nom, com.N_Com
        FROM employes emp INNER JOIN commande com 
        ON emp.N_Emp = com.N_Emp
    ";

    $exo19 = "
        SELECT cl.Contact, pro.Nom
        FROM client cl 
        INNER JOIN commande com
        ON cl.N_Cl = com.N_CL
        INNER JOIN detailscommande DC
        ON com.N_Com = DC.N_Com
        INNER JOIN produit pro
        ON DC.N_Pr = pro.N_Pr;
    ";

    $exo20 = "
        SELECT emp.Nom, com.N_Com
        FROM employes emp LEFT JOIN commande com 
        ON emp.N_Emp = com.N_Emp
    ";

    $exo21 = "
        SELECT cl.N_Cl, pro.*
        FROM client cl LEFT JOIN (commande C INNER JOIN detailscommande DC ON C.N_Com = DC.N_Com
            INNER JOIN produit pro ON DC.N_Pr = pro.N_Pr) ON cl.N_Cl = C.N_CL
        ORDER BY cl.Societe;
    ";
?>


