
<?php
require_once __DIR__.'/config/config.php';
require_once __DIR__.'/lib/pdo.php';
?>
<?php
    try {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (isset($_POST['loginUser']))
        {
            // crétion variables de connexion
            $lastNameForm = $_POST["last_name"];
            $firstNameForm = $_POST["first_name"];
            $emailform = $_POST["email"];
            $passwordform = $_POST["password"];
                
            // récupérer l'utilisateur
            $query = "SELECT * FROM users WHERE email = :email";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":email", $emailform);
            $stmt->execute();

            //  vérifier si l'utilisateur existe déjà en BDD
            if ($stmt->rowCount() > 0) {
            echo "Cette adresse Email existe déjà";
            }

            // Hasher le mot de passe avant de le stocker
            $hashedPassword = password_hash($passwordform, PASSWORD_DEFAULT);

            // générer l'insertion à la base BDD
            $insertQuery = "INSERT INTO users (last_name, first_name, email, password)
            VALUES (:last_name, :first_name, :email, :password)";
            $stmt = $pdo->prepare($insertQuery);
            $stmt->bindParam(":last_name", $lastNameForm);
            $stmt->bindParam(":first_name", $firstNameForm);
            $stmt->bindParam(":email", $emailform);
            $stmt->bindParam(":password", $hashedPassword);
            $stmt->execute();
            header("location: registerRedirection.php");
               }
     } catch (PDOException $e) {
            echo "Erreur de connexion à la base de données" . $e->getMessage();
        }
?>