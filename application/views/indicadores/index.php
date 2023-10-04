<?php
//aplicar
$ci=&get_instance();//instancia
$ci->load->model("cliente");
$totalClientesActivos=0;
$totalClientesInactivos=0;
$totalClientes=0;

$clientesActivos=$ci->cliente->obtenerClientesPorEstado("DISPONIBLE");
$clientesInactivos=$ci->cliente->obtenerClientesPorEstado("NO DISPONIBLE");
if ($clientesActivos) {
  $totalClientesActivos=sizeof($clientesActivos->result());
}
if ($clientesInactivos) {
  $totalClientesInactivos=sizeof($clientesInactivos->result());
}
$totalClientes=$totalClientesActivos+$totalClientesInactivos;
echo "CLIENTES DISPONIBLES: ".$totalClientesActivos. "<br>";
echo "CLIENTES NO DISPONIBLES: ".$totalClientesInactivos."<br>";
echo "TOTAL CLIENTES: ".$totalClientes."<br>";
 ?>
