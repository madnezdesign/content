<h2>User Profile</h2>
<p>You can view and update your profile information.</p>

<?php if($is_authenticated): ?>
  <?=$profile_form?>
  <p>You were created at <?=$user['created']?> and last updated at <?=$user['updated']?>.</p>
  <p>You are member of <?=count($user['groups'])?> group(s).</p>
  <ul>
  </ul>
<?php else: ?>
  <p>User is anonymous and not authenticated.</p>
<?php endif; ?>