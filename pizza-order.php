<!DOCTYPE html>
<html>
    <head>
        <title>test</title>
    </head>
    <body>
        <form action='pizza-total.php' method= 'POST'>
            Pizza Size: <select name='pizza'>
                        <option value=''>Select Size...</option>
                        <option value='small pizza'>Small Pizza $9.00</option>
                        <option value="medium pizza">Medium Pizza $12.50</option>
                        <option value="large pizza">Large Pizza $15.00</option>
                        <option value="extra large pizza">Extra Large Pizza $17.50</option>
                        <br>
                        </select>
                        
                    <li  style="list-style:none;">
                    Toppings:
                    <input type="checkbox" name='cheese' value='1'>
                    <label for="cheese"\>Cheese (No Cost)</label>
                    
                    <input type="checkbox" name='pepperoni' value='1'>
                    <label for="pepperoni"\>Pepperoni $1.00</label>

                    <input type="checkbox" name='olive' value='1'>
                    <label for="olive"\>Olives $1.00</label>

                    <input type="checkbox" name='pineapple' value='1'>
                    <label for="pineapple"\>Pineapple $1.00</label>

                    <input type="checkbox" name='ham' value='1'>
                    <label for="ham"\>Ham $1.00</label>
                    </li>
             <br>   
            <input name='submit' type='submit' value='Submit Order' />     
        </form>
    </body>
</html>    