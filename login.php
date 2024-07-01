<?php 

session_start();

if(isset($_GET["username"])){

    $_SESSION["username"]=$_GET["username"];
};

if(isset($_GET["password"])){

    $_SESSION["password"]=$_GET["password"];
}

$accounts=[
    [
        "username" => "giovanni",

        "password" => "password",

    ],
    [
        "username" => "andrea",

        "password" => "password",

    ],
    [
        "username" => "francesco",

        "password" => "password",

    ],
    [
        "username" => "mario",

        "password" => "password",

    ],
    [
        "username" => "claudio",

        "password" => "password",

    ],
    [
        "username" => "federico",

        "password" => "password",

    ],
];

$error="";

$username=[];

$password=[];

for ($i=0; $i < count($accounts) ; $i++) { 

   $account=$accounts[$i];

   $username=$account["username"];

   $password=$account["password"];

   $usernameArray[]=$username;

   $passwordArray[]=$password;

   #var_dump( $usernameArray . $passwordArray);
   #var_dump($_GET["password"].$_GET["password"]);

};



if (in_array($_GET["username"],$usernameArray) ==true && in_array($_GET["password"],$passwordArray)==true) {

    header('Location: ./index.php');
    
  }elseif(in_array($_GET["username"],$usernameArray) !== true || in_array($_GET["password"],$PasswordArray) !== true ){

    #(in_array(isset($_GET["username"]),$account) && in_array(isset($_GET["password"]),$account))

    $error="username o password sbagliati";

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <main class="container">
            <form action="./login.php"  method="GET">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password"  class="form-control" id="password">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <p><?php echo $error ?></p>
    </main>
    
</body>
</html>