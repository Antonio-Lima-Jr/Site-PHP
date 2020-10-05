<?php

namespace Source\Support;

class DateFormat 
 {
    static public function beautDate( $data ):string
 {
        $ano = substr( $data, 0, 4 );
        $mes = substr( $data, 5, 2 );
        $dia = substr( $data, 8, 2 );
        $dia = self::diaFormat( $dia );
        $mes = self::mesFormat( $mes );
        return "{$dia}th {$mes} de {$ano}";
    }

    public function mesFormat( $mes ):string
 {
        switch ( $mes ) {
            case 1:
            return 'Janeiro';
            break;

            case 2:
            return 'Fevereiro';
            break;

            case 3 :
            return 'Março';
            break;

            case 4:
            return 'Abril';
            break;

            case 5:
            return 'Maio';
            break;

            case 6:
            return 'Junho';
            break;

            case '7':
            return 'Julho';
            break;

            case 8:
            return 'Agosto';
            break;

            case 9:
            return 'Setembro';
            break;

            case 10:
            return 'Outubro';
            break;

            case 11:
            return 'Novembro';
            break;

            case 12:
            return 'Dezembro';
            break;

        }
    }

    public function diaFormat( $dia ):string
 {
        if ( substr( $dia, 0, 1 ) == 0 ) {
            return $dia = substr( $dia, 1, 1 );
        } else {
            return $dia;
        }
    }
}