<?php
include_once("../Const.php");

if ($_SESSION['user']['ID_Role'] == 1) {

    echo '<div class="right-sidebar">
    <div class="sidebar-title">
        <h4>My Candidatures</h4>
        <a href="../ContentRightBar/Candidatures.php">See All</a>
    </div>

    <div class="event">
        <div class="left-event">
            <h3>18</h3>
            <span>March</span>
        </div>
        <div class="right-event">
            <H4>Ubisoft</H4>
            <p> <i class="fa-solid fa-location-dot"></i> Castelnau-le-Lez</p>
            <p> Step : <i class="fa-solid fa-1"></i></p>
            <a href="#"> More Info</a>
        </div>
    </div>
    <div class="event">
        <div class="left-event">
            <h3>22</h3>
            <span>June</span>
        </div>
        <div class="right-event">
            <H4>DELL</H4>
            <p><i class="fa-solid fa-location-dot"></i> Odysseum</p>
            <p> Step : <i class="fa-solid fa-3"></i></p>
            <a href="#"> More Info</a>
        </div>

    </div>
    <div class="event">
        <div class="left-event">
            <h3>25</h3>
            <span>July</span>
        </div>
        <div class="right-event">
            <H4>INETUM</H4>
            <p><i class="fa-solid fa-location-dot"></i> Millenaire</p>
            <p> Step : <i class="fa-solid fa-2"></i></p>
            <a href="#"> More Info</a>
        </div>
    </div>

';
    include_once('Mywishlist.html');
    echo '</div>
</div>
</div>';
} else {
    echo '
    <style>
    .main-content {
        width: 70%
    }
</style>';
}
