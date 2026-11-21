<html>

<head>
    <title>David Hunter Week 2 Performance Assessment </title>
</head>

<body>
    <form method='POST'>
        <h3>Enter your name name: <input type="text" name="name"></h3>
        <h3>Enter your birthdate: <input type="text" name="bdate"></h3>
        <h3>Enter your favorite color: <input type="text" name="favcol"></h3>
        <h3>Enter your favorite place to visit: <input type="text" name="favpla"></h3>
        <h3>Enter your nickname: <input type="text" name="nname"></h3>
        <input type="submit" value="Submit Values">
    </form>
    <?php
        //Declare and clear variables for display
        $name = '';
        $birthday = '';
        $favoritecol = '';
        $favoritepla = '';
        $nickname = '';

        //Retrieve the values from query string store in a local variable as long as the query exists
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }
        
        if (isset($_POST['bdate'])) 
            $birthday = $_POST['bdate'];
        
        if (isset($_POST['favcol'])) 
            $favoritecol = $_POST['favcol'];
        
        if (isset($_POST['favpla'])) 
            $favoritepla = $_POST['favpla'];

        if (isset($_POST['nname']))
            $nickname = $_POST['nname'];

        var_dump($name);
        var_dump($birthday);

        
        //Display the values entered as long as there is a value greater than 0
        if (strlen($name) > 0)
            echo "<h3> The name you entered is: $name </h3>";
        else
            echo "<h3> You didn't enter a name! </h3>";
        
        if (strlen($birthday) > 0) 
            echo "<h3> The birthdate you gave is: $birthday </h3>";
        else
            echo " <h3>You didn't enter a birthdate! </h3>";

        if (strlen($favoritecol) > 0) 
            echo "<h3> You said your favorite color is: $favoritecol </h3>";
        else
            echo " <h3> You didn't enter a favorite color! </h3>";

        if (strlen($favoritepla) > 0) 
            echo "<h3> You said your favorite place is: $favoritepla </h3>";
        else
            echo " <h3> You didn't enter a favorite place! </h3>";

        if (strlen($nickname) > 0) 
            echo "<h3> You said your nickname is: $nickname </h3>";
        else
            echo " <h3> You didn't enter a nickname! </h3>";
    ?>
</body>

</html>