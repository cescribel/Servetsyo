<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agriculture </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0 mb-5">
         <a href="index.php" class="navbar-brand ms-lg-5" style="color: #378ACA; font-weight: bold; ">
           <img src="../img/logo.jpg"  class="img-fluid" style="width: 90px; height: ms-auto;" alt="..." >
           SERVETSYO
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="../index.php" class="nav-item nav-link">Home</a>
                <a href="../about.php" class="nav-item nav-link">About</a>
                <a href="../service.php" class="nav-item nav-link">Service</a>
                <a href="../Petforadoption.php" class="nav-item nav-link">Pet for adoption</a>
                <a href="../Pet_needs.php" class="nav-item nav-link">Pet needs</a>
                <a href="../blog.php" class="nav-item nav-link">Blog Grid</a>

                <a href="../login/Login.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Login<i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Adoption form start -->
    <div class="Schedule-form">
        <h1>Schedule Request</h1>
        <form>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Your name">
  
          <label for="Number">Number:</label>
          <input type="text" id="number" name="number" placeholder="Your Number:">

          <div class="form-group">
            <label for="Schedule">Schedule For:</label>
            <select id="Schedule" name="Schedule" required>
              <option value="">-- Schedule For --</option>
              <option value="Vaccination">Vaccination</option>
              <option value="Neuter">Neuter</option>
            </select>
          </div>
  
          <label for="date">Date:</label>
          <input type="text" id="date" name="date" placeholder="Preferred date">
  
          <label for="time">Time:</label>
          <input type="text" id="time" name="time" placeholder="Preferred time">
  
          <label for="message">Message:</label>
          <textarea id="message" name="message" placeholder="Additional details"></textarea>

          <input type="submit" value="Submit">
        </form>
      </div>
      
    <!-- Adoption form end -->

    <!-- Footer Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>AgriCoop Building, Baliwag Government Complex, DRT Highway,, Baliuag, Philippines</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>baliwag.gov.ph</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>0923 304 7360</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-body mb-2" href="../index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-body mb-2" href="../about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-body mb-2" href="../service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-body mb-2" href="../Petforadoption.php"><i class="bi bi-arrow-right text-primary me-2"></i>Pet for adoption</a>
                        <a class="text-body mb-2" href="../blog.php"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-body" href="../contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>                    </div>
                    </div>
                </div>

                    <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square me-2" href="https://www.facebook.com/baliwagvetservice"><i class="bi bi-facebook"></i></a>
                    </div>
                </div>
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>