<?php
 
    define("PAGE_TITLE", "株式会社");
    define("DESCRIPTION", "テキスト");
    define("KEYWORDS", "上場企業");
    define("OGTYPE", "website");
 
?>
<!DOCTYPE html>
<html lang="ja" id="pagetop">
    <head prefix="og: https://ogp.me/ns#">
        <?php include("inc/head.php"); ?>
        <link type="text/css" rel="stylesheet" href="css/page/index.css">
    </head>
    
    <body>
        <?php include("inc/header.php"); ?>

        <main>
            <div class="key-visual">
                <div class="key-heading"> 
                    <h1><span>C</span>reate the future </h1>
                    <p>ミライを創造する SAMPLE COMPANY</p> 
                </div>
            </div>
            
        </main>
        
        <?php include("inc/footer.php"); ?>

        <?php require_once("images/defs.svg"); ?><!-- カラー変更するSVGファイル -->    
    </body>
</html>