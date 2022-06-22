<?php
/*

articles [ title , content , image , date , category , author [name , image] ]

admin [name,email,password,image,phone]   [all]
writer [name,email,password,image,phone]  [articles]


# Roles . . .     true 
id     title  


# Users . . .
id     name    email    password    image    role_id



# Categories . . .     true 
id     title



# Articles . . . 
id     title    content    image    date    category_id    author_id





articles    categories 
1             1
m             1
================= 
m             1 


*/



?>

