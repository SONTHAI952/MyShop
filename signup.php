<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <title>Sign Up Form</title>
      <link rel="stylesheet" href="./signup.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/login.css">
      <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
   </head>

   <body>
    <div class="container">
   <div class="header-logo">
                <a href="http://localhost/myshop/index.php">
                    <img src="img/Logo.png">
                </a>
            </div>
      <form action="mailto:sample@mail.com" method="post" enctype="text/plain">
         <h1 style="text-align: center">Sign Up</h1>

         <fieldset>
            <legend><span class="number">1</span>Your basic info</legend>
            <lable for="firstname">First Name:</lable>
            <input type="text" id="firstname" name="user_fistname"/>

            <lable for="lastname">Last Name:</lable>
            <input type="text" id="lastname" name="user_lastname"/>

            <lable for="mail">Email:</lable>
            <input type="email" id="mail" name="user_mail"/>

            <lable for="username">Username</lable>
            <input type="text" id="username" name="user_username"/>

            <lable for="password">Password</lable>
            <input type="password" id="password" name="user_password" />
         </fieldset>

         <fieldset>
            <legend><span class="number">2</span>Other details</legend>
            <lable for="birthdate">Birth Date:</lable>
            <input type="date" id="birthdate" name="user_bithdate" />

            <lable>Gender:</lable><br>
            <input type="radio" id="male" name="gender" value="male" /><label class="light" for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female" /><lable class="light" for="female">Female</lable><br>
            <input type="radio" id="other" name="gender" value="other" /><label class="light" for="other">Other</label><br>
        </fieldset>
        <fieldset>
            <lable for="country">Country</lable><br>
            <select id="country" name="country">
               <option value="IN">Vietnam</option>
               <option value="US">United States</option>
               <option value="UK">United Kingdom</option>
               <option value="TR">Turkey</option>
            </select>           
        </fieldset>
        <label for="terms">I'm accepting Terms and Condotions</lable>       
        <input type="checkbox" id="terms" name="terms" required/>
        <button type="submit">Sign Up</button>        
      </form>
      </div>
   </body>
</html>