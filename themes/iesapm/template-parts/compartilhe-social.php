<?php
/**
 * Componente para compartilhar post em rede social (plugin AddToAny Share Buttons)
 */

?>

<p class="fw-bold small">Compartilhe</p>
<?php // Compartilhamento redes sociais (plugin addtoany)
if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
