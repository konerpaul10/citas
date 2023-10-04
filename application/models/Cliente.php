<?php
 class Cliente extends CI_Model{
  public function __construct(){
   parent::__construct();
}
//funncion para insertar datos
public function insertar($datos){
  return $this->db -> insert("cliente",$datos);
}
//funcion para actualizar deley
public function actualizar($id_cli,$datos){
  $this->db->where('id_cli',$id_cli);
  return $this->db->update('cliente',$datos);
}
//funcion para marcar el detalle de un cliente
public function consultarPorId($id_cli){
  $this->db->where('id_cli',$id_cli);
  $this->db->join('pais','pais.id_pais=cliente.fk_id_pais');
  $cliente=$this->db->get("cliente");
  if ($cliente->num_rows()>0){
    //cuando hay clientes
    return $cliente->row();
  }else{
    //cuando no hay clientes
    return false;

  }
 }




//funcion consultar todos los clientes
public function consultarTodos(){
  $this->db->join('pais','pais.id_pais=cliente.fk_id_pais');
  $listadoClientes=$this->db ->get("cliente");
  if ($listadoClientes->num_rows()>0){
    //cuando hay clientes
    return $listadoClientes;
  }else{
    //cuando no hay clientes
    return false;

  }
 }

//eliminar cliente
 public function eliminar($id_cli){
   $this->db->where("id_cli",$id_cli);
   return $this->db->delete("cliente");

 }

 public function obtenerPorId($id_cli){
   $this->db->where('id_cli',$id_cli);
   $query= $this->db->get('cliente');
   if ($query->num_rows()>0) {
     // code...
     return $query->row();
   } else {
     return false;
   }
 }

 public function obtenerClientesPorEstado($estado){
   $this->db->where("estado_cli",$estado);
   $clientes=$this->db->get("cliente");
   if($clientes->num_rows()>0){
     return $clientes;
   }else{
     return false;
   }
 }


}

 ?>
