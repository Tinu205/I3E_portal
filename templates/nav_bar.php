<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .navbar {
        background-color: transparent !important; /* Make navbar transparent */
    }
    .navbar img {
        margin-right: 10px;
    }
    .navbar-nav {
        display: flex;
        justify-content: flex-end; /* Align nav links to the right */
        width: 100%;
    }
    .navbar-nav .nav-link {
        color: #333 !important; /* Set text color to dark */
        font-family: 'Montserrat', sans-serif; /* Use Montserrat font */
        font-size: 1.2rem; /* Increase font size */
        transition: color 0.3s, background-color 0.3s; /* Add transition for smoother color change */
    }
    .navbar-nav .nav-link:hover {
        color: #555 !important; /* Change text color when hovered */
        background-color: #f8f9fa; /* Change background color when hovered */
    }
</style>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <img src="assets/brand/ieee_resize 100.png">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#hom">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#our_goals">Our goals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#current_eve">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#past_eve">Our Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#cont">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
