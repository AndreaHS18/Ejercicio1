<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/motion-ui@1.2.3/dist/motion-ui.min.css" />
    
    <title>Foundation</title>
</head>
<body>
  
  <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="example-menu"></button>
    <div class="title-bar-title">Menu</div>
  </div>
  
  <div class="top-bar" id="example-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">Site Title</li>
        <li>
          <a href="#">One</a>
          <ul class="menu vertical">
            <li><a href="#">One</a></li>
            <li><a href="#">Two</a></li>
            <li><a href="#">Three</a></li>
          </ul>
        </li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
      </ul>
    </div>
    <div class="top-bar-right">
      <ul class="menu">
        <li><input type="search" placeholder="Search"></li>
        <li><button type="button" class="button">Search</button></li>
      </ul>
    </div>
  </div>

  <div class="grid-x">
    <div class="cell small-4">
      <div class="card" style="width: 300px;">
        <div class="card-divider">
          Perrito
        </div>
        <img src="https://i.pinimg.com/564x/a3/15/88/a31588bf76f26f48f68acb58729d682a.jpg">
        <div class="card-section">
          <h4>Perrito chacalón</h4>
          <p>It has an easy to override visual style, and is appropriately subdued.</p>
        </div>
      </div>
    </div>
    <div class="cell small-4">
      <div class="card" style="width: 300px;">
        <div class="card-divider">
          Perrito
        </div>
        <img src="https://i.pinimg.com/564x/b2/9e/ac/b29eacc023dc88ec1938de36960d2763.jpg">
        <div class="card-section">
          <h4>Perrito doctor</h4>
          <p>It has an easy to override visual style, and is appropriately subdued.</p>
        </div>
      </div>
    </div>
    <div class="cell small-4">
      <div class="card" style="width: 300px;">
        <div class="card-divider">
          Perrito
        </div>
        <img src="https://i.pinimg.com/564x/ec/aa/4a/ecaa4a6b37c2df65ec08774fbc307f3f.jpg">
        <div class="card-section">
          <h4>Perrito hippie</h4>
          <p>It has an easy to override visual style, and is appropriately subdued.</p>
        </div>
      </div>
    </div>
  </div>

  <p><button class="button" data-open="exampleModal2">Modal</button></p>

  <!-- This is the first modal -->
  <div class="reveal" id="exampleModal2" data-reveal>
    <h1>¡Felicidades!</h1>
    <p class="lead">Ganaste una tarea realizada</p>
    <button class="close-button" data-close aria-label="Close reveal" type="button">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js"crossorigin="anonymous"></script>
  <script>$(document).foundation();</script>

</body>
</html>