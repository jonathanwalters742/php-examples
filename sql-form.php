<?php

if (isset($_POST['submit'])){
    
    $title = $_POST['title'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $newsletter = $_POST['newsletter'];

    //Default error value.
    $errors = 0;

    //error checks
    if (empty($title)) {$errors = 1;}
    if (empty($fName)) {$errors = 2;}
    if (empty($lName)) {$errors = 3;}
    if (empty($street)) {$errors = 4;}
    if (empty($city)) {$errors = 5;}
    if (empty($province)) {$errors = 6;}
    if (empty($postalCode)) {$errors = 7;}
    if (empty($country)) {$errors = 8;}
    if (empty($phoneNumber)) {$errors = 9;}
    if (empty($email)) {$errors = 10;}

    
    
    //Repost the entire form in the first if and do the success in the else.
    if ($errors > 0) {
        //re-show the form

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Database Form</title>
        <p> Fields marked with (*) are required to be filled in.<p>
    </head>
    <body>
        <form action='sql-form.php' method= 'POST'>
                Title: <select name='title'>
                            <option value="">Please Choose...</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Dr">Dr</option>
                        </select>
                        <?php if (empty($title)) echo "<span style= 'color:red;'> *Required Field</span>" ?>
                        <br />
                First Name:<input name='fName' type='text' value='' placeholder='Enter first name' />
                <?php if (empty($fName)) echo "<span style= 'color:red;'> *Required Field</span>" ?><br /> 
                   
                Last Name:<input name='lName' type='text' value='' placeholder='Enter last name' />
                <?php if (empty($lName)) echo "<span style= 'color:red;'> *Required Field</span>" ?><br />

                Street:<input name='street' type='text' value='' placeholder='Enter street address' />
                <?php if (empty($street)) echo "<span style= 'color:red;'> *Required Field</span>" ?><br />

                City:<input name='city' type='text' value='' placeholder='Enter city' />
                <?php if (empty($city)) echo "<span style= 'color:red;'> *Required Field</span>" ?><br />

                Province:<input name='province' type='text' value='' placeholder='Enter province' />
                <?php if (empty($province)) echo "<span style= 'color:red;'> *Required Field</span>" ?><br />  

                Postal Code:<input name='postalCode' type='text' value='' placeholder='Enter postal code' />
                <?php if (empty($postalCode)) echo "<span style= 'color:red;'> *Required Field</span>" ?><br />

                Country: <select name='country'>
                            <option value="">Please Choose...</option>
                            <option value="canada">Canada</option>
                            <option value="usa">United States</option>
                        </select>
                        <?php if (empty($country)) echo "<span style= 'color:red;'> *Required Field</span>" ?>
                        <br />

                Phone Number:<input name='phoneNumber' type='text' value='' placeholder='Enter a phone number' />
                <?php if (empty($phoneNumber)) echo "<span style= 'color:red;'> *Required Field</span>" ?><br />

                Email:<input name='email' type='text' value='' placeholder='Enter email address' />
                <?php if (empty($email)) echo "<span style= 'color:red;'> *Required Field</span>" ?><br />
                

                Would you like to subscribe to our newsletter?
                    <input type="checkbox" name='newsletter' ><br/>
            <input name='submit' type='submit' value='submit' />     
        </form>
    </body>
</html>    

<?php

    } else {
        //no errors

        $conn = mysqli_connect("localhost", "homestead", "secret", "assignment3");
        if (!$conn) {
            die("connection failed:" . mysqli_connect_error() );
        }

        if($newsletter == "on") {
            $news = 1;
        }else{
            $news = 0;
        }

        //insert into database
        $sql = "INSERT INTO registered_users VALUES (NULL,  '".$title."',  '".$fName."',  '".$lName."',
          '".$street."',  '".$city."',  '".$province."',  '".$postalCode."',  '".$country."',  '".$phoneNumber."',  '".$email."', '".$news."');";
        $conn->query($sql);
        echo $conn->error;
       //echo $sql; To see if the data is being retreived.

        //retrieve all entries from database
        $sql = "SELECT * FROM registered_users";
        $retrievedValues = mysqli_query($conn, $sql);

        //loop through each entry
        $html = "<table border = '4'>
               <tr>
                   <th>User ID</th>
                   <th>Title</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Street</th>
                   <th>City</th>
                   <th>Province</th>
                   <th>Postal Code</th>
                   <th>Country</th>
                   <th>Phone Number</th>
                   <th>Email Address</th>
                   <th>Newsletter</th>
               </tr>";
        //loop through each entry
        while( $row = mysqli_fetch_assoc($retrievedValues)) {
            $user_id = $row['user_id'];
            $title = $row['title'];
            $fName = $row['fName'];
            $lName = $row['lName'];
            $street = $row['street'];
            $city = $row['city'];
            $province = $row['province'];
            $postalCode = $row['postalCode'];
            $country = $row['country'];
            $phoneNumber = $row['phoneNumber'];
            $email = $row['email'];
            $newsletter = $row['newsletter'];
            
            $html .= "
                <tr>
                    <td>".$user_id."</td>
                    <td>".$title."</td>
                    <td>".$fName."</td>
                    <td>".$lName."</td>
                    <td>".$street."</td>
                    <td>".$city."</td>
                    <td>".$province."</td>
                    <td>".$postalCode."</td>
                    <td>".$country."</td>
                    <td>".$phoneNumber."</td>
                    <td>".$email."</td>
                    <td>".$newsletter."</td>
                </tr>";
                    
        }


            $html .= "</table>";
        echo $html;
    }

}


?>