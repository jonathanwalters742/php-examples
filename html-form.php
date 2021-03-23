<!DOCTYPE html>
<html>
    <head>
        <title>test</title>
    </head>
    <p> Fields marked with (*) are required to be filled in.<p>
    <body>
        <form action='sql-form.php' method= 'POST'>
                Title*: <select name='title'>
                            <option value="">Please Choose...</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Dr">Dr</option>
                        </select><br />

                First Name*:<input name='fName' type='text' value='' placeholder='Enter first name' /><br />     

                Last Name*:<input name='lName' type='text' value='' placeholder='Enter last name' /><br />   

                Street*:<input name='street' type='text' value='' placeholder='Enter street address' /><br />

                City*:<input name='city' type='text' value='' placeholder='Enter city' /><br />  

                Province*:<input name='province' type='text' value='' placeholder='Enter province' /><br />  
                
                Postal Code*:<input name='postalCode' type='text' value='' placeholder='Enter postal code' /><br />  

                Country*: <select name='country'>
                            <option value="">Please Choose...</option>
                            <option value="canada">Canada</option>
                            <option value="usa">United States</option>
                        </select><br />

                Phone Number*:<input name='phoneNumber' type='text' value='' placeholder='Enter a phone number' /><br />  

                Email*:<input name='email' type='text' value='' placeholder='Enter email address' /><br />  

                Would you like to subscribe to our newsletter?
                    <input type="checkbox" name='newsletter'>
            <br/>
            <input name='submit' type='submit' value='submit' />     
        </form>
    </body>
</html>    