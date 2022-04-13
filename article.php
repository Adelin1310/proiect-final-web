<!DOCTYPE html>
<html>

<head>
    <title>ALBUMA</title>
    <meta charset="UTF-8">
    <meta name="description" content="Albums reviews">
    <meta name="keywords" content="Albums,Songs,Artists,Rating,Reviews">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/animations.css">
    <link rel="stylesheet" href="styles/news-albums.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="main.js"></script>
</head>

<body>

    <?php
    require("mysql.php");
    $article_id = (int)$_REQUEST['id'] or die;
    $query = "select * from dbo_article where ArticleId =".$article_id;
    $article = mysqli_query($conexiune, $query);
    ?>
    <section class="menu">
        <a class="menu-logo" href="index.php">ALBUMA</a>
        <ul class="menu-nav-list">
            <li class="menu-nav-list-item"><a href="index.php">HOME</a></li>
            <li class="menu-nav-list-item"><a href="#">TOPS</a></li>
        </ul>
    </section>
    <section class="article">
        <?php
        $row = mysqli_fetch_row($article);
        $author = mysqli_fetch_row(mysqli_query($conexiune, "select * from dbo_user where UserId =".$row['AuthorId']));
        ?>
    </section>
</body>

</html>