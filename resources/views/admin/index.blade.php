<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"></script>
    <title>Login</title>
    <style>
       body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border: none;
            width: 360px;

        }

         h3 {
            color: #1877f2;
            font-size: 24px;
            text-align: center;
            margin-bottom: 350px;
            font-weight: 600;



        }

        label {
            font-size: 14px;
            color: #333;
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #dddfe2;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #1877f2;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #166fe5;
        }
        .error{
            color: red;

        }

    </style>
</head>
<body>
    <h3>Admin Login Form</h3>
        <form action="{{ route('login-post') }}" method="POST" enctype="multipart/form-data" id="form">
            @csrf
         <table>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" placeholder="Enter Your Email" id="email" ></td>
            </tr>
            <tr>
                <td><label for="pass">Password</label></td>
                <td><input type="password" name="password" placeholder="Enter Your Password" id="password" ></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Login</button></td>
            </tr>
            </table>
        </form>
    <script>
        $(document).ready(function(){
            $("#form").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,

                    },
                },
                messages: {
                    email: {
                        required: "Please Enter Your Email",
                        email: "Please Enter a valid Email Address"
                    },
                    password: {
                        required: "Please Enter Your Password",
                    },
                },
            });
        });
    </script>
</body>
</html>

