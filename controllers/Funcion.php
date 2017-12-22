<?php
namespace app\controllers;
use Yii;
	/**
	 * @class Funcion 
	 * @author Erick Araque
	 * @since 31/10/2016
	 * @description erick debe agregarle a descripcion
	 */
	class Funcion
	{
		
		
		/**
		 * @method _new
		 * @param {string} $str
		 * @author Brayan Ochoa
		 * @return string
		 */
		 
			
		public	function calculaedad($fechanacimiento)
		{
                     $ts   = strtotime($fechanacimiento);
                     $a = date("Y-m-d", $ts);
                      list($ano,$mes,$dia) = explode("-",$a);

                      $ano_diferencia  = date("Y") - $ano;
                      $mes_diferencia = date("m") - $mes;
                      $dia_diferencia   = date("d") - $dia;
                      if ($dia_diferencia < 0 || $mes_diferencia < 0)
                          $ano_diferencia--;
                      return $ano_diferencia;
        }

        public function fechas($start, $end) {
        	$range = array();
        
        	if (is_string($start) === true) $start = strtotime($start);
        	if (is_string($end) === true ) $end = strtotime($end);
        
        	if ($start > $end) return createDateRangeArray($end, $start);
        
        	do {
        		$range[date('Y-m-d', $start)] = date('Y-m-d', $start);
        		$start = strtotime("+ 1 day", $start);
        	} while($start <= $end);
        
        	return $range;
        }
			
		
		
		
	}

?>