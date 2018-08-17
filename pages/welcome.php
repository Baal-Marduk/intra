<?php
function show_page()
{

};


?>

    <div id="index-banner" class="parallax-container hero-box">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text white-text light main-title center-align">INTRANET</h1>
                <div class="row center">
                    <h5 class="header col s12 light sub-title center-align">Vous trouverez ici tout les liens utiles
                        DS</h5>
                </div>
                <div class="row center">
                    <form method="get" action="http://www.google.com/search" target="_blank">
                        <div class="input-field inline barre-google">
                            <input id="search" type="text" name="q" value="" placeholder="Recherche Google" required>
                            <label class="label-icon " for="search"><i class="material-icons">search</i></label>
                        </div>
                    </form>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="img/background1.jpg" alt="Unsplashed background img 1"></div>
    </div>
    <div class="container">
        <div class="section">
            <br>
            <br>
            <!--   Icon Section   -->
            <div class="row message-jour">
                <h2 class="center light sub-main-title">Actualités</h2>

                <?php include ('script/news.php'); ?>
<!--
                <div class="col s4 left">
                    <p class="editable_news" id="news_edit1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores commodi dignissimos nemo neque quisquam rem reprehenderit, sit voluptas? Accusantium
                        distinctio esse excepturi laboriosam laborum maiores modi nulla repellendus temporibus
                        vitae?</p>
                </div>
                <div class="col s4 center">
                    <p class="editable_news" id="news_edit2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores commodi dignissimos nemo neque quisquam rem reprehenderit, sit voluptas? Accusantium
                        distinctio esse excepturi laboriosam laborum maiores modi nulla repellendus temporibus
                        vitae?</p>
                </div>
                <div class="col s4 right">
                    <p class="editable_news" id="news_edit3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores commodi dignissimos nemo neque quisquam rem reprehenderit, sit voluptas? Accusantium
                        distinctio esse excepturi laboriosam laborum maiores modi nulla repellendus temporibus
                        vitae?</p>
                </div>
                <!-- message du jour -->
            </div>
            <br>
            <br>
        </div>
    </div>


    <div class="parallax-container valign-wrapper message-jour-box">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h2 class="header col s12 light sub-main-title">Message du jour</h2>
                    <h5 class="light sub-title editable_text" id="quote_edit"><?php include("script/quote.php"); ?></h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="img/sven-scheuermeier-37377.jpg" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container">
    <div class="section ">
        <br>
        <br>
        <div class="row">
            <div class="col s12 center">
                <h4 class="sub-main-title">Informations</h4>
                <p class="left-align" id="info_edit"><?php include("script/infos.php"); ?>
            </div>
            <br>
            <br>
        </div>
    </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                </div>
            </div>
        </div>
        <div class="parallax modern"><img src="img/connor-limbocker-439338.jpg" alt="Unsplashed background img 3"></div>
    </div>
<?php
if (isset($_SESSION['user_id'])) {
    include("modules/welcome_modal.php");
}
?>