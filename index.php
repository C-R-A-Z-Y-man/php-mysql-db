
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/login_form_design.css">

</head>
<body>
  
  <div class="container">
    <div class="cta-form">

    <h3>Fill out the form!</h3>

    </div>


    <form method="POST" action="process_input/form_submit_page.php" class="form">

      <input type="text"   name="user_input_name"    placeholder="Name" class="form__input" id="name" />

      <label for="name" class="form__label">Name</label>

      <input type="email"     name="some_user_email"        placeholder="Email" class="form__input" id="email" />
      <label for="email" class="form__label">Email</label>

      <input type="text"    name="tell_me_something"     placeholder="Subject" class="form__input" id="subject" />
      <label for="subject"  class="form__label">Subject</label>

      <center> 
        <button style="padding:15px;" type="submit" >Submit  Form</button> 
      </center>

    </form>


  </div>

</body>
</html>