<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if(session()->getFlashdata('msg')): ?>
      <?= session()->getFlashdata('msg');?>
    <?php endif; ?>
      <form action="ClientController/add" method="post">
        <label>name</label>
        <input type="text" name="name">
        <label>age</label>
        <input type="number" name="age">
        <input type="submit" name="submit" value="submit">
      </form>
  </body>
</html>
s
