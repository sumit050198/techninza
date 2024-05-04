<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .header-dark {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 24px;
        z-index: 10000;
        transition: all 800ms ease-in-out;
        /* margin-bottom: 200px; */
    }

    .main-col.d-flex {
        font-family: "Poppins", sans-serif;
    }

    .socialmedia-main-div {
        /* margin-left: 57px; */
    }

    .socialmedia-icon {
        cursor: pointer;
        padding-top: 4px;
        /* font-weight: 800; */

    }

    .flags {
        /* margin-left: 120px; */
    }

    .india {
        display: flex;
        flex-direction: row;
        /* margin: 0 0 0 20px; */
    }

    .indian-flag {
        width: 25px;
        height: 20px;
        object-fit: cover;
        padding-top: 4px;
        color: white;
    }

    .parra {
        font-size: 12px;
    }

    /* smaller screens */
    @media (max-width: 768px) {
        .header-dark {
            height: auto;
        }

        .main-col.d-flex {
            flex-direction: column;
            align-items: center;
        }

        .col.d-flex {
            width: 100%;
            margin-bottom: 10px;
            /* Add margin between rows for smaller screens */
        }

        .mx-5.d-flex {
            margin: 0;
            /* Remove horizontal margin for smaller screens */
        }

        .india {
            margin: 0;
            /* Remove margin for smaller screens */
        }
    }
</style>

<div class="container-fluid bg-dark header-dark" id="dark-nav">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex main-col">
                <div class="col-lg-6 d-flex socialmedia-main-div">
                    <div class="socialmedia-icon d-flex flex-row">
                        <i class="email-icon fas fa-envelope text-white">&nbsp; info@techninza.in</i>
                    </div>
                    <div class="socialmedia-icon mx-5 d-flex flex-row">
                        <a class="whatsapp-icon text-white" href="https://wa.me/9354388778"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <div class="socialmedia-icon d-flex flex-row">
                        <i class="bi bi-telephone text-white" id="callIme"></i>
                    </div>
                </div>

                <div class="col-lg-6 flags d-flex flex-row justify-content-end">
                    <div class="india">
                        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/1200px-Flag_of_India.svg.png" alt="Indian Flag" class="indian-flag">
                        <p class="parra text-white mx-2"> +91 1234567890</p>
                    </div>
                    <div class="india">
                        <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" alt="USA Flag" class="indian-flag">
                        <p class="parra text-white mx-2"> +14845691794</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var lastScrollTop = 0;
    var navbar = document.getElementById("dark-nav");

    window.addEventListener("scroll", function() {
        var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > lastScrollTop) {
            // Scroll down
            navbar.style.top = "-24px"; // Move the navbar out of view
        } else {
            // Scroll up
            navbar.style.top = "0"; // Bring the navbar back into view
        }

        lastScrollTop = currentScroll;
    });
    document.getElementById('callIme').addEventListener('click', function() {
      // Replace '1234567890' with the phone number you want to call
      window.location.href = 'tel:1234567890';
    });

</script>
