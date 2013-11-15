<div class="arrow_box" style="width: 100%; margin: -1px 15px 0 5px;">
	<?php lang::_e('Help us develop better software for you - ')?>
	<?php echo html::button(array('value' => lang::_('Yes, send anonymous statistics'), 'attrs' => 'class="button button-primary button-large" id="toeSendUsageStatButt"'))?>
	<?php echo html::button(array('value' => lang::_('No, don\'t send'), 'attrs' => 'class="button" id="toeHideSendUsageStatButt"'))?>
	<br />
	<div id="toeSendUsageStatMsg"></div>
</div>
<script type="text/javascript">
// <!--
jQuery(document).ready(function(){
	jQuery('#toeSendUsageStatButt').click(function(){
		var self = this;
		jQuery.sendForm({
			msgElID: 'toeSendUsageStatMsg',
			data: {page: 'promo_ready', action: 'sendUsageStat', reqType: 'ajax'},
			onSuccess: function(res) {
				if(!res.error) {
					setTimeout(function(){
						jQuery(self).parents('.arrow_box:first').hide('slow');
					}, 1000);
				}
			}
		});
		return false;
	});
	jQuery('#toeHideSendUsageStatButt').click(function(){
		var self = this;
		jQuery.sendForm({
			msgElID: 'toeSendUsageStatMsg',
			data: {page: 'promo_ready', action: 'hideUsageStat', reqType: 'ajax'},
			onSuccess: function(res) {
				if(!res.error) {
					jQuery(self).parents('.arrow_box:first').hide('slow');
				}
			}
		});
		return false;
	});
});
// -->
</script>