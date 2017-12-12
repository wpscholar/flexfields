<?php
/**
 * @var \wpscholar\TemplateX $x
 */
?>
<fieldset <?php $x->load( 'attributes.php' ); ?>>

	<?php if ( $x->get( 'label' ) ): ?>
        <legend class="flex-label-text"><?php echo esc_html( $x->get( 'label' ) ); ?></legend>
	<?php endif; ?>

    <div class="flex-fieldset-content">
		<?php foreach ( $x->get( 'options', [] ) as $option ): ?>
            <label class="flex-label">
                <input type="checkbox"
                       name="<?php echo esc_attr( $x->get( 'name' ) . '[]' ); ?>"
                       value="<?php echo esc_attr( $x->getIn( $option, 'value' ) ); ?>"
					<?php checked( in_array( $x->getIn( $option, 'value' ), $x->get( 'value' ) ) ); ?>>
                <span class="flex-label-text"><?php echo esc_html( $x->getIn( $option, 'label' ) ); ?></span>
            </label>
		<?php endforeach; ?>
    </div>

</fieldset>