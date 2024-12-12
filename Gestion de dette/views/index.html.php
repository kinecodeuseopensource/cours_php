<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="frame">
        <form action="/submit_form" method="post">
            <div class="form-group" id ="user">
                <i class="fa-solid fa-user "  ></i>
            </div>
            <div class="label">
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                    <input type = "password" id="password" name="password" placeholder="Password"  required>
                </div>
            </div>
            <div class="boutton">
                <button type="submit" class="boutton1"><a href="enregistrerdette.html">SIGN IN</a></button>
            </div>
        </form>
    </div>
</body>
</html>