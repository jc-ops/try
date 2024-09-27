<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 2 - Team Profile</title>

    <style>
        body {
            background: linear-gradient(45deg, #d2001a, #7462ff);
            font-family: Arial, sans-serif;
            color: #333;
            text-align: center;
            padding: 20px;
            margin: 0; 
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        .navbar {
            background-color: linear-gradient(to top, #660033 0%, #ff99cc 100%);
            color: #fff;
            padding: 10px 0;
            margin-bottom: 20px;
        }
        .navdiv ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .navdiv li {
            display: inline-block;
            margin: 0 15px;
        }
        .navdiv a {
            color: #fff;
            text-decoration: none;
        }
        .navdiv a:hover {
            text-decoration: underline;
            color: Red;
        }
        /* Add Member Form Styles */
        #addMemberForm {
            margin: 20px 0;
        }
        #addMemberForm label {
            display: block;
            margin-bottom: 5px;
        }
        #addMemberForm input,
        #addMemberForm textarea {
            width: 20%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            background: Gray;
        }
        #addMemberForm button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #addMemberForm button:hover {
            background-color: #555;
        }
        /* Error Message Styles */
        .error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
        #suggestions {
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            width: 200px;
            max-height: 200px;
            overflow-y: auto;
            display: none;
        }
        #suggestions li {
            list-style: none;
            padding: 8px;
            cursor: pointer;
        }
        #suggestions li:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <header>
        <h1>MEET OUR TEAM PALABAN</h1>
    </header>

    <nav class="navbar">
        <div class="navdiv">
            <ul>
                <li><a href="teamprofile.php">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </nav>


    <div id="addMemberForm">
        <h2>Add New Team Member</h2>
        <form id="newMemberForm" method="post" action="">
            <label for="name">Last Name and First Name:</label>
            <input type="text" name="name" id="name" required>
            <span class="error" id="nameError"></span>
            <p>Suggestions: <span id="txtHint"></span></p>

            <label for="position">Position:</label>
            <textarea name="position" id="position" ></textarea>
            <span class="error" id="positionError"></span>

            <label for="photo">Photo URL:</label>
            <input type="text" name="photo" id="photo" >
            <span class="error" id="photoError"></span>

            <label for="description">Description:</label>
            <textarea name="description" id="description" ></textarea>
            <span class="error" id="descriptionError"></span>

            <label for="age">Age:</label>
            <input type="number" name="age" id="age" required>
            <span class="error" id="ageError"></span>

            <label for="birthday">Birthday:</label>
            <input type="date" name="birthday" id="birthday" required>
            <span class="error" id="birthdayError"></span>

            <label for="contact">Contact Number:</label>
            <input type="text" name="contact" id="contact" required>
            <span class="error" id="contactError"></span>

            <label for="address">Address:</label>
            <textarea name="address" id="address" required></textarea>
            <span class="error" id="addressError"></span>

            <label for="github">GitHub Profile URL:</label>
            <input type="text" name="github" id="github" required>
            <span class="error" id="githubError"></span>

            <button type="submit" id="submitBtn">Add Member</button>
        </form>
    </div>

    <script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "gethint.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>

<script src="jquery-3.7.1.min.js"></script>

</head>
<body>



</body>
</html>