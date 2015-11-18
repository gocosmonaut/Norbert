<?php
/**
 * @file
 * Displays the search form block.
 *
 * Available variables:
 * - $search_form: The complete search form ready for print.
 * - $search: Associative array of search elements. Can be used to print each
 *   form element separately.
 *
 * Default elements within $search:
 * - $search['search_block_form']: Text input area wrapped in a div.
 * - $search['actions']: Rendered form buttons.
 * - $search['hidden']: Hidden form elements. Used to validate forms when
 *   submitted.
 *
 * Modules can add to the search form, so it is recommended to check for their
 * existence before printing. The default keys will always exist. To check for
 * a module-provided field, use code like this:
 * @code
 *   <?php if (isset($search['extra_field'])): ?>
 *     <div class="extra-field">
 *       <?php print $search['extra_field']; ?>
 *     </div>
 *   <?php endif; ?>
 * @endcode
 *
 * @see template_preprocess_search_block_form()
 *
 * @ingroup templates
 */
?>
<p><button class="btn btn-info btn-lg" data-target="#myModal2" data-toggle="modal" type="button">Search</button><!-- Modal --></p>

<div class="modal fade" id="myModal2" role="dialog">
<div class="modal-dialog"><!-- Modal content-->
<div class="modal-content">
<div class="modal-header"><button class="close" data-dismiss="modal" type="button">×</button>

<h4 class="modal-title">Search</h4>
</div>

<div class="modal-body">
<div>
  <?php if (empty($variables['form']['#block']->subject)): ?>
    <h2 class="element-invisible"><?php print t('Search form'); ?></h2>
  <?php endif; ?>
  <?php print $search_form; ?>
</div>

<div class="modal-footer"><button class="btn btn-default" data-dismiss="modal" type="button">Close</button></div>
</div>
</div>
</div>

