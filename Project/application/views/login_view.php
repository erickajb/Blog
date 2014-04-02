<!DOCTYPE html PUBLIC >
<html>
  <head>
        <link rel="stylesheet" type="text/css" href="style/index.css">
    <title>Login Blog </title>
  </head>
  <body>
    <h1>Login</h1>
    <?php echo validation_errors(); ?>
    <?php echo form_open('verifylogin'); ?>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"/>
      <br/>
      <label for="password">Password:</label>
      <input type="password" id="pass" name="password"/>
      <br/>
      <b><input type="submit" value="Login"/></b>
    </form>
  </body>
</html>
