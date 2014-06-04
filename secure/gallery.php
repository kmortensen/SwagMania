<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Upload billeder til gallery</p>
        <form action="accept-file.php" method="post" enctype="multipart/form-data">
        <label for="file">Filename:</label>
        <input type="file" name="file" id="file">
        <input type="submit" name="Upload" value="Submit">
        </form>
        <form action="delete-file.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><input type="checkbox" name="delete" value="3.jpg"></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="delete" value="2.jpg"></td>
                </tr>
            </table>
            <input type="submit" name="Delete" value="Submit">
        </form>
        <?php
        
        ?>
    </body>
</html>
