<!DOCTYPE html>
<html>

<head>
    <title>ALBUMA</title>
    <meta charset="UTF-8">
    <meta name="description" content="Albums reviews">
    <meta name="keywords" content="Albums,Songs,Artists,Rating,Reviews">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/animations.css">
    <link rel="stylesheet" href="styles/slider.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body>

    <?php
    require("mysql.php");
    ?>
    <section class="menu">
        <a class="menu-logo" href="index.php">ALBUMA</a>
        <ul class="menu-nav-list">
            <li class="menu-nav-list-item"><a href="index.php">HOME</a></li>
            <li class="menu-nav-list-item"><a href="#">TOPS</a></li>
        </ul>
    </section>
    <section class="news">
        <div class="news-slider">
            <?php 
                $query = "SELECT * FROM dbo_album";
                $albums = mysqli_query($conexiune, $query) or die('Eroare');
                while($row = mysqli_fetch_assoc($albums)){
                    echo  "<div class='news-slider-slide fade'>";
                    echo  "<img class='news-slider-slide-image' src='data:image/jpeg;base64, ".base64_encode($row['CoverImage'])."'/>";
                    echo  "<div class='news-slider-slide-text'><p style='color:white'>".$row['Description']."</p></div>";
                    echo  "</div>";

                }

            ?>
            
            <div class="news-slider-sliders">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div class="news-slider-dots" style="text-align:center">
            <?php 
                for($i = 0; $i < $albums->num_rows; $i++){
                    echo "<span class='dot' onclick='currentSlide(".($i+1).")'></span>";
                }
            ?>
            </div>
        </div>
        <div class="news-albums">

        </div>

    </section>
    <section class="">

    </section>
</body>

</html>