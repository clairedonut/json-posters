<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white d-flex justify-content-between">

      <div class="d-flex align-items-center">
        <!-- hamburger menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- search -->
        <form class="tool search" action="index.html" method="post">
          <i data-feather="search"></i>
          Search
        </form>
      </div>

      <!-- branding -->
      <a class="navbar-brand" href="#"><?php echo $brand ?></a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Wall Art<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Living</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Stationery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gifts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Inspiration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Artists</a>
          </li>
          <li class="nav-item" action="index.html" method="post">
              <input id="provider-json" placeholder="Search posters"/>
          </li>
        </ul>
      </div>

      <div class="d-flex">
        <div class="tool user">
          <i data-feather="gitlab"></i>
          <a href="#">Account</a>
        </div>
        <div class="tool">
          <i data-feather="heart"></i>
          <a href="#">List</a>
        </div>
        <div class="tool">
          <i data-feather="shopping-bag"></i>
          <a href="#">Cart</a>
        </div>
      </div>
    </nav>
  </header>
