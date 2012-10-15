<?php if(isset($msg)): ?>
	<p><?php echo $msg; ?></p>
<?php endif; ?>

<table class="table table-condensed">

	<tr>
		<td>название</td>
		<td>цитата</td>
		<td>автор</td>
		<td>редактировать</td>
	</tr>
<?php foreach($quote as $item): ?>
	<tr>
		<td><?php echo $item->title; ?></td>
		<td><?php echo $item->text; ?></td>
		<td><?php echo $item->autor; ?></td>
		<td>
			<form> <a class="btn" href="<?php echo URL::site('quote/edit').'/'.$item->id; ?>">редактировать</a>
				<input type="hidden" name="id" value="<?php echo $item->id; ?>">
				<input type="submit" class="btn" name="del" value="удалить">
			</form>
		</td>
	</tr>
	
<?php endforeach; ?>

</table>