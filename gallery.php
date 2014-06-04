<!DOCTYPE html>
<html>
    <head>
        <script src="viewImages.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Carls Barber Shop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
    </head>
    <body>
        <div style="position: absolute; width: 100%; height: 100%; left: 0; top: 0; overflow: visible;">
        <div id="menu">
            <div id="menuLeft">
                <a href="index.html"><img src="logo.png" alt="logo"></a>
            </div>
            <div id="menuMiddle">
                <ul>
                    <li>
                        <a href="news.html">Nyheder</a>
                        <ul>
                            <li>
                                <a href="news.html">Seneste</a>
                            </li>
                            <li>
                                <a href="subscribe.html">Subscribe</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="products.html">Produkter</a>
                    </li>
                    <li style="background-color: white;">
                        <a href="gallery.php">Gallery</a>
                    </li>   
                    <li>
                        <a href="http://jegvilbestilletid.dk/carls.barber-shop" target="_blank">Booking</a>
                    </li>  
                </ul>
            </div>
            <div id="menuRight">
                <table>
                    <tr>
                        <td>
                            <a href="http://www.facebook.com">
                                <img src="http://www.unitycenterps.org/wp-content/uploads/facebook-icon.png" alt="facebook icon">
                            </a>
                        </td>
                        <td>
                            <a href="http://www.instagram.com">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE8MpWm6nb5M3QmYkjP-e1wt38KS7smG9x45PPzKTPzoEwqkh_" alt="instagram icon">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div id="gallery">
            <div onclick="changeImage('none')" id="resetImage" style="display: none; position: absolute; top: 0; height: 0; left: 0; right: 0; z-index: 95; display: none; background-color: white; opacity: 0.9;"></div>
            <table id="galleryTable"><?php
    $counter=0;
    if ($handle = opendir('./gallery/')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                if ($counter % 5==0) {
                    echo "
                <tr>
                    <td>
                        <img onclick=\"changeImage('gallery/". $entry ."')\" src=\"gallery/". $entry ."\" id=\"". $entry ."\" alt=\"". $entry ."\">
                    </td>";
                }
                else if ($counter % 5==4) {
                    echo "
                    <td>
                        <img onclick=\"changeImage('gallery/". $entry ."')\" src=\"gallery/". $entry ."\" id=\"". $entry ."\" alt=\"". $entry ."\">
                    </td>
                <tr>";
                                        
                }
                else {
                    echo "
                    <td>
                        <img onclick=\"changeImage('gallery/". $entry ."')\" src=\"gallery/". $entry ."\" id=\"". $entry ."\" alt=\"". $entry ."\">
                    </td>";
                }
                $counter++;
            }
        }
        if ($counter % 5 !== 0) {
            echo "
                </tr>";
        }
        closedir($handle);
   }
?>
                
            </table>
            <img onclick="changeImage('none')" src="none" id="showImage" style="display: none; z-index: 96;" alt="big image">
            <img onclick="changeSizeImage()" id="changeSize" src="zoom.png" style="display: none; position: fixed; width: 30px; height: 30px; top: 115px; z-index: 99;" alt="enlarge image">
        </div>
        <div id="bottommenu">
            <table>
                <tr>
                    <td>
                        Østerbrogade 43, København Ø
                    </td>
                    <td>
                        carls.barber-shop@hairtools.dk
                    </td>
                </tr>
            </table>
        </div>
        </div>
    </body>
</html>