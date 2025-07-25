( function( api ) {

	// Extends our custom "professional-portfolio" section.
	api.sectionConstructor['professional-portfolio'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );