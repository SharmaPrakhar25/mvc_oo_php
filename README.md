# mvc_oo_php
Written by Prakhar Sharma
Files consist API's code can be used to make a system by which user can signup,login and can add item from a defined list of food item
to his/her diet. All of the code is written using oriented concepts of php and in mvc.

Code returned every output in json format and there are two fields in every response "code" and "status".
I have applied validations for valid email id's and empty input in every api call.

● User registration
a) firstname
b) lastname
c) email
d) password
e) mobile

make a call to --- signup.php
first_name=
last_name=
email=
password=
mobile=

For sign up you have to give every value, any empty value give a error code of 400 and error in field named - "status", 
also you have to give valid email for signup. 

User Login
a) email
b) password

make a call to --- index.php
email=
password=

Get food_item list 
make a call to getting list of food item --- food_item.php

Add a specific food item to a user’s diet
a) name (food item name)
b) quantity ( qty in decimal)
c) email 
 
make sure you are login first, if you are not login then you can not add or delete food items in your diet

make a call to  --- input_diet.php
email=
food_item=
quantity=

● Delete a specific food item from a user’s diet
a) id (food item id)
b) user_id

For deleting a food_item from user's diet you have to give user_id and food_item_id 
make a call to ---- delete_diet.php
user_id=
food_item_id=

● Retrieve the user’s diet
a) user_id
make a call to ----- get_diet.php
email=
