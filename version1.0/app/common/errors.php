<?php  include($_SERVER['DOCUMENT_ROOT'].'/php-automation/version1.0/app/common/status-modal.php'); ?>
<?php  if ((count($errors) > 0)) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
			<p style="font-color:white;"><b><?php 
			echo $error; 
			?></b></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>