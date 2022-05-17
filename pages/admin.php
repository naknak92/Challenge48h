<link rel="stylesheet" href="css/Admin.css">
<style>
    .home-section *{color:black;}
</style>
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_Titre">SQUAD</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="Accueil.html" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_Titre">Home</span>
          </a>
        </li>
        <li>
          <a href="/pages/profile.php">
            <i class='bx bx-box' ></i>
            <span class="links_Titre">Mon Compte</span>
          </a>
        </li>
        <li>
          <a href="Accueil.html">
            <i class='bx bx-list-ul' ></i>
            <span class="links_Titre">Déconnexion </span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
       
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Nombres d'evenements</div>
            <div class="number"></div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Nombres d'utilisateurs connectés</div>
            <div class="number"></div>
            <div class="indicator">
              
             
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Evenements</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Date</li>
              <li><a href="#">17 Mai 2022</a></li>
              <li><a href="#">17 Mai 2022</a></li>
              <li><a href="#">17 Mai 2022</a></li>
              <li><a href="#">17 Mai 2022</a></li>
              <li><a href="#">17 Mai 2022</a></li>
              <li><a href="#">17 Mai 2022</a></li>
              <li><a href="#">17 Mai 2022</a></li>
            </ul>
            <ul class="details">
            <li class="topic">Titre</li>
            <li><a href="#">Titre</a></li>
            <li><a href="#">Titre</a></li>
            <li><a href="#">Titre</a></li>
            <li><a href="#">Titre</a></li>
            <li><a href="#">Titre</a></li>
            <li><a href="#">Titre</a></li>
             <li><a href="#">Titre</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Name</li>
            <li><a href="#">Name</a></li>
            <li><a href="#">Name</a></li>
            <li><a href="#">Name</a></li>
            <li><a href="#">Name</a></li>
            <li><a href="#">Name</a></li>
             <li><a href="#">Name</a></li>
            <li><a href="#">Name</a></li>
          </ul>
          <ul class="details">
            <li class="topic">Total</li>
            <li><a href="#">Rejoindre</a></li>
            <li><a href="#">Rejoindre</a></li>
            <li><a href="#">Rejoindre</a></li>
            <li><a href="#">Rejoindre</a></li>
            <li><a href="#">Rejoindre</a></li>
             <li><a href="#">Rejoindre</a></li>
             <li><a href="#">Rejoindre</a></li>
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Utilisateurs</div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <!--<img src="images/sunglasses.jpg" alt="">-->
             
  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>
