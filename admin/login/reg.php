<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row pt-5">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="section-part">
                        <h2 style="color:white;">Registration form</h2>
                        <p class="mt-5">Welcome to our registration platform! If you're interested in registering, kindly complete the provided form. Should you already be a registered member, please proceed to login using your credentials. We're excited to have you on board!</p>
                    </div>
                    <div class="btn-group my-5 py-5 ">
                        <a href="#"><button type="button" class="btn btn-lg me-3 mt-3 rounded-pill">Google Registration</button></a>
                        <a href="./index.php"><button type="button" class="btn btn-lg mx-3 px-4 mt-3 rounded-pill">Login ...</button></a>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="main">
                <form id="registration-form" action="./model/insert_reg.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required><br>
                    <label for="country">Country:</label>
                    <input type="text" id="country" name="country" required><br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>
                    <input type="submit" name="submit" value="Register Now">
                </form>
                <!-- <p id="generated-user-id"></p> -->
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <script>
        // document.addEventListener("DOMContentLoaded", function () {
        //     const form = document.getElementById("registration-form");
        //     const generatedUserIdDisplay = document.getElementById("generated-user-id");

        //     form.addEventListener("submit", function (event) {
        //         event.preventDefault();

        //         const generatedUserId = generateUserId();
        //         generatedUserIdDisplay.textContent = `Generated User ID: ${generatedUserId}`;
        //     });

        //     function generateUserId() {
        //         const randomId = Math.floor(Math.random() * 100000);
        //         const formattedId = String(randomId).padStart(5, '0');
        //         return formattedId;
        //     }
        // });
    </script>
</body>
</html>
