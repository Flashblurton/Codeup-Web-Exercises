<?php
	var_dump($_GET);
	var_dump($_POST);
?>
<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<title>My first form</title>
	</head>

<body>

 	<form method="POST" action="/my_first_form.php">

    	<p>
    		<label for="Flashblurton">FlashBlurton</label>
    		<input id="FlashBlurton" name="FlashBlurton" placeholder="FlashBlurton"></input>
    	</p>
    	<p>
        	<label for="username">Username</label>
        	<input id="username" name="username" type="text" placeholder="username">
    	</p>

    	<p>
        	<label for="password">Password</label>
        	<input id="password" name="password" type="password" placeholder="password">
    	</p>

    	<p>
    		<label for="submit">Submit</label>
        	<input type="submit">
    	</p>

	</form>

	<form method="POST" action="/my_first_form.php">

    <h2>User Login</h2>

       	<p>
       		<input id="To" name="To" type="To" placeholder="To">
       	</p>
    	<p>
        	<input id="from" name="from" type="from" placeholder="from">
        </p>
    	<p>    	
       		<input id="subject" name="subject" type="subject" placeholder="subject">
   		</p>

    <h2>Compose an Email</h2>

    	<p>
    		<textarea id="email_body" name="email_body" rows="5" cols="40">Content Here</textarea>
    	</p>
    	<p>
    		<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
    		<label for="checkbox" type="checkbox">Sign me up for the mailing list!</label>
		</p>
 		<p>
 			<input type="submit">
 		</p>

    <form>

    <h2>Multipule Choice Test</h2>

    	<p>What is the World Record 100 Meter sprint?</p>

			<label><input type="radio" name="q1" value="9.79">9.79</label>

			<label><input type="radio" name="q2" value="9.49">9.49</label>

			<label><input type="radio" name="q3" value="10.01">10.01</label>

	    	<label><input type="radio" name="q4" value="9.81">9.81</label>
    
    	<p>Who has not played in the National Football League</p> 

			<label><input type="checkbox" id="os1" name="os[]" value="linux">Allen Iverson</label> 

			<label><input type="checkbox" id="os2" name="os[]" value="osx">Brett Farve </label>

			<label><input type="checkbox" id="os3" name="os[]" value="windows">Bruce lee</label>

	 	<p>
	 		<input type="submit">
	 	</p>

    <label for="os">How confident are you in your coding skills?</label>

        <p><select id="os" name="os[]" multiple>
            <option value="linus">0-3</option>
             <option value="osx">4-6</option>
            <option value="windows">7-9</option>
        </select></p>

        <p> 0-3 being not confident at all</p>
        <p> 4-6 being you have a slight understanding</p>
        <p> 7-9 lets get some cdoing done</p>



    
    </form>
    <form>
    <h2>Select Testing</h2>

    <label for="transmission">Are you having fun at Codeup? </label>

        <select id="transmission" name="transmission">

            <option selected="Yes" value="1">Yes</option>
            <option value="0">No</option>

        </select>

        <p>
            <input type="submit"></p>
    </form>

    
</body>

</html>
