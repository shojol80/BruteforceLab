<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
    <h1>Input your name here</h1><br>
    <input type="text" id='usertext' placeholder='Your text' /> <br>
    <p id='text'></p>


    <script>

    $('#usertext').keypress(function(event){
    if (event.which==13){

        document.getElementById("text").innerHTML=document.getElementById("usertext").value;
        
    }
    });
</script>
</body>
</html> 