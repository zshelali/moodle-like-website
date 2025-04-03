<?php
$styles = ['student_home_style'];
include("PageParts/header.php");
?>

<!--BODY-->
    <div class="content-wrapper">
        <!-- Matières existantes -->
        <div class="ueGrid">
            <div class="ueBox"><h4>IT41</h4><img src="images/it41_gpt.png"></div>
            <div class="ueBox"><h4>IT44</h4><img src="images/it44_gpt.png"></div>
            <div class="ueBox"><h4>WE4A</h4><img src="images/WE4A_gpt.png"></div>
            <div class="ueBox"><h4>LC00</h4><img src="images/lc00_gpt.png"></div>
            <div class="ueBox"><h4>SO04</h4><img src="images/so04_gpt.png"></div>
            <div class="ueBox"><h4>SI40</h4><img src="images/it41_gpt.png"></div>
        </div>

        <!-- Séparation -->
        <div class="separator"></div>

        <!-- Publications récentes -->
        <div class="recent-posts">
            <div class="recent-posts-header">
                <h2>Publications récentes</h2>
            </div>
            <div id="posts-container">
                <div>
                    <!-- Ici seront affichés les posts récents -->
                    <p> Ici seront affichés les posts récents</p>
                </div>
            </div>
        </div>
    </div>
<!--BODY END-->

<?php
include("PageParts/footer.php");
?>