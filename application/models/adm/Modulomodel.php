<?php

class ModuloModel extends CI_Model{
    
    var $tabela = 'MODULO';
    
    function DadosMenu() {
        
        $select = 'm.MOD_ID as idModulo, m.MOD_NOME as nomeModulo, m.MOD_ICONE as iconeModulo,';
        $select .= 'GROUP_CONCAT(f.FUN_NOME) as nomesFuncionalidades,';
        $select .= 'GROUP_CONCAT(f.FUN_URL) as urlsFuncionalidades,';
        $select .= 'GROUP_CONCAT(f.FUN_ICONE) as iconesFuncionalidades';
        
        $this->db->select($select);
        
        $this->db->from($this->tabela . ' as m');
        
        $this->db->join('FUNCIONALIDADE as f', 'f.FUN_MOD_ID = m.MOD_ID');
        $this->db->join('FUNCIONALIDADE_GRUPO as fg', 'f.FUN_ID = fg.FUN_ID');
        
        $this->db->where('FUN_ATIVO', 1);
        
        $gruposId = $this->config->item('gruposId');
        $this->db->where('fg.GRU_ID', $gruposId['adm']);
        
        $this->db->group_by('m.MOD_ID');
        
        $consulta = $this->db->get();
        
        if($consulta->num_rows()) {
            
            $retorno = array();
            
            $resultado = $consulta->result();
            
            foreach ($resultado as $modulo) {
                
                $dadosModulo = array(
                    'idModulo'        => $modulo->idModulo,
                    'nomeModulo'      => $modulo->nomeModulo,
                    'iconeModulo'     => $modulo->iconeModulo,
                    'funcionalidades' => array()
                );
                
                $dadosFuncionalidades  = array();
                $nomesFuncionalidades  = explode(',', $modulo->nomesFuncionalidades);
                $urlsFuncionalidades   = explode(',', $modulo->urlsFuncionalidades);
                
                foreach ($nomesFuncionalidades as $key => $value) {
                    
                    $dadosFuncionalidade = array();
                    $dadosFuncionalidade['nome']  = $value;
                    $dadosFuncionalidade['url']   = (isset($urlsFuncionalidades[$key])) ? $urlsFuncionalidades[$key] : '';
                    
                    $dadosModulo['funcionalidades'][] = $dadosFuncionalidade;
                }
                
                $retorno[] = $dadosModulo;
            }
            
            return $retorno;
        }
        else {
            
            return array();
        }
    }
}