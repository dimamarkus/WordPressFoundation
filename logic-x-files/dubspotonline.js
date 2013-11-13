/**
* Help desk dialog singleton
*/
helpdesk = {
	/**
	* Validates and submits the help desk form
	* @return		boolean
	*/
	validateForm: function()
		{
		// Check we have a message
		var textarea = document.getElementById('helpdesk').getElementsByTagName('textarea')[0];
		if (textarea.value.length < 1)
			{
			alert('Please enter a message');
			return false;
			}

		// Check we have a subject
		var input = document.getElementById('helpdesk').getElementsByTagName('input')[0];
		if (input.value.length < 1)
			{
			alert('Please select a subject');
			return false;
			}

		var form = document.getElementById('helpdesk').getElementsByTagName('form')[0];
		jQuery.ajax(
			{
			type: 'POST',
			url: form.getAttribute('action'),
			data: jQuery(form).serialize(),
			success: function(data)
				{
				if (data.success == 'true')
					{
					alert(data.message);
					helpdesk.hide();
					}
				else {
					alert('Error Sending Message: ' + data.message);
					}
				}
			});
		},

	/**
	* Displays the select menu
	* @return		void
	*/
	menu: function()
		{
		jQuery('#helpdesk div.menu').removeClass('hidden');
		},

	/**
	* Displays the help desk form
	* @return		void
	*/
	show: function()
		{
		// Remove any existing dialog
		if (!!document.getElementById('helpdesk'))
			{
			document.body.removeChild(document.getElementById('helpdesk'));
			}

		// Create and inject the new dialog
		var div = document.createElement('div');
		div.id = 'helpdesk';
		div.innerHTML = this.getHtml();
		document.body.appendChild( div );
		},

	/**
	 * Hides the Help Desk Form
	 * @return 		void
	 */
	hide: function()
		{
		if (!!document.getElementById('helpdesk'))
			{
			document.body.removeChild(document.getElementById('helpdesk'));
			}
		},

	/**
	* Builds and returns the dialog html
	* @return		string
	*/
	getHtml: function()
		{
		var html = [];
		html.push('<div class="bg" onclick="document.getElementById(\'helpdesk\').parentNode.removeChild(document.getElementById(\'helpdesk\'));"></div>');
		html.push('<div class="dialog" onclick="jQuery(\'#helpdesk div.menu\').addClass(\'hidden\');">');
		html.push('<h3>Help Desk: How can we help you?</h3>');
		html.push('<p>To send your question or comment choose a topic and type your message below. For immediate help, please call 1.877.DUBSPOT (1.877.382.7768).</p>');
		html.push('<form action="/help-desk-submit" method="post" onsubmit="helpdesk.validateForm(); return false;">');
		html.push('<fieldset>');
		html.push('<label>Topic*</label>');
		html.push('<div class="select">');
		html.push('<input class="topic" type="hidden" name="topic" value=""/>');
		html.push('<div class="current">');
		html.push('<h4 onclick="setTimeout(\'helpdesk.menu();\', 50);">Select a Topic</h4>');
		html.push('</div>');
		html.push('<div class="menu hidden">');
		html.push('<h4>Select a Topic</h4>');
		html.push('<ul>');
		html.push('<li><a href="javascript:;" onclick="jQuery(\'#helpdesk input.topic\')[0].value = this.innerHTML;jQuery(\'#helpdesk div.current h4\')[0].innerHTML = this.innerHTML;">General Questions</a></li>');
		html.push('<li><a href="javascript:;" onclick="jQuery(\'#helpdesk input.topic\')[0].value = this.innerHTML;jQuery(\'#helpdesk div.current h4\')[0].innerHTML = this.innerHTML;">My Account Settings</a></li>');
		html.push('<li><a href="javascript:;" onclick="jQuery(\'#helpdesk input.topic\')[0].value = this.innerHTML;jQuery(\'#helpdesk div.current h4\')[0].innerHTML = this.innerHTML;">Billing and Payments</a></li>');
		html.push('<li><a href="javascript:;" onclick="jQuery(\'#helpdesk input.topic\')[0].value = this.innerHTML;jQuery(\'#helpdesk div.current h4\')[0].innerHTML = this.innerHTML;">Technical Assistance</a></li>');
		html.push('<li><a href="javascript:;" onclick="jQuery(\'#helpdesk input.topic\')[0].value = this.innerHTML;jQuery(\'#helpdesk div.current h4\')[0].innerHTML = this.innerHTML;">Help with my Course</a></li>');
		html.push('<li><a href="javascript:;" onclick="jQuery(\'#helpdesk input.topic\')[0].value = this.innerHTML;jQuery(\'#helpdesk div.current h4\')[0].innerHTML = this.innerHTML;">Other</a></li>');
		html.push('</ul>');
		html.push('</div>');
		html.push('</div>');
		html.push('<label>Message*</label>');
		html.push('<textarea name="message"></textarea>');
		html.push('<label>&nbsp;</label>');
		html.push('<input type="image" src="/wp-content/themes/dubspotheme/images/button-small-submit.png" width="61" height="21" alt="Submit"/>');
		html.push('<span><a href="javascript:;" onclick="document.getElementById(\'helpdesk\').parentNode.removeChild(document.getElementById(\'helpdesk\'));">Cancel</a></span>');
		html.push('</fieldset>');
		html.push('</form>');
		html.push('<a class="close" href="javascript:;" onclick="document.getElementById(\'helpdesk\').parentNode.removeChild(document.getElementById(\'helpdesk\'));">Close</a>');
		html.push('</div>');
		return html.join("\n");
		}
	};
