<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>Geo Hub</title>
  </head>
  <body>
    <header>
      <nav>
        <div class="nav_icon">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
              d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"
            />
          </svg>
        </div>
        <div class="options">
          <ul>
            <li>Home</li>
            <li>
              <select>
                <option value="">Catagories</option>
                <option value="">Hammer</option>
                <option value="compus">Compus</option>
                <option value="">Map</option>
              </select>
            </li>
            <li>Refurbished</li>
            <li>Clothes</li>
          </ul>
        </div>
        <div class="profile">
          <button>Log In</button>
          <button>Sign Up</button>
        </div>
      </nav>
    </header>
    <main>
      <div class="container">
        <div class="card">
          <div class="card_body">
            <img src="" alt="" />
          </div>
          <div class="details">
            <div class="titel">
              <span class="name"></span>
              <br>
              <span class="price"><b></b></span>
            </div>
            <div class="description"></div>
          </div>
        </div>
      </div>
    </main>
    <div class="pop-up">
      <form action="" method="POST" class="form-container">
        <div class="inputBox">
          <label for="name">Name : </label>
          <input type="text" name="name" id="name" />
        </div>
        <div class="inputBox">
          <label for="email">Email : </label>
          <input type="email" id="email" name="email" />
        </div>
        <div class="inputBox radioBox">
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="other" value="other">
            <label for="other">Other</label>
        </div>
        <div class="inputBox">
            <label for="address">Address : </label>
            <textarea name="address" id="address" cols="50" rows="2" placeholder="Write your complete address"></textarea>
        </div>
        <div class="inputBox">
            <label for="profile_photo">Profile Photo : </label>
            <input type="file" name="profile_photo" id="profile_photo" accept="image/*" capture="environment">
        </div>
        <div class="inputBox">
            <label for="password">Create Password : </label>
            <input type="password" name="password" id="password">
        </div>
        <div class="inputBox">
            <label for="cpassword">Conform Password : </label>
            <input type="password" name="cpassword" id="cpassword">
        </div>
        <div class="inputBox signUp">
            <button type="submit">Sign Up</button>
        </div>
        <div class="inputBox">
            <p>If already have account <a href="#logIn">Log In</a> here</p>
        </div>
      </form>
    </div>
  </body>
</html>
<?php
  
?>
