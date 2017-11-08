<html>
    
    <head>
        
        <title>CryptoMarket - Spend Your Cryptocurrency!</title>
        <link rel="stylesheet" type="text/css" href="./Stylesheet.css">
        
    </head>
    
    <body id="body" style="background-color:#202020;">
        
        <center>
            <table class="Table-Header">
                <tr>
                    <th class="Table-Header-TH-TD">CryptoMarket - Spend Your Cryptocurrency!</th>
                </tr>
            </table>
        </center>
        
        <table class="Currency-Info" align="right">
            <tr>
                <th class="Currency-TH">Crypto Currency</th>
                <th class="Currency-TH">Price in USD</th>
            </tr>
            <tr>
                <td class="Currency-TD">BTC</td>
                <td class="Currency-TD">
            <?php
            
            $json_file = file_get_contents('https://blockchain.info/ticker'); //Sets the json file into a variable
            $json_decode = json_decode($json_file, true); //Decodes the variable and stores the information in an array
            
            echo($json_decode['USD']['symbol']) . ($json_decode['USD']['last']); //Prints out from section USD the 'last' and the 'symbol values'
            
            ?> 
                </td>
            </tr>
        </table>
        
    </body>
    
</html>