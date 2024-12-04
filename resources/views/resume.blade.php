<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>MyUser</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: DejaVu Sans, sans-serif;
            font-size: 16px;
        }

        body {
            background-color: teal;
            color: white;
        }

        .container {
            margin: 50px;
            padding: 20px;
            background-color: white;
            color: teal;

            #user-form {
                display: flex;
                gap: 20px;
                flex-direction: column;
                align-items: flex-start;


                .form-group {
                    display: flex;
                    gap: 10px;
                    justify-content: flex-start;

                    .form-control {
                        border: 1px solid teal;
                        padding: 5px;
                    }
                }
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <form name="user-form" id="user-form">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$user['name']}}" disabled>
            </div>

            <div class="form-group">
                <label for="surname">Last name</label>
                <input type="text" id="surname" name="surname" class="form-control" value="{{$user['surname']}}" disabled>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="{{$user['email']}}" disabled>
            </div>
        </form>
    </div>
</body>

</html>