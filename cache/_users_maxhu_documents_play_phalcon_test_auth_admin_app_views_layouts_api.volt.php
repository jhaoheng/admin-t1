<h1 class="page-header"><?= $apiver ?></h1>

<?php foreach ($groupItem as $key => $value) { ?>

<div>
	<div class="panel">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4>
				<a data-toggle="collapse" data-parent="" href="#<?= $key ?>" aria-expanded="false" aria-controls="<?= $key ?>">
					<?= $this->escaper->escapeHtml($value['name']) ?>
				</a>
			</h4>

			<div id="<?= $key ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?= $key ?>">
				<div class="panel-group" id="" role="" aria-multiselectable="true">

					<?php foreach ($value['item'] as $key2 => $value2) { ?>

					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#<?= $key ?>-<?= $key2 ?>" aria-expanded="false" aria-controls="<?= $key ?>-<?= $key2 ?>">
									<?= $this->escaper->escapeHtml($value2['name']) ?> - <?= $key ?>-<?= $key2 ?><br>
								</a>
							</h4>
						</div>
						<div id="<?= $key ?>-<?= $key2 ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<?= $this->escaper->escapeHtml($value2['request']['url']) ?> <br>
								<?= $this->escaper->escapeHtml($value2['request']['method']) ?><br>


								<?php foreach (range(0, $this->length($value2['request']['header']) - 1) as $index) { ?>
									<?= $value2['request']['header'][$index]['key'] ?> = <?= $value2['request']['header'][$index]['value'] ?> <br>
								<?php } ?>

								<?php foreach ($value2['request']['body'] as $key3 => $value3) { ?>
								<?= $key3 ?> = <?= ($value3 ? $value3 : 'null') ?><br>
								<?php } ?>

								<?= $this->escaper->escapeHtml($value2['request']['description']) ?>
							</div>
						</div>
					</div>

					<?php } ?>

				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>


