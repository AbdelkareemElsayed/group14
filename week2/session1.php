<?php

// function Get_Student_Data(){
//     $student_data = [
//         'first_name' => 'John',
//         'last_name' => 'Doe',
//         'age' => 22 ,
//          ];

//        return $student_data;
// }
#############################################################################################

// Date & time . . . 


// date(format,timestamp); 


// Date Formates 
/*
    d - Day of the month (no leading zero)
    D - Day of the month 
    m - Month (no leading zero) 
    M - Month (short)
    F - Month (long)
    Y - Year (4 digits)
    y - Year (2 digits)
*/


// echo date('Y-m-d'); // 2022/06/12

// echo date('Y/M/D'); 


/*
    H - 24 hour format of an hour (no leading zero) (00 - 23) 
    h - 12 hour format of an hour (no leading zero) (01 - 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm)
    A - Uppercase Ante meridiem and Post meridiem (AM or PM)
 */


//    echo date('h:i:s a'); // 12:00:00 am

//     echo date('Y/m/d h:i:s a'); // 2022/06/12 12:00:00 am

//    echo '<br>';

//      echo  time(); // returns current time in seconds



// 2022/06/12 11:21:55 am
// 1655025715


// echo date('Y/m/d h:i:s a',1655025715);   // 2022/06/12 11:21:55 am


// echo  strtotime('2022/06/15 11:19:59 am');  // 1655284799


// echo date('Y/m/d h:i:s a',1655284799); // 2022/06/15 11:19:59 am

// echo date('Y/m/d h:i:s a'); 

// echo  date_default_timezone_get();

//  date_default_timezone_set('Africa/cairo');

//  echo  date_default_timezone_get();


############################################################################################# 
// php exception handling


// function divideCalculator($num1, $num2)
// {

//     if ($num2 == 0) {
//         throw new Exception('Division by zero is not allowed');
//     }

//     return $num1 / $num2;
// }


// try {
//     $result = divideCalculator(10, 1);
//     echo $result;
// } catch (Exception $e) {
//     echo $e->getMessage();
// } finally {

//     echo 'Test Exception Message';
// }

############################################################################################# 

// USER MODULE (NAME,EMAIL,PASSWORD) 

/*
 id  name   email    password  
 1    x       x@x      123 
 2    y       y@y      456
 3    z       z@z      789   
 

*/


#

?> 