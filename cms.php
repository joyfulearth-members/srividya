<?php
variables([
	VARName => 'Srividya Srikumar',
	VARByline => 'Artist, Writer, Skincare Specialist',
	VARFooterMessage => 'Owner and formulator at Vidzeal - Customised Therapeutic Luxury Handmade skincare.',
	VARLinkToSectionHome => true,
	VARSectionsHaveFiles => true,
	'email' => 'srividya.srikumar@gmail.com',
	'phone' => '+91-8296099664',
	'whatsapp' => '918296099664',
	socialBuilder::variableName => socialBuilder::create()
		->addLinkedIn('in/srividya-srikumar-4357112', 'Srividya S')
		->getItems()
]);

if (nodeIs('creations')) {
	includeThemeManager();
	CanvasTheme::addAssets(CanvasTheme::beauty);
}

function after_footer_assets() {
	if (!nodeIs('creations')) return;
	echo NEWLINE . '	<script>
		$(window).on("load", function(){
			$(".twentytwenty-container[data-orientation!=\'vertical\']").twentytwenty({default_offset_pct: 0.5});
		});
	</script>';
}
