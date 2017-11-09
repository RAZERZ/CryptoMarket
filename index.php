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
        
        <table class="Product-Cat" align="left">
            <tr>
                <th class="ProductCats">Product Categories</th>
            </tr>
            <tr>
                <td class="ProductList"></td>
            </tr>
        </table>
        
        <table class="Currency-Info" align="right">
            <tr>
                <th class="Currency-TH">Crypto Currency</th>
                <th class="Currency-TH">Price in USD</th>
            </tr>
            <tr>
                <td class="Currency-TD">BTC</td>
                <td class="Currency-TD">
            <?php
            
            $json_file_BTC = file_get_contents('https://blockchain.info/ticker'); //Sets the json file into a variable
            $json_decode_BTC = json_decode($json_file_BTC, true); //Decodes the variable and stores the information in an array
            
            echo($json_decode_BTC['USD']['symbol']) . ($json_decode_BTC['USD']['last']); //Prints out from section USD the 'last' and the 'symbol values'
            
            ?> 
                </td>
            </tr>
            <tr>
                <td class="Currency-TD">BCH</td>
                <td class="Currency-TD">
                    <?php
                    
                    $json_file_BCH = file_get_contents('https://api.cryptonator.com/api/ticker/bch-usd');
                    $json_decode_BCH = json_decode($json_file_BCH, true);
                    
                    echo "$" . ($json_decode_BCH['ticker']['price']);
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td class="Currency-TD">ETH</td>
                <td class="Currency-TD">
            <?php

            $json_file_ETH = file_get_contents('https://api.kraken.com/0/public/Ticker?pair=ETHUSD');
            $json_decode_ETH = json_decode($json_file_ETH, true);

            echo "$" . ($json_decode_ETH['result']['XETHZUSD']['a']['0']);

            ?>
                </td>
            </tr>
            <tr>
                <td class="Currency-TD">ETC</td>
                <td class="Currency-TD">
                    <?php
                    
                    $json_file_ETC = file_get_contents('https://api.cryptonator.com/api/ticker/etc-usd');
                    $json_decode_ETC = json_decode($json_file_ETC, true);
                    
                    echo "$" . ($json_decode_ETC['ticker']['price']);
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td class="Currency-TD">DASH</td>
                <td class="Currency-TD">
                    <?php
                    
                    $json_file_DASH = file_get_contents('https://www.cryptonator.com/api/ticker/dash-usd');
                    $json_decode_DASH = json_decode($json_file_DASH, true);
                    
                    echo "$" . ($json_decode_DASH['ticker']['price']);
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td class="Currency-TD">LTC</td>
                <td class="Currency-TD">
                    <?php
                    
                    $json_file_LTC = file_get_contents('https://api.cryptonator.com/api/ticker/ltc-usd');
                    $json_decode_LTC = json_decode($json_file_LTC, true);
                    
                    echo "$" . ($json_decode_LTC['ticker']['price']);
                    
                    ?>
                </td>
            </tr>
        </table>
        
    </body>
    
</html>