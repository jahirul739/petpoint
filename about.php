<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About</title>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/style.css"/>
</head>
<body>

  <!-- Header -->
  <header class="navbar">
    <div class="logo"><img src="assets/img/Logo-Dark.png" alt="PetPoint"/></div>
    <nav>
      <ul class="nav-links">
        <li><a href="#">About Us</a></li>
        <li><a href="#">Our Services</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Pet Relocate</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </nav>
    <a href="#" class="btn">Book an Appointment</a>
    <div class="logo"><img src="assets/img/Button.png" alt="Button"/></div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <div class="left">
        <h1>SMOOTH SAILING FOR <br>YOUR FURRY FRIEND</h1>
        <p>Traveling with pets can be daunting, but with the right preparation, it can be enjoyable for both you and your furry friend.</p>
        <img src="assets/img/Frame 1948759106.png" alt="Pet on Plane"/>
      </div>
      <div class="right">
        <form>
          <label>Name</label>
          <input type="text" placeholder="Type here" required/>

          <label>Email</label>
          <input type="email" placeholder="Type here" required/>

          <label>Phone Number</label>
          <input type="tel" placeholder="Enter your number" required/>

          <label>Date</label>
          <input type="date" required/>

          <label>Pet Category</label>
          <select required>
            <option value="">Select Category</option>
            <option value="Dog">Dog</option>
            <option value="Cat">Cat</option>
            <option value="Other">Other</option>
          </select>

          <button type="submit">Get a Quote Now</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Our Services -->
  <section class="our-services">
    <div class="form-container">
      <h1>Please fill out the form below</h1>
      <p>Traveling with pets can be daunting, but with the right preparation, it can be enjoyable for both you and your furry friend.</p>

      <div class="steps">
        <button class="step-button">Step 1<br>Pet Information</button>
        <button class="step-button">Step 2<br>Location Information</button>
        <button class="step-button">Step 3<br>Additional Service</button>
      </div>

      <form class="pet-form">
        <h3>Pet Information (01)</h3>

        <label>Number of Pet</label>
        <input type="number" placeholder="1"/>

        <label>Breed</label>
        <input type="text" placeholder="Not Selected"/>

        <label>Spaying/Neutering Status</label>
        <input type="text" placeholder="Yes/No"/>

        <label>Age</label>
        <input type="number" placeholder="2"/>

        <label>Weight (in grams)</label>
        <input type="number" placeholder="1280"/>

        <label>Vaccination Report</label>
        <input type="text" placeholder="Up-to-date"/>

        <label>Health Condition</label>
        <textarea placeholder="Type here"></textarea>

        <label>Any Specific Medicine</label>
        <textarea placeholder="Type here"></textarea>

        <label>Behaviour Training</label>
        <textarea placeholder="Type here"></textarea>

        <label>Health Certificate</label>
        <input type="text" placeholder="Issued / Pending"/>
          
        <button type="button" class="add-pet">Add Another Pet Information</button>
           <!-- Navigation Buttons -->
           <div class="form-navigation">
        <button type="button" class="prev-button">Previous</button>
        <button type="button" class="next-button">Next</button>
        <button type="submit" class="submit-button" style="display: none;">Submit</button>
        </div>
      </form>
    </div>

 
  </section>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="assets/script.js"></script>
</body>
</html>


</body>
</html>