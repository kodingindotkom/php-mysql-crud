<html>

<head>
    <style>
        .wrap {
            margin: 30px auto;
            width: 700px;
        }

        input {
            width: 100%;
            height: 30px;
        }

        textarea {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <?php
        if ($_GET["page"] == "posts") {
            include "show_posts.php";
        } else if ($_GET["page"] == "create_posts") {
            include "create_posts.php";
        } else if ($_GET["page"] == "edit_posts") {
            include "edit_posts.php";
        } else {
            echo "welcome";
        }
        ?>
    </div>
</body>

</html>