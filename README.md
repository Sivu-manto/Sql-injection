# Sql-injection
Sql-injection
// =================
// SQL injection//
// =================

/*SQL injection (SQLi) is a web based vulnerability that allows attackers to inject code in every input fields by injecting an attacker able to view data from database, the database consists of users information, username, password and in certain websites there will be credit card details also*/

//====================
//Program behaviour//
//====================

/*In our program , we are using a simple form to get the product name from the user, the user enter the product name and click on the search button, the program will search the product name using this query "SELECT * FROM products WHERE product_name = '$product_name'" in the database and display the details of the product, if the user try to inject or type in a search bar or input field like this 'OR '1' = '1 the query alter like this "SELECT * FROM products WHERE product_name = '$product_name' 'OR '1' = '1" Since '1'='1 is always true, the query returns all rows from the products table by injecting this query the attacker can view all the data from the database*/

//This is a basic example of SQL injection, in real world scenario the attacker can inject more complex queries.
//Sql injections has more types in it here i used basic type injection.

//===============
//Mitigation
//===============
// use prepared statements (parameterized queries): This will treat the user input as data, not executable code like bind_param and execute.
// If prepared statements are not available, at least use proper escaping functions for the database system in use (mysqli_real_escape_string() for MySQL).
//Sanitize and validate all user inputs to make sure they conform to expected formats (e.g., alphanumeric characters for names).
//Limit the number of columns that can be selected in a query to prevent the attacker from accessing sensitive
//Ensure that detailed error messages are not shown to users. They can provide valuable information to attackers.
//WAFs are tools that protect against SQL injection attacks and other web-based threats.
//Regularly update and patch your database management system and web application to ensure you have the latest security
