//Send Data From Register & Get Data From Another Php Page 
$(document).ready(function() {
    $('#loginform').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: $(this).serialize(),
            success: function(response)
            {
                var jsonData = JSON.parse(response);
                alert(jsonData);
                location.href = 'login.php';
           },
           error: function(){
             alert('Invalid Credentials!');
           }
       });
     });
});
