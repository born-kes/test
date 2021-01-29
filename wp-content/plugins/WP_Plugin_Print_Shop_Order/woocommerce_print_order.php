<?php

add_action( 'admin_footer', 'addBoxToPrintDate' );
function addBoxToPrintDate() {
    $textShow = 'Wersja do Druku';
    $textClose = 'Zamknij Podgląd Wydruku';

    echo '<a class="button getDataToPrintByKES hidden order-status status-on-hold status-processing" href="#" >'.$textShow.'</a>';
    echo '<button class="closePrintByKES modal-close modal-close-link dashicons dashicons-no-alt" title="'.$textClose.'">
								<span class="screen-reader-text">'.$textClose.'</span>
							</button>';
    echo '<div id="PrintBoxKes"></div>';
}

