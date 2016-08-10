<!-- Blog Sidebar Widgets Column -->
<div class="panel panel-default">
    <div class="panel-body">
        <h4>Αναζήτηση</h4>
    </div>
    <div class="panel-footer">
        <ul>
            <?php get_search_form(); ?>
        </ul>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <h4>Αρχείο</h4>
    </div>
    <div class="panel-footer">
        <ul class="sidebar-widget-ul">
            <?php wp_list_categories('title_li='); ?>
        </ul>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <h4>Ημερολόγιο</h4>
    </div>
    <div class="panel-footer" id="calendar-panel">
        <div id="datepicker" data-date="<?php echo date('d-m-Y'); ?>"></div>
        <input type="hidden" id="my_hidden_input">
    </div>
</div>
<!-- Side Widget Well
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>-->
