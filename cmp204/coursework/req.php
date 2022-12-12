<!doctype html>

<html lang="en">
<head>
	<title>Hidden Requirements</title>
    <?php include "includes/head.php" ?>
</head>
<body>

    <h1>CMP204 Requirements Page - Unit 2 Assessment</h1>
    
    <p>If you have not met a requirement, do not delete it from the table.</p>

        <table id="reqTable">
        <thead>
            <tr>
            <th class="reqCol">Requirement</th>
            <th class="metCol">How did you meet this requirement?</th>
            <th class="fileCol">File name(s), line no.</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <td>HTML, CSS, JavaScript has been contained within separate files.</td>
            <td>HTML, css and JavaScript have all been kept in different files</td>
            <td>coursework folder</td>
            </tr>
            <tr>
            <td>A clear use of HTML5.</td>
            <td>I have included all HTML5 tags like p, h1, form etc</td>
            <td>shown at index.php is a HTML5 doctype Line:1</td>
            </tr>
            <tr>
            <td>Use of the Bootstrap framework providing a responsive layout.</td>
            <td>I used the bootstrap griding system to create the layout of my website</td>
            <td>shown at index.php Line:31</td>
            </tr>
            <tr>
            <td>Use of JavaScript to manipulate the DOM based on an event.</td>
            <td>I used JavaScript to greet users based on time of day and created a new p tag for the text using windows onload event</td>
            <td>shown at includes/script.js Line:2</td>
            </tr>
            <tr>
            <td>Javascript loading of dynamically changing information.</td>
            <td>image gallary switches based on time, </td>
            <td></td>
            <tr>
            <td>Use of jQuery in conjunction with the DOM.</td>
            <td>hover colour change</td>
            <td></td>
            </tr>
            <tr>
            <td>Use of AJAX (pure JavaScript i.e. without the use of a library).</td>
            <td>I used javascript to print out a random file to the DOM in real time (AJAX)</td>
            <td>shown at includes/scripts.js Line:44</td>
            </tr>
            <tr>
            <td>Use of the jQuery AJAX function.</td>
            <td>uses jquery with ajax to print out text of a song incrementing in seconds</td>
            <td></td>
            </tr>
            <tr>
            <td>User login functionality (PHP/MySQL).</td>
            <td>I created a login system</td>
            <td>shown at processLogin.php Line:20-48</td>
            </tr>
            <tr>
            <td>Ability to select (SELECT), add (INSERT), edit (UPDATE) and delete (DELETE) information from a database (PHP/MySQL).</td>
            <td>I created a user input feild for the user to add gigs they have attended and are able to select, insert, update and delete from gigs</td>
            <td>addGigAttended.php Line: <br>
            <td>deleteGigAttended.php Line: <br>
            <td>editGigAttended.php Line: <br>
            </td>
            </tr>
            <tr>
            <td>Inclusion of GDPR and the Cookie Law.</td>
            <td>I included a Terms and conditions for users to read and accept before creating an account</td>
            <td>shown at TandC.php, link can be found on registration page Line:74</td>
            <td>add cookie plugin</td>
            </tr>
            <tr>
            <td>SQL queries written as prepared statements.</td>
            <td>I used the prepare statment to create the statement before binding the user input to the statment before executing</td>
            <td>shown at deleteAccount.php Line:41</td>
            </tr>
            <tr>
            <td>Passwords should be salted and hashed.</td>
            <td>I salted and hashed the passwords during registrations</td>
            <td>shown at processRegistration.php Line:32</td>
            </tr>
            <tr>
            <td>Validation of user input.</td>
            <td>I used a series of special functions to validate the users input</td>
            <td>shown at processLogin.php Line:17-18</td>
            </tr>
        </tbody>



        </table>

   
</body>
</html>