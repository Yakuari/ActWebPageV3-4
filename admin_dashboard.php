<?php 
    
    require_once '../authentication-class.php';

    

    $admin = new Authentication();
    if (!$admin->isUserLoggedIn()) {
        $admin->redirect();
    }

    $stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
    $stmt->execute(array(":id" => $_SESSION['adminSession']));
    $user_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link href="../../src/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="../../src/vendor/bootsrap/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand">Admin Dashboard</a>
                <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>
        
    </header>

    <main>

        <section class="content">
            
        </section>
    </main>
    <div class="container">
    <div class="row gap-10"> 
    <table class="table table-dark table-striped">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Username</th>
            <th scope="col">Create At</th>
            <th scope="col">Expired At</th>
            </tr>
        </thead>
        <tbody>
        <?php
        
            $database = new Database();
            $db = $database->dbConnection();
            $conn = $db;
        
            $query = "SELECT * FROM user";
            $data = $conn->query($query);

            foreach($data as $row){
                echo '<tr>
                        <td>'.$row["id"].'</td>
                        <td>'.$row["username"].'</td>
                        <td>'.$row["created_at"].'</td>
                        <td>'.$row["id"].'</td>
                    </tr>';
            }
        
            
        ?>
        </tbody>
    </table>
        </div>
    </div>
    <script src="../../src/js/script.js"></script>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted text-center">&copy; 2024 Your Website | All Rights Reserved</span>
         </div>
    </footer>
</body>
</html>