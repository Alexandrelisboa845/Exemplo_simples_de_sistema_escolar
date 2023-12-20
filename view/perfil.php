 

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .profile-card {
            max-width: 300px;
            margin: 50px auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
        }

        .profile-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .profile-details {
            font-size: 16px;
            color: #888888;
            margin-bottom: 20px;
        }

        .profile-description {
            font-size: 14px;
            line-height: 1.6;
        }
    </style>
  <link href="css/style.css" rel="stylesheet"  >
    
</head>

<body>
<?php
include("navbar.php");
?>
    <div class="profile-card">
        <img class="profile-picture" src="https://via.placeholder.com/150">
        <div class="profile-name">Utilizador de teste</div>
        <div class="profile-details">Web Developer</div>
        <div class="profile-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt mauris sit amet ultrices.
        </div>
    </div>
</body>

</html>
