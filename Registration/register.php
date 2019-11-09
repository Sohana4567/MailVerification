<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send mail  from  PHP  using  SMTP</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">Sending Emails in PHP  from  localhost  with  SMTP</h1>
    <h2  class="text-center">Using sendmail</h2>
    <?php
       if(isset($_POST['sendmail'])){
           if(mail($_POST['email'],$_POST['subject'],$_POST['message'])){
               echo "MAil send";
           } else {
               echo "Failed";
           }
       }
       ?>
    <div class="row">
    <div class="col-md-9 col-md-offset-2">
    <form role="form"  method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="col-sm-9 form-group">
         <label for="email">To  Email:</label>
         <input type="email" class="form-control" id="email"  name="email"  maxlength="50">
     </div>
     </div>    
     <div class="row">
    <div class="col-sm-9 form-group">
         <label for="email">Subject:</label>
         <input type="text" class="form-control" id="subject"  name="subject"  maxlength="50">
     </div>
     </div>    
     <div class="row">
    <div class="col-sm-9 form-group">
         <label for="name">Message:</label>
         <textarea class="form-control" type="textarea"  id="message"  name="message"  placeholder="Your Message Here"  maxlength="6000"  rows="5"></textarea>
     </div>
     </div>  
     <div class="row">
      <div class="col-sm-9 form-group">
      <button type="submit"  name="sendmail" class="btn btn-lg  btn-success  btn-block">Send</button>
      </div>
      </div>
      </form>
      </div>
      </div>
</body>
</html>