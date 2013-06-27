<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<?php
/*
 * Pull in our variables from the view fields.
 * $fields['id_of_our_field']->content;
*/
$title = $fields['title']->content;
$body = $fields['body']->content;
$img = $fields['field_image']->content;
$name = $fields['name']->content;
$uid = $fields['uid']->content;
$type = $fields['type']->content;

/*
 * Create an if statement for switching grid
 * layouts based on content type
*/
if ($type == 'article') {
	$grid1 = 'grid-8 push-4 omega';
	$grid2 = 'grid-4 pull-8 alpha';
} else {
	$grid1 = 'grid-8 alpha';
	$grid2 = 'grid-4 omega';
}
?>


<div class="<?php print $type; ?>">
	<div class="<?php print $grid1; ?>">
		<h3 class="title"><?php print $title; ?></h3>
		<div class="body"><?php print $body; ?></div>
	</div>
	<div class="<?php print $grid2; ?>">
		<div class="img responsive"><?php print $img; ?></div>
		<?php if ($uid != '0' && $type == 'article'): ?>
			<div class="author">
				<label>Author:</label>
				<?php print $name; ?>
			</div>
		<?php endif; ?>
	</div>
</div>




