<div class="students form">
    <?php
    echo $this->Form->create('Student', array(
        'inputDefaults' => array(
            'div' => 'form-group',
            'label' => array(
                'class' => 'col col-md-3 control-label'
            ),
            'wrapInput' => 'col col-md-9',
            'class' => 'form-control'
        ),
        'class' => 'well form-horizontal'
    ));
    ?>
    <fieldset>
        <legend><?php echo __('Add Student'); ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('school_id');
        echo $this->Form->input('email');
        echo $this->Form->input('address');
        ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
