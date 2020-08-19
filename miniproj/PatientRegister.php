<!DOCTYPE html>
<html>
<body>

<h1>The fieldset element</h1>

<form action="PatientRegister.php">
 <fieldset>
  <legend>Personalia:</legend>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <label for="birthday">Birthday:</label>
  <input type="date" id="birthday" name="birthday"><br><br>
  <label for="gender">Gender:</label>
  <select id="gender" name="gender">
    <option value="male">male</option>
    <option value="female">female</option>
    <option value="other">others</option>
  </select><br><br>
  <div class="Patient_location">
                    <label>Location: </label>
                    <textarea id="location1" name="location1" rows="1" cols="50" required> Location1 </textarea>
                </div>
  
  <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <input type="submit" value="Submit">
 </fieldset>
</form>

</body>
</html>
