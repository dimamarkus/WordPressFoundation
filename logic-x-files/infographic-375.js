

$j(window).ready(infographic_hover);

function infographic_hover(){


	var yellowHairline = $j('h4.yellow-hairline'),
	greenHairline = $j('h4.green-hairline'),
	blueHairline = $j('h4.blue-hairline'),
	infographic = $j('div.infographic-375'),
	ptags = $j('div.upper-row').find('p'),
	brtags = $j('div.lower-row').find('br');

	ptags.hide();
	brtags.hide();

	blueHairline.bind('mouseenter', function(){
		$j('h5.toblue').addClass('infograph-blue');
		$j('img.toblue').addClass('icon-blue');
	}).mouseleave(function() {
		$j('h5.toblue').removeClass('infograph-blue');
		$j('img.toblue').removeClass('icon-blue');
	});

	greenHairline.bind('mouseenter', function(){
		$j('h5.togreen').addClass('infograph-green');
		$j('img.togreen').addClass('icon-green');
	}).mouseleave(function() {
		$j('h5.togreen').removeClass('infograph-green');
		$j('img.togreen').removeClass('icon-green');
	});

	yellowHairline.bind('mouseenter', function(){
		$j('h5.toyel').addClass('infograph-yellow');
		$j('img.toyel').addClass('icon-yellow');
	}).mouseleave(function() {
		$j('h5.toyel').removeClass('infograph-yellow');
		$j('img.toyel').removeClass('icon-yellow');
	});

	if ($j('div.infographic-375').length !== 0) {
		$j('div.photo').find('img').hide();
	}

	if ($j('title').text() == "EMP Master Program | Dubspot") {
		$j('h5.togreen').addClass('infograph-green');
		$j('img.togreen').addClass('icon-green');
	} else if ($j('title').text() == "DJ / Producer Master Program NYC | Dubspot") {
		$j('h5.toyel').addClass('infograph-yellow');
		$j('img.toyel').addClass('icon-yellow');
	} else if ($j('title').text() == "DJ / Producer Ableton Program NYC | Dubspot") {
		$j('h5.toblue').addClass('infograph-blue');
		$j('img.toblue').addClass('icon-blue');
	}



};







// REFACTOR ATTEMPT 
// ---------------------------------

// 	var Infographic = {
		
// 		init: function() {
// 			this.cache();
// 			this.hideTags();
// 			this.hideGraphic();
// 			this.hoverOnBlue();
// 			this.hoverOnGreen();
// 			this.hoverOnYellow();
// 			this.hoverTest();
// 			console.log(this.blueHairline);
// 			this.blueHairline.bind('mouseenter', function(){
// 				console.log('WEEEEEEE');
// 			});
// 			return this;
// 		},

// 		cache: function() {
// 			this.infographic = $j('div.infographic-375'),
// 			this.blueHairline = $j('h4.blue-hairline'),
// 			this.blueH5 = $j('h5.toblue'),
// 			this.blueIcon = $j('img.toblue'),
// 			this.greenHairline = $j('h4.green-hairline'),
// 			this.greenH5 = $j('h5.togreen'),
// 			this.greenIcon = $j('img.toblue'),
// 			this.yellowHairline = $j('h4.yellow-hairline'),
// 			this.yellowH5 = $j('h5.toyel'),
// 			this.yellowIcon = $j('img.toyel'),
// 			this.ptags = $j('div.upper-row').find('p'),
// 			this.brtags = $j('div.lower-row').find('br'),
// 			this.hiddenphoto = $j('div.photo').find('img');
// 		},

// 		hideTags: function() {
// 			this.ptags.hide();
// 			this.brtags.hide();
// 		},

// 		hideGraphic: function() {
// 			if (this.infographic.length !== 0) {
// 				this.hiddenphoto.hide();
// 			}
// 		},

// 		hoverTest: function() {
// 			this.blueHairline.bind('click', function(){
// 				console.log('WEEEEEEE');
// 			})
// 		},

// 		hoverOnBlue: function(){
// 			this.blueHairline.bind('mouseenter', function(){
// 				this.blueH5.addClass('infograph-blue');
// 				this.blueIcon.addClass('icon-blue');
// 			}).mouseleave(function() {
// 				this.blueH5.removeClass('infograph-blue');
// 				this.blueIcon.removeClass('icon-blue');
// 			});
// 		},

// 		hoverOnGreen: function(){
// 			this.greenHairline.bind('mouseenter', function(){
// 				this.greenH5.addClass('infograph-green');
// 				this.greenIcon.addClass('icon-green');
// 			}).mouseleave(function() {
// 				this.greenH5.removeClass('infograph-green');
// 				this.greenIcon.removeClass('icon-green');
// 			});
// 		},

// 		hoverOnYellow: function(){
// 			this.yellowHairline.bind('mouseenter', function(){
// 				this.yellowH5.addClass('infograph-yellow');
// 				this.yellowIcon.addClass('icon-yellow');
// 			}).mouseleave(function() {
// 				this.yellowH5.removeClass('infograph-yellow');
// 				this.yellowIcon.removeClass('icon-yellow');
// 			});
// 		}
// 	};

// $j(window).ready(Infographic.init());




