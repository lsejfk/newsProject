<?php
namespace Common;
if(!defined('SITE')){exit('Access denied');}
?>
<h1>hello add</h1>
<p><?php echo $this->getData('name');?></p>
<p><?php echo $this->getData('email');?></p>

<?php $this->inc('test'); ?>