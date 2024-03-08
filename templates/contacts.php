<style>
    .album {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    @media (max-width: 576px) {
        .album .row-cols-1 > .col {
            display: flex;
            justify-content: center;
        }
    }
    .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 300px; /* Set the height of the card */
        padding: 20px; /* Add padding */
    }
    .card-body {
        text-align: center; /* Center align text */
    }
    /* Center the cards horizontally */
    .row {
        justify-content: center;
    }
</style>

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">
                    <!-- Profile Image -->
                    <img src="path_to_your_image" alt="Profile Image" style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 20px;">
                    <!-- Card Body -->
                    <div class="card-body">
                        <p class="card-text">Name:</p>
                        <p class="card-text">Designation:</p>
                        <p class="card-text">Email:</p>
                        <p class="card-text">Phone</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <!-- Profile Image -->
                    <img src="path_to_your_image" alt="Profile Image" style="width: 100px; height: 100px; border-radius: 50%; margin-bottom: 20px;">
                    <!-- Card Body -->
                    <div class="card-body">
                        <p class="card-text">Name:</p>
                        <p class="card-text">Designation:</p>
                        <p class="card-text">Email:</p>
                        <p class="card-text">Phone</p>
                    </div>
                </div>
            </div>
            <!-- Add more columns as needed -->
        </div>
    </div>
</div>
