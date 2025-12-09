<html>
   <?php
   $length = 5;
   $width = 10;
   $area = $length * $width;
   $perimeter = 2 * ($length + $width);
   $amount = 2000;
   $vat = 0.15;
   $amount_vat = $amount * $vat;
   $total = $amount + ($amount * $vat);
   echo "<body>
   <h1>Exercise Question 01</h1>
   <h2>Area Calculation</h2>
   <p>Length: $length</p>
   <p>Width: $width</p>
   <p>The Area of the Rectangle with $length and $width is: $area</p>
   <h2>Perimeter Calculation</h2>
   <p>Length: $length</p>
   <p>Width: $width</p>
   <p>The Perimeter of the Rectangle with $length and $width is: $perimeter</p>
   <h1>Exercise Question 02</h1>
   <h2>VAT Calculation</h2>
   <p>Amount: BDT $amount Taka</p>
   <p>VAT (15%): BDT $amount_vat Taka</p>
   <p>Total Amount including VAT: BDT $total Taka</p>
   <h1>Exercise Question 03</h1>
   <h2>Odd or Even</h2>
   <form method='post' action=''>
   <label for='number'>Enter a number:</label>
   <input type ='number' id='number' name='user_number'>
   <input type='submit' name='submit_odd_even' value='Check'>
   </form>";
   if (isset($_POST['submit_odd_even'])) {
         $number = $_POST['user_number'];
         $number = intval($number);
         if ($number % 2 == 0) {
            echo "<p>The number $number is Even.</p>";
         } else {
            echo "<p>The number $number is Odd.</p>";
         }
      };
   echo"<h1>Exercise Question 04</h1>
   <h2>Largest Number from three given number</h2>
   <form method='post' action=''>
   <label for='number_1'>Enter number one:</label>
   <input type ='number' id='number_1' name='num_1'><br>
   <label for='number_2'>Enter number two:</label>
   <input type ='number' id='number_2' name='num_2'><br>
   <label for='number_3'>Enter number three:</label>
   <input type ='number' id='number_3' name='num_3'><br>
   <input type='submit' name='submit_largest' value='Find Largest'>
   </form>";
   if (isset($_POST['submit_largest'])) {
         $num1 = $_POST['num_1'];
         $num2 = $_POST['num_2'];
         $num3 = $_POST['num_3'];
         $num1 = intval($num1);
         $num2 = intval($num2);
         $num3 = intval($num3);
         $largest = $num1;
         if ($num1 >= $num2 && $num1 >= $num3) {
            $largest = $num1;
         } elseif ($num2 >= $num1 && $num2 >= $num3) {
            $largest = $num2;
         } else {
            $largest = $num3;
         }
         echo "<p>The largest number among $num1, $num2, and $num3 is: $largest</p>";
      };
    echo"<h1>Exercise Question 05</h1>
    <h2>Showing all odd numbers from 10 to 100</h2>";
    $number_Count = 1;
      for ($i = 10; $i <= 100; $i++) {
         if ($i % 2 != 0) {
               echo "<p>Odd number $number_Count is: $i </p>";
               $number_Count++;
         }
      }
   echo "</body>";
   ?>

</html>