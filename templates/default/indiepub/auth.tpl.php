<div class="row">
  <div class="span6 offset3 well text-center">

    <h2 class="text-center">
      Approve <?=$vars['client_id']?>
    </h2>

    <form action="<?= \Idno\Core\site()->config()->getDisplayURL() ?>indieauth/approve" method="post">
      Approve <?=$vars['client_id']?> to access this site with the scope(s) <?=$vars['scope']?>?

      <?php
      $hidden_params = array("me", "client_id", "redirect_uri", "scope", "state");
      foreach ($hidden_params as $param) {
        echo '<input type="hidden" name="' . $param . '" value="' . $vars[$param] . '"/>';
      }
      ?>

      <div class="control-group">
        <div class="controls">
          <button type="submit" class="btn btn-default">Approve</button>
          <button type="cancel" class="btn btn-cancel">Cancel</button>
        </div>
      </div>
      <?= \Idno\Core\site()->actions()->signForm('/indiepub/auth') ?>
    </form>

  </div>
</div>
