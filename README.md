# Validation Submit Data
This is my script for make a validation submit data with javascript when empty input data. In this my script i use Boostrap, and JQuery 3.5.1. 

<div align="center">
<img src="https://user-images.githubusercontent.com/70514099/132088134-dbe47a38-9249-44a8-87bb-4de7b468bc1f.png" height=200>
<p>Alert when empty input</p>
</div>

## What I Use
- [Boostrap](https://getbootstrap.com/)
- [Jquery 3.5.1](https://jquery.com/download/)

## Getting Started 
- First you need add script in head html. Required add jQuery but if you have your own css. You don't need to add boostrap.
```html
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
```
- Second you make form input and button submit with tag form. 
- Third, use this script in below for show alert. Variable 'a' for when you typing in appreance a form, alert doesn't show. But after you click a button sign up with empty form. You will get a alert then when you typing alert will hide and you typing to empty again alert will show.
```js
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
```
- Done.
