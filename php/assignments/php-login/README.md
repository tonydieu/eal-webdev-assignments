Assignment
==========

### Exercise 1
We want a login where we use email as username. Login must now work with:
mdam@eal.dk and pass: 1234.

We also want to make a function called LogMeIn(username, password)
this function will echo “login OK” if I use the above username/pass and “Login
failed” if i write something else.

When i write the username and it is not a valid email I want the function
LogMeIn to return “not an E-mail” instead of returning “login failed”

### Exercise 2
We are still working on our login but now we want to make it in OOP
First we need a class for users with the needed attributes.
Second we need a class for login containing the method LogMeIn and using
the user object.
The reason why we split this up in users and login is because we will properly
need to use the user object in other contexts (such as order delivery).