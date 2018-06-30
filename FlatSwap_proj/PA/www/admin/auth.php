<div class="container-fluid">
<div id="auth">
    <h3>Intrare in admin panel</h3>
    <?php if($message){ ?><p class="message"><?=$message?></p><?php } ?>
    <form role="form" class="form-vertical fc" name="auth" action="index.php" method="post">
      <div class="form-group">
        <label for="login">Introdu Emailul</label>
        <div class="input-group">
          <input type="email" class="form-control" id="login" name="login" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="password">Parola</label>
        <div class="input-group">
          <input type="password" class="form-control" id="password" name="password" placeholder="Parola">
        </div>
      </div>
      <input type="submit" id="submit" name="auth" value="Intra" class="btn btn-primary ">
    </form>
</div>
</div>
