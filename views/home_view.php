


<!-- 
<form action="" method="post" enctype="multipart/form-data" id="login_form">
    <h3>Connection</h3>

    <label for="nickname_mail_login">Email or Nickname</label>
    <input type="text" name="nickname_mail_login" id="nickname_mail_login">

    <label for="pass_login">Password</label>
    <input type="password" name="pass_login" id="pass_login">

    <a href="">Don't remember your password ?</a>
    
    <input type="submit" value="Connect">

</form> -->

<div class="flex w-full h-screen justify-center items-center">
<div class="w-full  max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 mr-4" enctype="multipart/form-data" method="POST" id="login_form">
    <div class="mb-4">
      <h2 class="text-xl mt-2 mb-4">Login</h2>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="nickname_mail_login">
        Username/Email
      </label>
      <input name="nickname_mail_login" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nickname_mail_login" type="text" placeholder="Username">
    </div>
    <div class="mb-2">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="pass_login">
        Password
      </label>
      <div class="flex items-center">
        <input name="pass_login" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="pass_login" type="password" placeholder="******************">
        <div class="password-icon w-min mb-4 cursor-pointer ml-2">
            <div class="eye h-4 w-4"></div>
        </div>
      </div>
      <p id="fetch_message_login" class="text-red-500 text-xs italic">Please choose a password.</p>
    </div>
    
    <div class="flex items-center justify-between mt-2">
      <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" value='Login' type="button">
       
      <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">
        Forgot Password?
      </a>
    </div>
  </form>
  
</div>




<form action="" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-1/4 ml-4" enctype="multipart/form-data"  id="register_form">
    <h3 class="mb-4 text-xl">Register</h3>

    <label class="block text-gray-700 text-sm font-bold mb-2" for="email_register">Email</label>
    <input type="text" name="email_register" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="email_register">

    <label class="block text-gray-700 text-sm font-bold mb-2" for="nickname_register">Nickname</label>
    <input type="text" name="nickname_register" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="nickname_register">

    <label class="block text-gray-700 text-sm font-bold mb-2" for="birth_register">Birthdate</label>
    <input type="date" name="birth_register" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="birth_register">

    <label class="block text-gray-700 text-sm font-bold mb-2" for="checkbox">Gender</label>
    <div class="flex mb-4 justify-center">
      <div class="mr-4">
        <input type="checkbox" checked name="checkbox" value="female" class="checkBoxGender" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline " id="checkbox_female">Female    
      </div>
      <div class="mr-4">
        <input type="checkbox" name="checkbox" value="male"  id="checkbox_male">Male
      </div>
      <div class="mr-4">
        <input type="checkbox" name="checkbox" value="other"  id="checkbox_other">Other
      </div>
    </div>
    
    <label class="block text-gray-700 text-sm font-bold mb-2" for="pass_register">Password</label>
    <div class="flex items-center">
      <input type="password" name="pass_register" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="pass_register">
      <div class="password-icon w-min mb-4 cursor-pointer ml-2">
        <div class="eye h-4 w-4"></div>
      </div>
    </div>
    <label class="block text-gray-700 text-sm font-bold mb-2 pass" for="confirmation_pass_register">Password confimation</label>
    <div class="flex items-center">
      <input type="password" name="confirmation_pass_register" class="pass shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-4" id="confirmation_pass_register">
      <div class="password-icon w-min mb-4 cursor-pointer ml-2">
          <div class="eye h-4 w-4"></div>
      </div>
    </div>
    <p id="fetch_message_register" class="text-red-500 text-xs italic">Please choose a password.</p>
   
    <input type="submit" class="bg-green-500 hover:bg-green-700 mt-2 w-full text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" value='Register' type="button">

</form>
</div>


<script src="./js/fetch.js"></script>
<script src="./js/checkbox.js"></script>
<script src="./js/displayPass.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace();
</script>