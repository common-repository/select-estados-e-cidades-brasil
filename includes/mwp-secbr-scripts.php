<?php
add_action( 'wp_ajax_secb_ajax', 'secb_ajax' );
add_action( 'wp_ajax_nopriv_secb_ajax', 'secb_ajax' );
function secb_ajax(){
$cidades = wp_remote_get("https://www.mestresdowp.com.br/select-estados-cidades-brasil/select-cidades.php?estado=".$_POST['estado']."", array('headers' => array('Content-Type' => 'application/json')));
$infor = json_decode($cidades['body']);
$cidades = "";
foreach($infor as $item){
$cidades .= "<option>".esc_html($item)."</option>";
}
echo $cidades;
die();
}
add_action('wp_ajax_secb_cidades', 'secb_cidades');
add_action('wp_ajax_nopriv_secb_cidades', 'secb_cidades');
function secb_js(){
	$estados = wp_remote_get("https://www.mestresdowp.com.br/select-estados-cidades-brasil/select-estados.php", array('headers' => array('Content-Type' => 'application/json')));
	$infor = json_decode($estados['body']);
	$estados = "";
	$estados .= "<option selected>Selecione o estado</option>";
	foreach($infor as $item){
		$estados .= "<option>".esc_html($item)."</option>";
	}
	echo '
	<script type="text/javascript">
	jQuery(document).ready(function($){
	$("#'.esc_html(get_option('secb_class_estado')).'").append("'.$estados.'");	
	$("#'.esc_html(get_option('secb_class_estado')).'").change(function(){
	$.ajax({
	type: "POST",
	url: "'.admin_url( 'admin-ajax.php' ).'",
	data: { "action": "secb_ajax", "estado": $(this).val() },
	success: function(request_data) {
	$("#'.esc_html(get_option('secb_class_cidade')).'").html(request_data);
	}
	});
	});
	});
	</script>
	';
}
add_action('wp_footer', 'secb_js',100);

