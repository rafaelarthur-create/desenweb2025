<?php 

    function definirCorNota(int $i): string {
        if ($i >= 0 && $i <= 3) {
            return 'btn-vermelho';
        } elseif ($i >= 4 && $i <= 7) {
            return 'btn-amarelo';
        } elseif ($i >= 8 && $i <= 10) {
            return 'btn-verde';
        } else {
            return '';
        }
    }

?>