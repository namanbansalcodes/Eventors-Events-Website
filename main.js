$(document).ready(function() {
    $(document).dblclick(function() {
        alert("Double Click Detected!");
    });

    $('#vform-send-btn').click(function() {


        var name = $('#name').val(); //fetching the data from form
        var email = $('#email').val();
        var phone = $('#phone').val();
        var city = $('#city').val();
        var exp = $('#exp').val();
        var social = $('#social').val();

        var desc1 = $('#desc1').val();
        var desc2 = $('#desc2').val();



        if (name == '' || email == '' || phone == '' || city == '' || exp == "Select" || social == '') {
            alert("Please fill all the Required Fields");
        } else {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'mailvendor.php',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    social: social,
                    city: city,
                    exp: exp,
                    desc1: desc1,
                    desc2: desc2
                },
                success: function() {
                    alert('Your response has been recorded');
                }

            })

        }

    });

});