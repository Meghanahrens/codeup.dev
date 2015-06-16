<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<h2>User Login</h2>
<title>My First HTML Form</title>
<form method="POST" action="/my_first_form.php">
  
    <p>
        <label for="username">Username</label>
        <input id="username" name="username" placeholder="username" type="text">
    </p>
    <p>
        <label for="password">Password</label>
        <input id="password" name="password" placeholder="password" type="password">
    </p>
    <p>
     
        <button type="submit">Button</button>
    </p>
</form>
<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<form method="POST" action="/my_first_form.php"
<h2>Compose an E-mail</h2>
<br></br>
    <input type="text" id="email" name="email" value="" placeholder="Reciever's E-mail"></input>
<br></br>
    <input type="email" id="email" name="email" value="" placeholder="Sender's Email"></input>
<br></br>
    <label for="to">To:</label>
    <input id="name" name="name" placeholder="Name" type="text">
<br></br>
    <label for="from">From:</label>
    <input id="name" name="name" placeholder="Name" type="text">
<br></br>
    <label for="subject">Subject:</label>
    <input id="subject" name="subject" placeholder="Subject" type="text">
<br></br>
    <textarea id="email_body" name="email_body" rows="5" cols="40" placeholder="Compose E-mail" type="text"></textarea>

<br></br>
    <input type="checkbox" id="save_copy" name="save_copy" value="yes" checked>
    <label for="save_copy">Save a copy to your sent foler?</label>

<br></br><button type="submit">Send</button>
<h2>Multiple Choice Test</h2>
<p>What color is the sky?</p>
<label>
    <input type="radio" name="q1" value="Pink">Pink
</label>
<label>
    <input type="radio" name="q1" value="Green">Green
</label>
<label>
    <input type="radio" name="q1" value="Blue">Blue
</label>
<label>
    <input type="radio" name="q1" value="Orange">Orange
</label>
<p>2+2= ?</p>
<label>
    <input type="radio" name="q2" value="200">200
</label>
<label>
    <input type="radio" name"q2"  value="4">4
</label>
<label>
    <input type="radio" name"q2" value="22">22
</label>
<label>
    <input type="radio" name="q2" value="3">3
</label>
<p>Where would you like to visit?</p>
<label><input type="checkbox" id="os1" name="os[]" value="australia">Australia</label>
<label><input type="checkbox" id="os2" name="os[]" value="russia">Russia</label>
<label><input type="checkbox" id="os3" name="os[]" value="mexico">Mexico</label>
<label><input type="checkbox" id="os4" name="os[]" value="canada"> Canada</label>
</form>
<form method="POST" action="/my_first_form.php">

<?php
  var_dump($_GET);
  var_dump($_POST);
?>
<h2>Select Testing</h2>
<label for="lemon_water">Do you put lemons in your water?</label>
<select id="lemon_water" name="lemon_water">
    <option value="Youareawesome">Yes</option>
    <option value="Youarelame">No</option>
</select>
<button>Submit</button>