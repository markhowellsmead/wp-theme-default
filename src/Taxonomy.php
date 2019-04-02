<?php

namespace TOPLEVELNAMESPACE\THEMENAMESPACE;

trait Taxonomy {

	public function hasMultipleCategories() {
		$taxonomies = get_categories(
			[
				'fields' => 'ids',
				'number' => 2,
			]
		);

		return count( $taxonomies ) > 1;
	}
}
