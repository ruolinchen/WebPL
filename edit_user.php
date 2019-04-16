<?php
    session_start();
    $user = $_SESSION['username'];
    
    require('connect-db.php');
    
    $name = $age = $location = $groups = $about = "";

    function check($data) {
        return trim(htmlspecialchars($data));
    }
    
    if (isset($_POST['submit'])) {
        $name = check($_POST["name"]);
        $age = check($_POST["age"]);
        $location = check($_POST["location"]);
        $groups = check($_POST["groups"]);
        $about = check($_POST["about"]);
    }
    
    $query = "UPDATE users SET name=:name, age=:age, location=:location, groups=:groups, about_me=:about WHERE username=:user";
    $statement = $db->prepare($query);
    $statement->bindValue('name', $name);
    $statement->bindValue(':age', $age);
    $statement->bindValue(':location', $location);
    $statement->bindValue(':groups', $groups);
    $statement->bindValue(':about', $about);
    $statement->bindValue(':user', $user);
    $statement->execute();
    $statement->closeCursor(); 
    header('Location: user_profile.html');
    
?>