<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Calendar</title>
    </head>
    
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 50%;
        }

        td, th {
          border: 1px solid black;
          text-align: left;
          padding: 8px;
        }

        tr:nth-child(even) {
          background-color: #dddddd;
        }
    </style>
    
    <body>
        
        
        <?php
        //------------- Str concatenation 1 ----------------

        $firstName = "vahit";
        $midName = "aras";
        $lastName = "sen";
        $country = "CANADA";

        $myFullName = ucwords($firstName . " " . $midName . " " . $lastName);
        $country = ucfirst(strtolower($country));

        echo "My name is " . $myFullName . ". I live in " . $country . ".";
        //My name is Vahit Aras Sen. I live in Canada.

        //------------- Str concatenation 2 ----------------
        echo "<br>";
        $myCousin = $firstName;
        $myCousin .= " ";
        $myCousin .= $lastName;
        $myCousin = ucwords($myCousin);

        echo "My cousin's name is: " . $myCousin . ".";
        unset($myCousin);
        unset($firstName);
        unset($midName);
        unset($lastName);
        unset($country);

        //-------------- Rounding Numbers --------------
        echo "<br>";
        $pi = 22/7;
        //3.1428571428571
        $pi = round($pi, 3);
        echo $pi;
        //3.142
        unset($pi);

        //------------- Number Formatting --------------
        echo "<br>";
        $money = 4123254369034572038;
        $money = number_format($money);
        echo "I have $" . $money . " in my account.";
        unset($money);

        //------------- intdiv() --------------
        echo "<br>";
        echo "47/5 = " . intdiv(47,5); // 47/5 = 9

        //------------- Constants --------------
        echo "<br>";
        define("PI", 22/7);
        echo "The volume of a cylinder for r = 12mm and h = 100mm is " 
            . round(PI*pow(12, 2)*100, 1) . " mm^3.";

        //----- PHP Predefined Constants (PHP_VERSION, PHP_OS) -----
        echo "<br>";
        echo "The PHP version is " . PHP_VERSION . 
            ". The server's operating system is " . PHP_OS . ".";

        //-------- Single vs Double Quotation ----------
        echo "<br>";
        $test = 6;
        echo "Double Quotation Mark: I have \$$test ----- "; //It interprets.
        echo 'Single Quotation Mark: I have \$$test.'; //It literally prints what it sees.
        unset($test);

        //-------- New Line ----------
        echo "<br>";

        //-------- Arrays ----------

        $months = [ 1 => "January", 'February', 'March',
                    'April', 'May', 'June', 'July', 'August',
                    'September', 'October', 'November', 'December'];

        echo (count($months). " months.<br>");

        $alphabet = range("a", "z");
        echo (count($alphabet). " letters.<br>");
        echo (is_array($alphabet). "<br>");

        unset($months);
        unset($alphabet);

        //-------- Multidimensional Arrays ----------

        $number1 = range (1, 100);
        $number2 = [];

        foreach($number1 as $k => $v){
            $number2[$k] = 2 * $v;
        }

        $numbers = ['Number1' => $number1, 'Number2' => $number2];

        echo "numbers['Number1'][12] = " . $numbers['Number1'][12]. "<br>";
        echo "numbers['Number2'][12] = " . $numbers['Number2'][12]. "<br>";
        
        //------------------------ Arrays - Explode/Implode --------------------------
        
        echo "<br><br><br>------------------------ Arrays - Explode/Implode --------------------------<br><br><br>";
        
        $countries_string = "Turkey, USA, Canada, UK, Japan";
        $countries_array = explode(", ", $countries_string);
        $countries_newstring = implode(" - ", $countries_array);
        
        echo '$countries_string = ' . $countries_string . "<br>";
        foreach($countries_array as $k => $v){
            echo "\$countries_array[$k] = " . $v . "<br>";
        }
        
        echo '$countries_newstring = ' . $countries_newstring;
        
        unset($countries_string);
        unset($countries_newstring);
        unset($countries_array);
        
        //------------------------ Arrays - sort, rsort, asort, arsort, ksort, krsort, shuffle --------------------------
        
        echo "<br><br><br>------------------------ Arrays  - sort, rsort, asort, arsort, ksort, krsort, shuffle --------------------------<br><br><br>";
        
        var_dump(date("Y")); //string(4) "2019"
        echo "<br>";
        $year = (int)date("Y");
        
        $mycountries = array("Canada" => $year - 1867, "USA" => $year - 1776, 
                             "Turkey" => $year - 1923, "Japan" => $year + 660,
                            "UK" => $year - 1922);
        
        echo "<br> Original Array \$mycountries <br><br>";
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
        echo "<br> asort(\$mycountries); <br><br>";
        asort($mycountries);
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
        echo "<br> arsort(\$mycountries); <br><br>";
        arsort($mycountries);
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
        echo "<br> ksort(\$mycountries); <br><br>";
        ksort($mycountries);
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
        echo "<br> krsort(\$mycountries); <br><br>";
        krsort($mycountries);
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
                echo "<br> sort(\$mycountries); <br><br>";
        sort($mycountries);
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
        echo "<br> rsort(\$mycountries); <br><br>";
        rsort($mycountries);
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
        echo "<br> shuffle(\$mycountries); <br><br>";
        shuffle($mycountries);
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
        $mycountries = array("Canada" => $year - 1867, "USA" => $year - 1776, 
                             "Turkey" => $year - 1923, "Japan" => $year + 660,
                            "UK" => $year - 1922);
        
        echo "<br> Original Array \$mycountries <br><br>";
        
        foreach($mycountries as $k => $v){
            echo "\$mycountries[$k] = " . $v . "<br>";
        }
        
        echo "<p>\n</p>"; //New line just like echo "<br>";
        
        echo "<table><tr><th>Index</th><th>Country</th><th>Age</th></tr>";
        
        $i = 0;
        foreach($mycountries as $k => $v){
            $i = $i + 1;
            echo "<tr><td>$i</td><td>$k</td><td>$v</td></tr>\n";
        }
        
        echo "</table>\n";
        
        unset($mycountries);
        unset($year);
        
        //------------------------ Arrays - difference in between asort and natsort --------------------------
        
        echo "<br><br><br>------------------------ Arrays - difference in between asort and natsort --------------------------<br><br><br>";
        
        echo "<br> Original Array \$myarray <br><br>";
        
        $myarray = array("aras1", "aras12", "aras23", "aras20", "aras5");
        
        foreach($myarray as $k => $v){
            echo "\$myarray[$k] = " . $v . "<br>";
        }
        
        echo "<br> asort(\$myarray) <br><br>";
        
        asort($myarray);
        
        foreach($myarray as $k => $v){
            echo "\$myarray[$k] = " . $v . "<br>";
        }
        
        $myarray = array("aras1", "aras12", "aras23", "aras20", "aras5");
        
        echo "<br> natsort(\$myarray) <br><br>";
        
        natsort($myarray);
        
        foreach($myarray as $k => $v){
            echo "\$myarray[$k] = " . $v . "<br>";
        }
        
        unset($myarray);
        
        //------------------------ Arrays - usort - This one uses quicksort algorithm and hard to understand --------------------------
        
        echo "<br><br><br>------------------------ Arrays - usort - This one uses quicksort algorithm and hard to understand --------------------------<br><br><br>";
        
        function my_sort($a,$b){
        if ($a==$b) return 0;
          return ($a<$b)?-1:1;
        }

        $a=array(4,2,8,6);
        usort($a,"my_sort");

        $arrlength=count($a);
        for($x=0;$x<$arrlength;$x++)
          {
          echo $a[$x];
          echo "<br>";
          }
        
        unset($a);
        unset($b);
        unset($arrlength);
        unset($x);
        ?>  
    </body>
</html>