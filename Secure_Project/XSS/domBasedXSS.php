<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
    <h1>Input your name here</h1><br>
    <input type="text" id='usertext' placeholder='Your text' /> <br>
    <h3 id='text'></h3>


    <script>

    $('#usertext').keypress(function(event){
    if (event.which==13){
    $('#text').text('Hello '+$( "#usertext" ).val());
    // you can prevent 100% from xss,
    // user better library for prevent it.
    // I user jquery for it
        
    }
    });
</script>
</body>
</html> 