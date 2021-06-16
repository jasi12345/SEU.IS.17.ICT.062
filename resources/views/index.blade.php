<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="adduser" method="POST">
        @csrf
        Name  <input type="text" name="name" id="name"> <br><br>
        Username <input type="text" name="uname" id="uname"> <br><br>
        Date of Birth <input type="date" name="dob" id="dob"> <br><br>
        Email <input type="email" name="email" id="email"> <br><br>
        Telephone No <input type="tel" name="telno" id="telno"> <br><br>
        NIC No <input type="text" name="nicno" id="nicno"> <br><br>
        Gender <input type="text" name="gender" id="gender"> <br><br>
        Password <input type="password" name="password" id="password"> <br><br>
        Reenter Password<input type="repassword" name="repassword" id="repassword"> <br><br>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>

