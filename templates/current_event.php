<style>
    .carousel{
      margin-top:2rem;
    }
    .carousel-container {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80vh;
        margin: 0 auto; /* Center horizontally */
    }
    .carousel-item {
        position: relative; /* Ensure relative positioning for absolute positioning of captions */
    }
    .carousel-item img {
        max-width: 60%; /*Ensure images don't overflow*/
        height: auto; /*Maintain aspect ratio*/
        display: block; /* Make sure images behave as block elements */
        margin: 0 auto; /* Center horizontally */
    }
    .carousel-caption {
        position: absolute; /* Position captions absolutely */
        top: 50%; /* Align captions to the vertical center */
        left: 50%; /* Align captions to the horizontal center */
        transform: translate(-50%, -50%); /* Center the caption */
        background-color: rgba(0, 0, 0, 0.5); /* Transparent black background */
        color: #fff; /* White text */
        padding: 10px;
        opacity: 0; /* Initially hidden */
        transition: opacity 0.3s ease; /* Smooth transition */
        width: 60%; /* Set width to match the width of the image */
        text-align: center; /* Center align text horizontally */
        height : 100%;
    }
    .carousel-item:hover .carousel-caption {
        opacity: 1; /* Show captions on hover */
    }
    .croscont{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    @media (max-width: 768px) {
        .carousel-container {
            width: 100%; /* Full width on smaller screens */
        }
        .carousel-item img {
            max-width: 100%; /* Ensure images don't overflow */
        }
        .carousel-caption {
            width: 90%; /* Set width to 90% of the container */
        }
    }

    
</style>

<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-container">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="assets/brand/conf.avif" class="d-block" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class = "croscont" style="color:white">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <button type="Button" class="btn btn-success">Register now</button>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="assets/brand/conf.avif" class="d-block " alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class = "croscont" style="color:white">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <button type="Button" class="btn btn-success">Register now</button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/brand/conf.avif" class="d-block" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <div class = "croscont" style="color:white">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
                <button type="Button" class="btn btn-success">Register now</button>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
