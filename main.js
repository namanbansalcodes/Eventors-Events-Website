$(document).ready(function() {
    $(document).dblclick(function() {
        alert("Double Click Detected!");
    });

    $('#send-btn').click(function() {
        var vname = $('#vname').val(); //fetching the data from form
        var vemail = $('#vemail').val();

        if (vname == '' || vemail == '') {
            alert("Please fill all the Required Fields");
        } else {
            var form = $('#vform').serialize();
            $.ajax({
                type: 'POST',
                url: 'maileverything.php',
                data: { data: form },
                success: function() {
                    alert(form);
                }
            })

        }

    });

});