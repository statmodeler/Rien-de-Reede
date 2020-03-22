<HTML>
<HEAD>
	<?php
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}
?>
<META name="DESCRIPTION" CONTENT="Rien de Reede is fluitist en leraar.">
	<META name="KEYWORDS" content="rien de reede, fluitist, amsterdam, concertgebouw, conservatorium, leraar, dwarsfluit, fluit">
	<META NAME="ROBOTS" CONTENT="ALL">
	<META HTTP-EQUIV="Content-Language" CONTENT="nl">
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
	<?php wp_head();?>
</HEAD>
<BODY>

<TABLE name="top" width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="black">
	<TR>
		<TD><IMG src="<?php echo get_template_directory_uri(); ?>/images/top_ned.gif" width="600" height="179"></TD>
	</TR>
	<TR height="1">
	<TD><IMG src="<?php echo get_template_directory_uri(); ?>/images/grayline.gif" width="100%" height="1"></TD>
	</TR>
</TABLE>

<TABLE name="menu" width="700" cellpadding="0" cellspacing="0" border="0">
	<TR height="55">
	<TD width="75"><img src="<?php echo get_template_directory_uri(); ?>/images/corner_top.gif" border="0" height="55" width="75"></TD>
		<TD align="left"><?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?></TD>
	</TR>
</TABLE>
<TABLE name="content" width="650" cellpadding="0" cellspacing="0" border="0">
	<TR>
		<TD width="75"><img src="<?php echo get_template_directory_uri(); ?>/images/spacer.gif" width="75"></TD>
		<TD valign="top"><img src="<?php echo get_template_directory_uri(); ?>/images/horizontaldotline.gif" border="0" width="125" height="1">
