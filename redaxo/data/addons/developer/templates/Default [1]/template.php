<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seite</title>

    <!-- CSS Dateien -->
    <link rel="stylesheet" href="resources/css/uikit.min.css">
    <link rel="stylesheet" href="resources/css/style.css">

</head>
<body>
 

        <!-- Navigation -->
        <div class="navbar-collapse" id="navbar_collapse">
            <ul class="uk-navbar-nav">
                <?php
                    foreach (rex_category::getRootCategories(true) as $item) {
                        echo '<li class="uk-active"><a href="'.$item->getUrl().'">'.htmlspecialchars($item->getValue('name')).'</a></li>';
                    }
            ?>
            </ul>
        </div>

        <h1 class="uk-position-top">
            Hallo
        </h1>

        <div class="uk-container uk-position-center">


            REX_ARTICLE[0]

        
       </div>            
        
        <!-- Footer -->
        <div id="footer">
            <footer>Das ist mein Footer</footer>
       </div>
    
    </body>
</html>