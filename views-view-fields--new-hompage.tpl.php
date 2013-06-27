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

$title = $fields['title']->content;
$body = $fields['body']->content;
$created = $fields['created']->content;
$img = $fields['field_image']->content;
$name = $fields['name']->content;
$access = $fields['access']->content;
$type = $fields['type']->content;
$machine_nm = $fields['type_1']->content;
$uid =  $fields['uid_1']->content;

if ($machine_nm == 'article' ) {
	$grid1 = "grid-8 alpha";
	$grid2 = "grid-4 omega";	
} else {
	$grid1 = "grid-8 push-4 omega";
	$grid2 = "grid-4 pull-8 alpha";
}

?>



<div class="<?php print $machine_nm; ?> clearfix">
	<div class="<?php print $grid1; ?>">
		<h3 class="title"><?php print $title; ?></h3>
		<span class="created"><?php print $created; ?></span>
		<div class="body"><?php print $body; ?></div>
	</div>
	<div class="<?php print $grid2; ?>">
		<div class="img responsive"><?php print $img; ?></div>
	</div>
	<?php if ($uid !=0 && $machine_nm =='article'): ?>
		<div class="grid-12 alpha omega">
			<label>Author Info:</label>
			<div class="author-name"><?php print $name; ?></div>
			<span class="last-access">checked in: <?php print $access; ?></span>
		</div>
	<?php endif; ?>
</div>