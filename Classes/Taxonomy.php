<?php

namespace YourUniqueTopLevelNamespace\PascalCaseThemeKey;

trait Taxonomy
{
    public static function hasMultipleCategories()
    {
        $taxonomies = get_categories(array(
            'fields' => 'ids',
            'number' => 2,
        ));

        return count($taxonomies) > 1;
    }
}
