
<?php
include 'connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <footer>
        <div class="one">
            <div class="head">
                <p>"A book is a dream that you hold in your hand. It's a world that you can enter, a journey that you can take, a frien that you can meet. Books are the quietest and most constant of friends; they are the most patient of teacher. They are the mirrors of the soul, the windows of the mind, and the doors of imagination"
                    -NEIL GAIMAN</p>
            </div>
            <div class="box">
                <div class="box-head">
                    <p>Don't miss out on any updates.</p>
                </div>
                <form action="mail.php" method="post">
                    <div class="mail">
                        <input type="text" name="email" id="email" placeholder="Email Address" required>
                    </div>
                    <div class="btn">
                        <button type="submit" name="subcribe">Subcribe</button>
                    </div>
                </form>
            </div>
            <div class="follow">
                <div class="follow-head">
                    <p>Follow us</p>
                </div>
                <div class="icons">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-x-twitter"></i>
                    <i class="fa-brands fa-facebook"></i>
                </div>
            </div>
            <div class="contact">
                <div class="con-head">
                    <p>call us</p>
                </div>
                <div class="num">
                    <p>09000000000</p>
                </div>
            </div>
        </div>
       <div class="two">
            <div class="two-1">
                <p><span>&#169;</span>2024.Books.All Right Reseverd</p>
            </div>
            <div class="two-2">
                <a href="">PRIVACY POLICY</a>
                <A href="">TERM AND CONDITIONS</A>
            </div>
       </div>
    </footer>
</body>
</html>