# fizz-buzz-step-three
Code that prints out Fizz, Buzz, or Lucky for a contiguous range of numbers
If the number contains a three you must output the text 'lucky'. This overrides any existing behaviour
e.g. if I run the program over a range from 1-20 I should get the following output:
1. 1 2 lucky 4 buzz fizz 7 8 fizz buzz 11 fizz lucky 14 fizzbuzz 16 17 fizz 19 buzz

Produce a report at the end of the program showing how many times the following were
output.

Run from command line php -r 'include "./src/FizzBuzz.php"; use FizzBuzz\FizzBuzz; $fizzbuzz=new FizzBuzz(); print_r($fizzbuzz->outputFizzBuzz(1,20));'

or use the index.php form on your local webserver.
