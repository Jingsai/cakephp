<!-- File: /app/View/Posts/index.ctp -->
<h1>Complexity</h1>

<?php echo $this->Html->link(
'Add Complexity',
array('controller' => 'modifyParas', 'action' => 'add')
); ?>

<table>
<tr>
<th>complexity</th>
</tr>
<!-- Here is where we loop through our $posts array, printing out post info -->
<?php foreach ($complexities as $complexity): ?>
<tr>
	<td><?php echo $complexity['ModifyPara']['complexity']; ?></td>
</tr>
<?php endforeach; ?>
<?php unset($complexity); ?>
</table>   

  
