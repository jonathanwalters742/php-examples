<html>
<head>
<title> </title>
</head>
<body>
<h1> Grade Calculator <h1>
    <!--Form action that sends information to php file that checks what was submitted-->
        <form action='grade-test.php' method= 'POST'>
            Please enter the letter or number for the grade you want to know! 
            <br>
            <!--Text input type and fields-->
            <input name="input" type="text" value="" placeholder="Enter a Grade..." />
            <br>
            <!--Input type for a submit button-->
            <input name='submit' type='submit' value='calculate!' />     
        </form>
</body>
</html>