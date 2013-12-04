<h2>Index Controller</h2>

<?php foreach($menu as $val): ?>
<li><a href='<?=create_url($val)?>'><?=$val?></a>  
<?php endforeach; ?> 