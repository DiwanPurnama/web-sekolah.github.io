
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style-main.css" />  
</head>
<body>

        <section class="header">
        <div class="container text-white align-middle header-fixed-top">
            <h1 class="judul">Web Sekolah</h1>
            <nav class="navbar navbar-expand-sm navbar-primarys">
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="template.php?content=home.php">HOME  </a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="template.php?content=berita.php">BERITA</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#">DATA MAHASISWA   </a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="template.php?content=<?php echo 'inputData.php'?>">INPUT  </a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#">LOGOUT </a></li>
                    </ul>
                </div>
            </nav>
        </div>
        
        </section>
        <section class="content">
       
        <div class="container bg-light text-center">
                <?php
                    if(isset($_GET['content'])){
                        $content = $_GET['content'];
                    }else if(isset($_GET["kata"])){
                        $content = "datamahasiswa.php";
                    }else if(isset($_GET['input'])){
                        $content = "inputData.php";
                    }
                    else{
                        $content = "home.php";
                        
                    }
                    include $content;
                ?>
        </div>
        
        </section>
        <section class="footer" >
        <div class="container text-white">
            <h1 class="text-center">Footer</h1>
        </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>