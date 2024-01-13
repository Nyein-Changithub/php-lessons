<?php
// cookie storage create 

// after time() => sec*min(hour)*day(24)*year(356)*years(1 or 2 or 3 or etc....)
// setcookie('name','nyein chan',time()+ (60*60*24*365*10));


// setcookie('name','nyein chan',time()+10 );

setcookie('phone','09123456789',time()+10 );

echo " this is cookie storage....";