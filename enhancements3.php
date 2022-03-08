<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="description" content="Basic CSS elements"/>
	<meta name="keywords" content="HTML5, tags, CSS"/>
	<meta name="author" content="Minhajul Hossain Moyeen"/>
  <link href="styles/meatstyle.css" rel="stylesheet"/>
  <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"  rel="stylesheet">
<title>Enhancement Details</title>
</head>
<body class="backimg">

<!-- header tag containing the logo and the navigation bar-->
<?php include("include/header.php"); ?>
<?php include("include/popUp.php"); ?>


<section class="disclaimer2">
    <h1><strong>Assignment 3 Enhancements</strong></h1>
</section>

<section class="disclaimer2">
  <h2><strong> User Management Module </strong></h2>

  <p> A module was added to the website so that the user can maintain registration/login system. This allows the website admin to login to their existing account and to view the enquiries, view, edit or delete user accounts after logging in. </p>

 <h3> Sign Up </h3>
   <p> This module was added to the website so that the user can create an account by entering their name, username, email address and password. In the PHP file, a table called usersdetails
   which is meant to store username, username, email address and password is created when the page is loaded. However, this is only done if the usersdetails table is
   not pre-existing in the enquirydb database. This is done by performing a query against the database, whereby the query selects all items from the table.
   If the result of the query is null, the table will be created. Also, details of a user with the username ‘useradmin’ will be inserted into the table
   Then, once the user has keyed in all their information into the register page, the input data will be sent to the enq_process.php page and from there it will go to the enq_confirmed.php php and all input will be checked against the varying validation rules for each field.
   If any errors were to occur with the registration, the errors will be displayed on the page and users are given the opportunity to rectify any errors.
   Then data will be sent and stored in the database.</p>
</section>

 <section class="disclaimer2">
 <h3> Login </h3>
   <p> At the login page, users are required to login to their account by inputting their username and password.
   The login credentials are then checked against the database to see if the credentials are valid. Should they be invalid, the user will be alerted.Similar to the registration page, the usersdetails table will be created should it not exist, and the user ‘useradmin’ will be inserted into the table when the page is loaded.
   In this page, a session is started using the session_start() function, and the unique session ID is stored into a session variable.
   This will be used in later pages to verify if users are still logged in. Once users login, they will be redirected to a welcomepage.php, which displays a greeting with
   the user’s name. Also, if the users were to navigate out of the welcome page and then return to the login page, they are able to bypass the login page and be redirected
   immediately to the welcome page. After the user successfully logs in, the user is able to view enquiries, view user accounts, edit user accounts and also delete user accounts, which will be discussed
   in later sections. Should the user decide to log out of their account, they will be redirected to a log out page (logout.php) and the session will be terminated.
   From the logout page, if the user were to try to navigate to the previous pages (view enquiries, view accounts, edit accounts and delete accounts pages) by using the back
   button on the browser, users instead be redirected to the login page </p>

</section>
<section class="disclaimer2">
 <h3> Edit User Accounts </h3>
   <p> Users can view all the pre-existing user accounts displayed in a table along with the details of each account such as the registered username, email, password and
   the name of the account holder. From the table, there is an ‘Edit’ button available whereby if users were to click on it, they will be redirected to another webpage called
   edit_data.php, and will only be shown the information of the particular user data the user has chosen to edit. This is made possible as the ‘Edit’ button that the user has
   clicked will specify the id of the user’s account that is intended to be edited. The edit_data.php page is then able to request the ID from the previous page due to the link
   </p>

   <p> At the edit_data.php page, a query to select all the fields from the usersdetails table where the ID is the one requested by the page is ran. From the query, the
   resulting fields which are the ID of the requested user, name, username, email address and password are arranged and displayed in a table. Within the table contains a
   form, which serves to post data to the data_process.php page.
   Users are prevented from editing the ID, username and email fields as the input type of the input field has been set to hidden and only the field’s value from the
   query is being displayed to the user. When the user submits the form, the resulting data will be posted to the data_process.php page, whereby it is validated. If there
   are no errors, the data will be submitted to the database table.</p>
</section>
<section class="disclaimer2">
 <h3> Delete User Accounts </h3>

   <p>In order to delete user accounts, a delete button was added to the last column in the table in the edit_users.php page. Additionally, a delete_user.php file was created,
   and the codes that execute the deletion of the user account are stored inside this file. When the user clicks the delete button in the table, the delete_user.php file will
   be called, and the execution of the codes inside the file will delete the user according to the user’s id. Based on the id of the user’s account, the query to delete the row from the table will be executed. If the query is successful,
   the user will then be redirected back to the edit_users.php page.
</section>
<section class="disclaimer2">
<h3> Page Implementation: </h3>
    <ul>
      <li><a href="register.php" target="_blank">Sign Up Page </a></li>
      <li><a href="login.php" target="_blank"> Login Page </a></li>
      <li><a href="edit_users.php" target="_blank"> Edit Users Page </a> (Requires login)</li>
    </ul>

    <h3>Citation</h3>
    <p>Idea and Guide taken from: <a href="https://dzone.com/articles/ceate-a-login-system-using-html-php-and-mysql"  target="_blank"> Web Dev Zone Website </a></p>
    <p>Idea and Guide taken from:<a href="https://www.allphptricks.com/insert-view-edit-and-delete-record-from-database-using-php-and-mysqli"  target="_blank"> All PHP Tricks Website </a></p>
        <p> Html and Css resources: <a href="https://www.w3schools.com/howto/howto_js_slideshow.asp"> W3Schools </a></p>
</section>



<?php include("include/footer.php"); ?>


</body>
</html>
