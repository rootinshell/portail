<fieldset><legend>Custom Calendar</legend>
	<form id="listSalle">
		<?php if ($salles): ?>
			<select onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
				<?php foreach ($salles as $salle): ?>

					<?php if ($salle->getID() == $idSalle) : ?>
						<option selected="true" value="<?php echo url_for('/reservation/'.$salle->getID()) ?>"><?php echo $salle->getName() ?></option>
					<?php else : ?>
						<option value="<?php echo url_for('/reservation/'.$salle->getID()) ?>"><?php echo $salle->getName() ?></option>
				<?php endif ?>
				<?php endforeach ?>
			</select>
		<?php endif ?>
	</form>
</fieldset>
