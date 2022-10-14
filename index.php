<?php
// connect to database
try {
    Class.forName("java.sql.Driver");
    Connection con = DriverManager.getConnection("jdbc:mysql://localhost/scm", "subodians", "subodians");
    Statement stmt = con.createStatement();
    String query = "Select * from login";
    ResultSet rs = stmt.executeQuery(query);
    if (rs.first()) {
         user = rs.getString(1);
         pass = rs.getString(2);
    }
}catch (Exception e) {
    System.out.println("Error");
}
String username = userTF.getText();
String apass = new String(passTF.getPassword()); 

if (username.equals(user) && apass.equals(pass)) {
    JOptionPane.showMessageDialog(this,"You have been successfully logged in." );
    home form=new home();
    this.dispose();
   form.setVisible(true);
} else {
    JOptionPane.showMessageDialog(this, "Password and User ID do not match. Please try again.", "Incorrect username or password", JOptionPane.ERROR_MESSAGE);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <style>
        body {
            font-family: 'Roboto Condensed', sans-serif;
            color: #262626;
            margin: 5% 0;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        .d-flex {
            display: flex;
            flex-direction: column;
            background: #f6f6f6;
            border-radius: 0 0 5px 5px;
            padding: 25px;
        }

        form {
            flex: 4;
        }

        .Yorder {
            flex: 2;
        }

        .title {
            background: -webkit-gradient(linear, left top, right bottom, color-stop(0, #5195A8), color-stop(100, #70EAFF));
            background: -moz-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
            background: -ms-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
            background: -o-linear-gradient(top left, #5195A8 0%, #70EAFF 100%);
            background: linear-gradient(to bottom right, #5195A8 0%, #70EAFF 100%);
            border-radius: 5px 5px 0 0;
            padding: 20px;
            color: #f6f6f6;
        }

        h2 {
            margin: 0;
            padding-left: 15px;
        }

        .required {
            color: red;
        }

        label {
            display: block;
            margin: 15px;
        }

        table {
            display: block;
            margin: 15px;
        }

        label>span {
            float: left;
            width: 25%;
            margin-top: 12px;
            padding-right: 10px;
        }

        input[type="email"] {
            width: 70%;
            height: 30px;
            padding: 5px 10px;
            margin-bottom: 10px;
            border: 1px solid #dadada;
            color: #888;
        }

        select {
            width: 70%;
            height: 30px;
            padding: 5px 10px;
            margin-bottom: 10px;
            border: 1px solid #dadada;
            color: #888;
        }

        input[type="text"] {
            width: 100%;
            height: 30px;
            padding: 5px 10px;
            margin-bottom: 10px;
            border: 1px solid #dadada;
            color: #888;
        }

        input[type="tel"] {
            width: 100%;
            height: 30px;
            padding: 5px 10px;
            margin-bottom: 10px;
            border: 1px solid #dadada;
            color: #888;
        }

        select {
            width: 72%;
            height: 45px;
            padding: 5px 10px;
            margin-bottom: 10px;
        }

        .Yorder {
            margin-top: 15px;
            height: 600px;
            padding: 20px;
            border: 1px solid #dadada;
        }

        table {
            margin: 0;
            padding: 0;
        }

        th {
            border-bottom: 1px solid #dadada;
            padding: 10px 0;
        }

        tr>td:nth-child(1) {
            text-align: left;
            color: #2d2d2a;
        }

        tr>td:nth-child(2) {
            text-align: right;
            color: #52ad9c;
        }

        td {
            border-bottom: 1px solid #dadada;
            padding: 25px 25px 25px 0;
        }

        p {
            display: block;
            color: #888;
            margin: 0;
            padding-left: 25px;
        }

        .Yorder>div {
            padding: 15px 0;
        }

        button {
            width: 100%;
            margin-top: 10px;
            padding: 10px;
            border: none;
            border-radius: 30px;
            background: #52ad9c;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
        }

        button:hover {
            cursor: pointer;
            background: #428a7d;
        }
    </style>
</head>

<body>
    <center>
        <h1> SCM Consumer Login Form </h1>
    </center>
    <form>
        <div class="container">
            <center> <label>Username : </label></center>
            <input type="text" name="city">
            <!-- <input type="text" placeholder="Enter Username" name="username" required> -->
            <center><label>Password : </label></center>
            <input type="text" name="city">
            <button input type="submit" name="Login" value="Login"> <a href="Book order.html">Login</a> </button>
            <!-- <button type="submit"><a href="Book_order.html"> Login </a></button> -->
            <input type="checkbox" checked="checked"> Remember me
            <button type="button" class="cancelbtn"> Cancel</button>
            Forgot <a href="#"> password? </a> <br> <br>
         <a href="Business login.html"> Busniness Login </a>
        </div>
    </form>
</body>

</html>