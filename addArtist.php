<html> 
<h1> Add an artist: </h1> 
<h3> <i> Please enter the appropriate information below </i> </h3>
<body>     
    <form action="insertArtist.php" method="post">
        <p>Artist ID Number: <input type="number" name="artistID" /></p>
        <p>First name: <input type="text" name="fname" /></p>
        <p>Last name: <input type="text" name="lname" /></p>
        <p>Address: <input type="text" name="address" /> </p>
        <p>Country of origin: <input type="text" name="countryOfOrigin" /> </p> 
        <p>Phone numbers (1 minimum, up to 5): </p> 
        <!-- Phone: (phone_number, phone_type, phone_preferred) -->
        <p> Number: <input type="text" name="phnum1"> <br> 
            Phone type: <br> 
            <input type="radio" name="phnum1type" value="Cell">
                <label for="phnum1type"> Cell </label> 
                <input type="radio" name="phnum1type" value="Home">
                <label for="phnum1type"> Home </label> <br> 
            Is prefered number:  <br> 
                <input type="radio" name="phnum1pref" value="Y">
                <label for="phnum1pref"> Preferred </label> 
                <input type="radio" name="phnum1pref" value="N">
                <label for="phnum1pref"> Not preferred </label>
        </p>
        <p> Number: <input type="text" name="phnum2"> <br> 
            Phone type: <br> 
            <input type="radio" name="phnum2type" value="Cell">
                <label for="phnum2type"> Cell </label> 
                <input type="radio" name="phnum2type" value="Home">
                <label for="phnum2type"> Home </label> <br> 
            Is prefered number:  <br> 
                <input type="radio" name="phnum2pref" value="Y">
                <label for="phnum2pref"> Preferred </label> 
                <input type="radio" name="phnum2pref" value="N">
                <label for="phnum2pref"> Not preferred </label>
        </p>
        <p> Number: <input type="text" name="phnum3"> <br> 
            Phone type: <br> 
            <input type="radio" name="phnum3type" value="Cell">
                <label for="phnum3type"> Cell </label> 
                <input type="radio" name="phnum3type" value="Home">
                <label for="phnum3type"> Home </label> <br> 
            Is prefered number:  <br> 
                <input type="radio" name="phnum3pref" value="Y">
                <label for="phnum3pref"> Preferred </label> 
                <input type="radio" name="phnum3pref" value="N">
                <label for="phnum3pref"> Not preferred </label>
        </p>
        <p> Number: <input type="text" name="phnum4"> <br> 
            Phone type: <br> 
            <input type="radio" name="phnum4type" value="Cell">
                <label for="phnum4type"> Cell </label> 
                <input type="radio" name="phnum4type" value="Home">
                <label for="phnum4type"> Home </label> <br> 
            Is prefered number:  <br> 
                <input type="radio" name="phnum4pref" value="Y">
                <label for="phnum4pref"> Preferred </label> 
                <input type="radio" name="phnum4pref" value="N">
                <label for="phnum4pref"> Not preferred </label>
        </p>
        <p> Number: <input type="text" name="phnum5"> <br> 
            Phone type: <br> 
            <input type="radio" name="phnum5type" value="Cell">
                <label for="phnum5type"> Cell </label> 
                <input type="radio" name="phnum5type" value="Home">
                <label for="phnum5type"> Home </label> <br> 
            Is prefered number:  <br> 
                <input type="radio" name="phnum5pref" value="Y">
                <label for="phnum5pref"> Preferred </label> 
                <input type="radio" name="phnum5pref" value="N">
                <label for="phnum5pref"> Not preferred </label>
        </p>
        <p><input type="submit" /></p>
    </form> 
</body> 
</html>
