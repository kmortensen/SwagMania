
<?php 
 $db=mysql_connect("carlsbarbershop.dk.mysql", "carlsbarbershop", "CDWyF7C8"); 
mysql_select_db("carlsbarbershop", $db);

if(mysql_query("INSERT INTO email_list (name, email) VALUES"
        . "('".$_POST['name']."', '".$_POST['email']."')")) {
                    
echo "Din mail er blevet tilføjet mailinglisten, mange tak!";

        } else { "Der er sket en fejl. Vi beklager!";
        
        }
        
        mysql_close($db);

 ?> 
<html>
    <head>
        <title>Newsletter</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <style>
                p {
                    color:red;
                }
       </style>
    </head>
    <body>
        <h1>
            Carls Barbershop newsletter subscription!
        </h1>
        <p>
            Please enter email adress here:           
        </p>
        <table>
            <form method="POST" action="submit.php">
            <th>
            <tr>
                <td>
                    <input type="text" name="name" value="">
            <tr>
                <td>
                    
                    <input type="text" name="email" value="">
                    <input type="submit" name="submit" value="Sent">
                   
                    </form>
                </td>
            </tr>
        </table> 
        
       <?php
       
       $order = "INSERT INTO Emails
       (email)
       VALUES ('$email')";

       $result = mysql_query($order);
       if($result){
           echo("<br>succes!");
       }
       else{
           echo("megafail");
       }
       
       ?>
    </body>
</html>
