<!-- File: /app/View/Posts/add.ctp -->
<h1>Add Complexity</h1>
<?php
echo $this->Form->create('ModifyPara');
echo $this->Form->input('complexity');
echo $this->Form->end('Save Complexity');
?>