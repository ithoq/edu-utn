<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of planestudio_model
 *
 * @author gsiman
 */
class planestudio_model  extends CI_Model{
    //put your code here
    function get_materias_plan($plan=""){
        $this->db->select('materia.id, materia.nombre');
        $this->db->from('plandeestudio');
        $this->db->join('planestudio_materia','plandeestudio.id = planestudio_materia.planestudio','left outer');
        $this->db->join('materia','materia.id = planestudio_materia.materia','left outer');
        if($plan) $this->db->where('plandeestudio.id',$plan);
        
        $query = $this->db->get();
        $data = $query->result_array();
        
        return $data;
    }
}

?>
