$(document).ready(function() {
    $(document).dblclick(function() {
        alert("Double Click Detected!");
    });

    $('#vform').submit(function() {
        event.preventDefault();

        var vname = $('#vname').val(); //fetching the data from form
        var vemail = $('#vemail').val();

        if (vname == '' || vemail == '') {
            alert("Please fill all the Required Fields");
        } else {
            var form = $('#vform').serialize();
            $.ajax({
                type: 'POST',
                url: 'maileverything.php',
                data: form,
                success: function() {
                    alert("Your response has been recorded.");
                }
            })

        }

    });

});