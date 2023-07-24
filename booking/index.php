

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Booking Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Booking Details</Details></h1>
      <form action="insert.php" method="POST" id="form" autocomplete="off">
        <div class="booking-details">
          <div class="user-input-box">
            <label for="fullName">First Name</label>
            <input type="text" id="fullName" name="firstName" placeholder="Enter Full Name"/>
          </div>
          <div class="user-input-box">
            <label for="dateadd">Date</label>
            <input type="date" id="dateadd" name="dateadd">
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Enter Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number"/>
          </div>
          <div class="user-input-box">
            <label for="address">Address</label>
            <textarea id="address" name="address" placeholder="Enter Your Address"></textarea>
          </div>
          <div class="user-input-box">
            <label for="selectField">Select</label>
             <select name="selectField" id="selectField">
              <option value="" style="color: grey;">Select an option</option>
              <option value="Nature Photography">Nature Photography</option>
              <option value="Portrait">Portrait</option>
              <option value="Wildlife">Wildlife</option>
              <option value="Wedding">Wedding</option>
          </select>
          </div>
        </div>
        <div class="gender-details">
          <span class="gender">Gender</span>
          <div class="gender-category">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>
          </div>
        </div>
        <div class="btn">
        <button type="submit" class="bookbtn">register</button>
        </div>
        <!-- <div class="form-submit-btn">
          <input type="submit" value="Book Now">
        </div> -->
      </form>
    </div>
   <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="script.js" ></script>
  </body>
</html>