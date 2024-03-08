<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .navbar {
        background-color: transparent !important; /* Make navbar transparent */
        position: relative; /* Ensure positioning context for absolute positioning of the image */
        font-family: 'Montserrat', sans-serif; /* Apply Montserrat font */
    }
    .navbar img {
        margin-right: 10px;
        position: absolute; /* Position the image */
        top: 50%; /* Align vertically in the middle */
        transform: translateY(-50%); /* Adjust vertical alignment */
        left: 10px; /* Set left spacing */
    }
    .navbar-nav {
        display: flex;
        justify-content: flex-end; /* Align nav links to the right */
        width: 100%;
    }
    .navbar-nav .nav-item {
        margin-left: 10px; /* Add spacing between nav items */
    }
    .navbar-nav .nav-link {
        color: #000 !important; /* Set text color to black */
        font-size: 18px; /* Increase font size */
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
