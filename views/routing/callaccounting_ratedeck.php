<!--NAME-->
<div class="element-container time-container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label" for="ca_ratedeck_id"><?php echo _("Call Accounting RateDeck") ?></label>
						<i class="fa fa-question-circle fpbx-help-icon" data-for="ca_ratedeck_id"></i>
					</div>
					<div class="col-md-9">
						<?php echo callaccounting_ratedecks_drawgroupselect('ca_ratedeck_id', (isset($ca_ratedeck_id) ? $ca_ratedeck_id : ''), true, '', _('---Rate Deck---')); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<span id="ca_ratedeck_id-help" class="help-block fpbx-help-block"><?php echo _("Call Accounting Rate Deck ID. ")?></span>
		</div>
	</div>
</div>
<!--END NAME-->
<script>
</script>
