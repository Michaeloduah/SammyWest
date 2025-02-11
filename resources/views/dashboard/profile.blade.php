<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FastBuka - Index</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
      .profile {
        width: 60%;
      }

      .profile .profile-button {
        border-radius: 50px;
        border: #0a3a6b solid 1px;
        font-size: 15px;
        /* padding: ; */
        color: #ffffff;
        background-color: #0a3a6b;
      }

      .profile .profile-button:hover {
        background-color: #ffffff;
        color: #0a3a6b;
        transition: 0.5s;
      }

      @media screen and (max-width: 768px) {
        .profile {
          width: 90%;
        }
      }
    </style>
  </head>
  <body>
    <main class="mt-5" style="">
      <div class="profile mx-auto container">
        <h1 class="fw-bolder text-center">Your Profile</h1>
        <div class="row my-5">
          <div class="col-md-3 col-xl-3 col-12">
            <img
              src="{{ asset('storage/' . auth()->user()->image) }}"
              class="img-fluid mb-5"
              alt=""
            />
          </div>
          <div class="col-md-9 col-xl-9 col-12 px-5">
            <h1 class="fs-3 fw-bold">Personal Details</h1>
            <div class="profile-details">
              <p class="fw-medium fs-6">Name:</p>
              <h1 class="fw-bold fs-5">{{ $user->name }}</h1>
              <hr />
              <p class="fw-medium fs-6">Email:</p>
              <h1 class="fw-bold fs-5">{{ $user->email }}</h1>
              <hr />
              <p class="fw-medium fs-6">Phone Number:</p>
              <h1 class="fw-bold fs-5">{{ $user->phone }}</h1>
              <hr />
              <p class="fw-medium fs-6">Address:</p>
              <h1 class="fw-bold fs-5">{{ $user->address }}</h1>
              <hr />
            </div>
          </div>
        </div>
        <a href="{{ route('setprofile') }}" class="text-decoration-none"><button class="btn profile-button px-5 py-2">Edit Profile</button></a>
      </div>
    </main>

    <footer class="my-5">
      <p class="text-center text-secondary fw-medium" id="footer-text">
        FastBuka @ 2024 All Right Reserved
      </p>
    </footer>

    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>
