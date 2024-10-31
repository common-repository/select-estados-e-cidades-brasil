		<div class="mwpsectiontitle">
			<h3>
			<div class="mpwsectiontitleico"><img src="<?php echo $mwp_url_icons; ?>ico-config.png" width="30" /></div>
			<strong>Estados e Cidades</strong>
			</h3>
			<form method="post" action="options.php" name="mwp-status-plugin" id="mwp-status-plugin" class="mwpbrcolone">
			<?php wp_nonce_field('update-options') ?>
				<?php if(get_option('secbr_active')){ ?>
				   <input type="hidden" name="secbr_active" value="" />
				   <input type="image" src="<?php echo SECBR_PLUGIN_ADMIN_URL; ?>assets/images/mwp-ico-on.png" width="40" alt="" />
				<?php }else{ ?>
					<input type="image" src="<?php echo SECBR_PLUGIN_ADMIN_URL; ?>assets/images/mwp-ico-off.png" width="40" alt="" />
					<input type="hidden" name="secbr_active" value="S" />
				<?php } ?>
				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="page_options" value="secbr_active" />
			</form>
		</div>
		<div class="mwpsectioncontent">
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
			<h3>Campo da Cidade</h3>
			<div class="mwp-box">
            <p class="col col-1-2">
				<input type="text" name="secb_class_cidade" placeholder="campo_cidade" size="45" value="<?php echo esc_html(get_option('secb_class_cidade')); ?>" />
            </p>
			<p class="col col-2-2 texto"><strong>Preencha o campo informando o atributo ID do input Cidade.</strong></p>
			</div>
			<h3>Campo do Estado</h3>
			<div class="mwp-box">
            <p class="col col-1-2">
				<input type="text" name="secb_class_estado" placeholder="campo_estado" size="45" value="<?php echo esc_html(get_option('secb_class_estado')); ?>" />
            </p>
			<p class="col col-2-2 texto"><strong>Preencha o campo informando o atributo ID do input Estado.</strong></p>
			</div>
			<input type="submit" name="Submit" class="mwpbuttonupdatesection" value="Atualizar" />
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="secb_class_estado,secb_class_cidade" />
        </form>
		<?php include "mestres-wp-copyright.php"; ?>
		</div>
