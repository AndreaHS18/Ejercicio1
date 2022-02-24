<!DOCTYPE html>
<html>
<head>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Materialize</title>
</head>

<body>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="carousel carousel-slider center">
      <div class="carousel-item" href="#one!">
        <a><img src="https://i.pinimg.com/564x/4a/f7/bb/4af7bbd35a8e9c0191323aeb3db0301f.jpg"></a>
      </div>
      <div class="carousel-item" href="#two!">
        <a><img src="https://i.pinimg.com/564x/1c/d8/42/1cd842763020b202c311fc9fce7357ab.jpg"></a>
      </div>
      <div class="carousel-item" href="#three!">
        <a><img src="https://i.pinimg.com/564x/5b/69/9c/5b699c629748e7fa62b7ea53fa07cc42.jpg"></a>
      </div>
      <div class="carousel-item" href="#four!">
        <a><img src="https://i.pinimg.com/564x/82/d2/54/82d2540f00e1c2640111d9bd9e2f9b63.jpg"></a>
      </div>
      <div class="carousel-item" href="#five!">
        <a><img src="https://i.pinimg.com/564x/86/ed/5c/86ed5c9e9d54e43b6ee7cb81b468ae47.jpg"></a>
      </div>
    </div>
  </div>  

  <div class="container">  
    <div class="row">
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="https://i.pinimg.com/564x/a3/15/88/a31588bf76f26f48f68acb58729d682a.jpg">
            <span class="card-title">Card Title</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">+</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="https://i.pinimg.com/564x/b2/9e/ac/b29eacc023dc88ec1938de36960d2763.jpg">
            <span class="card-title">Card Title</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">+</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div>
      <div class="col s4">
        <div class="card">
          <div class="card-image">
            <img src="https://i.pinimg.com/564x/ec/aa/4a/ecaa4a6b37c2df65ec08774fbc307f3f.jpg">
            <span class="card-title">Card Title</span>
            <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">+</i></a>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Trigger -->
  <div class="container">
    <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
  </div>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>¡Felicidades!</h4>
      <p>Ganaste una tarea realizada</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
    </div>
  </div>

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.carousel');
      var instances = M.Carousel.init(elems, {
        indicators: true
      });
    });

    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems);
    });
  </script>

</body>
</html>