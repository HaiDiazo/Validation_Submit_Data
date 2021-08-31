<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        span {
            cursor: pointer;
        }

        .top {
            margin-top: 170px;
        }

        .hidden {
            display: none;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="container top">
        <div class="d-flex justify-content-center">
            <div class="card w-75">
                <div class="card-header">
                    Form Sign Up Website
                </div>
                <div class="card-body">
                    <form action="proces_validation.php" id="myForm" method="POST">
                        <div class="form-group">
                            <label for="Name">Your Name</label>
                            <input type="text" class="form-control" oninput="FilledData('Name')" name="name" id="Name" placeholder="">
                            <div id="alertName" class="hidden">
                                <span class="text-danger font-italic">
                                    *please input your name
                                </span>
                            </div>
                            <p id="demo"></p>
                        </div>
                        <div class="form-group">
                            <label for="EmailAddress">Email address</label>
                            <input type="email" class="form-control" name="email" id="EmailAddress" placeholder="" oninput="FilledData('EmailAddress')">
                            <div id="alertEmailAddress" class="hidden">
                                <span class="text-danger font-italic">
                                    *please input your email
                                </span>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" name="password" id="Password" placeholder="" oninput="FilledData('Password')">
                            <div id="alertPassword" class="hidden">
                                <span class="text-danger font-italic">
                                    *please input your password
                                </span>
                            </div>
                        </div>

                        <button class="btn btn-primary" id="buttonSubmit" name="submit" type="button">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var a = 0;

        $("#buttonSubmit").click(function() {

            var name = $("#Name").val();
            var email = $("#EmailAddress").val();
            var password = $("#Password").val();

            if (name == "") {
                $("#alertName").show();
            } else {
                $("#alertName").hide();
            }

            if (email == "") {
                $("#alertEmailAddress").show();
            } else {
                $("#alertEmailAddress").hide();
            }

            if (password == "") {
                $("#alertPassword").show();
            } else {
                $("#alertPassword").hide();
            }

            a = 1;

        });

        function FilledData(id) {

            if (a != 0) {
                var data = document.getElementById(id).value;
                var alert = "#alert";

                if (data != "") {
                    $(alert.concat(id)).hide();
                } else {
                    $(alert.concat(id)).show();
                }
            }
        };

        $('#toggle-password').on('click', function() {

            let input = $("#" + $(this).attr('toggle'));
            if (input.attr('type') == "password") {
                $(this).html(" hide");
                $(this).removeClass('fa fa-eye');
                $(this).addClass('fa fa-eye-slash');
                input.attr('type', 'text');
            } else {
                $(this).html(" show");
                $(this).removeClass('fa fa-eye-slash');
                $(this).addClass('fa fa-eye');

                input.attr('type', 'password')
            }
        });
    </script>
</body>

</html>