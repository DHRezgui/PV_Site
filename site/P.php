<?php
// Configuration de la base de données
$servername = "localhost";
$username = "root"; // Nom d'utilisateur de la base de données
$password = ""; // Mot de passe de la base de données
$dbname = "gestion de pv"; // Nom de la base de données

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Vérifier si les données ont été envoyées via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Accéder aux valeurs des champs du formulaire
    $direct1 = $_POST['direction'];
    $dat = $_POST['date'];
    $lie = $_POST['lieu'];
    $sj = $_POST['sujet'];
    $cge = $_POST['cadre'];
    $direct2 = $_POST['direction2'];
    $telph = $_POST['telephone'];
    $am = $_POST['adresse_mail'];
    $stat = $_POST['statut'];
    $no_pr1 = $_POST['nom_prenom1'];
    $ttre = $_POST['tit'];
    $procc = $_POST['proc'];
    $sv = $_POST['suivi'];
    $rem = $_POST['remarques'];
    $del = $_POST['delais'];
    $direct3 = $_POST['direction3'];
    $no_pr2 = $_POST['nom_prenom2'];

    $conn->begin_transaction();

    try {
        // Insérer dans la table pv
        $stmt = $conn->prepare("INSERT INTO pv (administration, datePV, lieu, sujet, cadre_general) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $direct1, $dat, $lie, $sj, $cge);
        $stmt->execute();
        $pv_id = $stmt->insert_id;
        $stmt->close();

        // Insérer dans la table participants
        $stmt = $conn->prepare("INSERT INTO participants (matricule, id_PV, signe, dateSignature) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiis", $user_id, $pv_id);
        $stmt->execute();
        $stmt->close();

        // Insérer dans la table pointsaugmentes
        $stmt = $conn->prepare("INSERT INTO pointsaugmentes (titre, procedures_recommandations, id_PV) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $ttre, $procc, $pv_id);
        $stmt->execute();
        $stmt->close();
        
        // Insérer dans la table suivi
        $stmt = $conn->prepare("INSERT INTO suivi (remarques, dateSuivi, id_PV) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $rem, $theme, $pv_id);
        $stmt->execute();
        $sv_id = $stmt->insert_id;
        $stmt->close();

        // Insérer dans la table delais
        $stmt = $conn->prepare("INSERT INTO delais (id_suivi, matricule, delai) VALUES (?, ?, ?)");
        $stmt->bind_param("is", $sv_id, $theme);
        $stmt->execute();
        $stmt->close();


        // Commit de la transaction
        $conn->commit();
        echo "تم بعث محضر الجلسة";
    } catch (Exception $e) {
        // Rollback de la transaction en cas d'erreur
        $conn->rollback();
        echo "Erreur : " . $e->getMessage();
    }
}

$conn->close();
?>