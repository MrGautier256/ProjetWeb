<script src="https://kit.fontawesome.com/de868f3bd8.js" crossorigin="anonymous"></script>
<nav>
  <div class="nav-left" id="nav-left">
    <i id="toggle" class="fas fa-bars"></i>
    <a href="../Main/Index.php">
      <img src="https://res.cloudinary.com/recruitee/image/upload/production/images/TUU/GiVF8kve5_Gx.png" class="logo" />
    </a>
  </div>

  <div class="nav-right">
    <div class="search-box">
      <img src="../images/search.png" />
      <input type="text" placeholder="Search" />
    </div>
    <div class="nav-user-icon online" onclick="settingsMenuToggle()">
      <img src="../images/profile-pic.png" />
    </div>
  </div>
  <!------------------Settings-Menu--------------------->
  <div class="settings-menu">
    <div id="dark-btn">
      <span> </span>
    </div>
    <div class="settings-menu-inner">
      <div class="user-profile">
        <?php
        include_once("../Const.php");
        switch ($_SESSION['user']['ID_Role']) {
          case "1":
            echo '<img src="../images/profile-pic.png" />';
            break;
          case "2":
            echo '<img src="../images/altazin.jpg" />';
            break;
          case "3":
            echo '<img src="../images/admin.jpg" />';
            break;
          case "4":
            echo '<img src="../images/audrey.jpg" />';
            break;
        }

        ?>

        <div>
          <p> <?php echo ($_SESSION['user']['U_Prenom'] . " " . ($_SESSION['user']['U_Nom'])) ?></p>
          <a href="../Profile/Profil.php">See Your Profile</a>
        </div>
      </div>
      <hr />
      <div class="user-profile">
        <div>
          <p> <?php echo ($_SESSION['user']['U_Email']) ?></p>
          <p> <?php echo ($_SESSION['user']['U_centre']) ?></p>
        </div>
      </div>
      <hr />
      <div class="setting-links">
        <img src="../images/setting.png" class="settings-icon" />
        <a href="#">Settings & Privacy <img src="../images/arrow.png" width="10px" /></a>
      </div>
      <div class="setting-links">
        <img src="../images/help.png" class="settings-icon" />
        <a href="#">Help & Support <img src="../images/arrow.png" width="10px" /></a>
      </div>
      <div class="setting-links">
        <img src="../images/display.png" class="settings-icon" />
        <a href="#">Display & Accessibility <img src="../images/arrow.png" width="10px" /></a>
      </div>
      <div class="setting-links">
        <img src="../images/logout.png" class="settings-icon" />
        <a href="../LoginPage/Login.php">Logout <img src="../images/arrow.png" width="10px" /></a>
      </div>
    </div>
  </div>
</nav>