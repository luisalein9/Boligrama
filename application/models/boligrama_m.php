<?php

    class Boligrama_m extends CI_Model {

        function __construct(){
            
            parent::__construct();
            
            $this->load->database();
        
        }           


    function traer_boligrama_m($matricula){

            $this->db->select('licenciaturas_idlicenciaturas');
            $this->db->from('alumnos');
            $this->db->where('matricula',$matricula);

            $resultado = $this->db->get();

            foreach ($resultado->result_array() as $value) {
                $value;
            }

            $licenciatura=$value['licenciaturas_idlicenciaturas'];

            if (isset($licenciatura)) {
            $this->db->select('ueas_idueas,trimestre');
            $this->db->from('ueas_licenciaturas');
            $this->db->where('licenciaturas_idlicenciaturas',$licenciatura);

            $UEAS = $this->db->get();

            foreach ($UEAS->result_array() as $index => $row) {
                $datos['ueasRelacionadas'][$index+1]=$row;

                foreach ($datos['ueasRelacionadas'] as  $value) {

                    if (isset($value['ueas_idueas'])) {

                        $this->db->select('nombre,division,creditos,estado');
                        $this->db->from('ueas');
                        $this->db->where('idueas',$value['ueas_idueas']);

                        $datosUeas= $this->db->get();

                        foreach ($datosUeas->result_array() as  $row2) {
                            $datos['ueasRelacionadas'][$index+1]=$row+$row2;

                            $this->db->select('uea_seriada');
                            $this->db->from('seriacion');
                            $this->db->where('ueas_idueas',$value['ueas_idueas']);

                            $seriacion= $this->db->get();

                            $this->db->select('ueas_idueas');
                            $this->db->from('seriacion');
                            $this->db->where('uea_seriada',$value['ueas_idueas']);

                            $anterior= $this->db->get();

                            foreach ($anterior->result_array() as $index3 => $row4) {
                                //echo"<pre>"; print_r($row3['ueas_idueas']); echo"</pre>";
                                $datos['ueasRelacionadas'][$index+1]['seriacion_ant'][$index3+1]=$row4['ueas_idueas'];
                            }
                            foreach ($seriacion->result_array() as $index2 => $row3) {
                            //echo"<pre>"; print_r($row3); echo"</pre>";
                                $datos['ueasRelacionadas'][$index+1]['seriacion_sgte'][$index2+1]=$row3['uea_seriada'];
                            }

                        }
                    }
                }

            }

            }


            return $datos;

    }

    function traer_anterior($UEAsgt){

        $this->db->select('ueas_idueas');
        $this->db->from('seriacion');
        $this->db->where('uea_seriada',$UEAsgt);

        $anterior= $this->db->get();

        foreach ($anterior->result_array() as $index2 => $row3) {
            //echo"<pre>"; print_r($row3['ueas_idueas']); echo"</pre>";
            $datos['ueasAnteriores'][$index2+1]=$row3['ueas_idueas'];
        }

        return $datos;
    }
}


?>