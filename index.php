<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PaySlip Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <style>
        a{width: 100%;}
        table{
            width: 100%;
        }
        .info{
            margin-top: 30px;
        }
        
      </style>
  </head>
  <body>
  <section>

    <div class="container">
      <h1 class="title has-text-centered has-text-info">
        Welcome to Payslip information portal
      </h1>
    </div>
  </section>
  
  <div class="container">
<framset>
    <legend> Employee Record Filter</legend>
      <div class="columns">
          <div class="column is-5">
              <div class="field">
  <div class="control">
    <input class="input is-primary" type="text" placeholder="Enter Name" id="value1">
     
  </div>
</div>
</div>
<div class="column is-5">
              <div class="field">
  <div class="control">
         <input class="input is-primary" type="text" placeholder="Enter Basic" id="value2">
  </div>
</div>
</div>
  <div class="column is-2">
     
  <a class="button is-primary" id="submit">Send</a>
    </div>
  </div>
 </framset> 
      <div class="container">
          <div id="message" class="msg"></div>

      </div>
      </div>
      <script>
      $(document).ready(function() {
    $("#submit").click(function(e)
    {
       $.ajax({
            type:"POST",
            url:"caltest.php",
            data:{name:$("#value1").val(),basic:$("#value2").val()},
            success: function(result,status,xhr)
            {
                $("#message").html(result);
            },
            error:function(xhr,status,error)
            {
                $("#message").html(error);
            }
        });
    });
});
</script>
  </body>
</html>