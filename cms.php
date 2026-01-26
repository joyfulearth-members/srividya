<?php
variables([
	VARLinkToSectionHome => true,
	VARSectionsHaveFiles => true,
	'email' => 'srividya.srikumar@gmail.com',
	'phone' => '+91-8296099664',
	'whatsapp' => '918296099664',
	'social' => [
		['type' => 'linkedin', 'url' => 'https://www.linkedin.com/in/srividya-srikumar-4357112', 'name' => 'Srividya S'],
	],
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
