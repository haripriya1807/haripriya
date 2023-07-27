
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Booking Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="" />
  </head>
  <body>
    <div class="admin">
    <button type="button" class="button"><span class="text">>> &nbsp  </span><a href="fetch.php">ADMIN</a></button>
    </div>
    <div class="container">
      <h1 class="form-title">Booking Details</h1>
      <form action="insert.php" method="POST" id="form" autocomplete="off" onsubmit="return validateForm()">
        <div class="booking-details">
          <div class="user-input-box">
            <label for="fullName">First Name</label>
            <input type="text" id="fullName" name="firstName" placeholder="Enter Full Name"/>
            <span id="validationMessage"></span>       
             </div>
          <div class="user-input-box">
            <label for="dateadd">Event Date</label>
            <input type="date" id="dateadd" name="dateadd">
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="text" id="email" name="email"  placeholder="Enter Email"  />
            <span id="validationemail"></span>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Phone Number</label>
            <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number"/>
            <span id="validationnumber"></span>

          </div>
          <div class="user-input-box">
            <label for="address">Address</label>
            <textarea id="address" name="address" placeholder="Enter Your Address"></textarea>
            <span id="validationaddress"></span><br>
          </div>
          <div class="user-input-box">
            <label for="selectField">Select Your Choice</label>
             <select name="selectField" id="selectField">
              <option value="" style="color: grey;">Select an option</option>
              <option value="Nature Photography">Nature Photography</option>
              <option value="Portrait">Portrait</option>
              <option value="Wildlife">Wildlife</option>
              <option value="Wedding">Wedding</option>
          </select>
          <span id="validationselect"></span><br>
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
      </form>
    </div>
   <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="script5.js"></script>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
body{
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    background: url(asset/login.jpg);
    background-size: cover;
}

.container{
    width: 100%;
    max-width: 650px;
    background: rgba(0, 0, 0, 0.5);
    padding: 28px;
    margin: 0 28px;
    border-radius: 10px;
    box-shadow: inset -2px 2px 2px white;
}

.form-title{
    font-size: 26px;
    font-weight: 600;
    text-align: center;
    padding-bottom: 6px;
    color: white;
    text-shadow: 2px 2px 2px black;
    border-bottom: solid 1px white;
}

.booking-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 20px 0;
    height: 521px;
    margin-top: 22px;
}

.user-input-box:nth-child(2n){
    justify-content: end;
}

.user-input-box{
    display: flex;
    flex-wrap: wrap;
    width: 50%;
    padding-bottom: 47px;
}

.user-input-box label{
    width: 95%;
    color: white;
    font-size: 20px;
    font-weight: 400;
    margin: 5px 0;
}
.user-add label{
	color: white;
	width: 95%;
	font-size: 20px;
	font-weight: 400;
	margin: 5px 0;

}
#address{
	height: 85px;
	width: 98%;
	border-radius: 7px;
	outline: none;
	border: 1px solid grey;
	padding: 14px 4px;
    margin-top: 32px;

}
#selectField{
	height: 50px;
	width: 95%;
	border-radius: 7px;
	outline: none;
	border: 1px solid grey;
	padding: 0 10px;
}
.gender-details{
    margin-top: 48px;
}
.user-input-box input{
    height: 50px;
    width: 95%;
    border-radius: 7px;
    outline: none;
    border: 1px solid grey;
    padding: 0 10px;
}

.gender{
    color:white;
    font-size: 24px;
    font-weight: 600;
    border-bottom: 1px solid white;
}

.gender-category{
    margin: 15px 0;
    color: white;
}

.gender-category label{
    padding: 0 20px 0 5px;
}

.gender-category label,
.gender-category input,
.form-submit-btn input{
    cursor: pointer;
}

.form-submit-btn{
    margin-top: 40px;
}


.bookbtn{
    display: block;
    width: 100%;
    margin-top: 27px;
    font-size: 20px;
    padding: 10px;
    border:none;
    border-radius: 3px;
    color: rgb(209, 209, 209);
    background: rgba(6, 196, 164, 0.7);
}

.button{
    margin: 5px;
     margin-top: 47px;
     background-color: rgb(9, 75, 31);
     width: 133px;
     color: white;
     border-radius: 6px;
     padding: 13px;
     margin-left: 43px;
    }
.button a{
    color: white;
}
@media(max-width: 600px){
    .container{
        min-width: 280px;
    }

    .user-input-box{
        margin-bottom: 12px;
        width: 100%;
    }

    .user-input-box:nth-child(2n){
        justify-content: space-between;
    }

    .gender-category{
        display: flex;
        justify-content: space-between;
        width: 100%;
    }

    .booking-details{
        max-height: 380px;
        overflow: auto;
    }

    .booking-details::-webkit-scrollbar{
        width: 0;
    }
}

        </style>
  </body>
</html>