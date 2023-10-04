<?php
    class Clientes extends CI_Controller{
      public function __construct(){
        parent::__construct();
        //MODELO CLIENTE
        $this->load->model("cliente");
        $this->load->model("pais");
        //validando si alguien esta conectado
        if ($this->session->userdata('c0nectadoUTC')) {
          //SI ESTA CONECTADO
          // code...
        } else {
          redirect('seguridades/formularioLogin');
        }

      }
      public function index(){
        $data["listadoClientes"]=$this->cliente->consultarTodos();
         $this->load->view("header");
         $this->load->view("clientes/index",$data);
         $this->load->view("footer");

      }
      public function nuevo(){
        $data ['listadoPaises']=$this->pais->consultarTodos();
        $this->load->view("header");
        $this->load->view("clientes/nuevo",$data);
        $this->load->view("footer");
      }

      public function editar($id_cli){
        $data ['listadoPaises']=$this->pais->consultarTodos();
        $data['cliente']=$this->cliente->consultarPorId($id_cli);
        $this->load->view("header");
        $this->load->view("clientes/editar",$data);
        $this->load->view("footer");
      }
//para actualizar ahorita clase del jueves

public function procesarActualizacion(){
$id_cli = $this->input->post("id_cli");
$datosClienteEditado=array(


      "apellido_cli" => $this->input->post("apellido_cli"),
      "nombre_cli" => $this->input->post("nombre_cli"),
      "telefono_cli" => $this->input->post("telefono_cli"),
      "direccion_cli" => $this->input->post("direccion_cli"),
      "referencia_cli" => $this->input->post("referencia_cli"),
      "hora_cli" => $this->input->post("hora_cli"),
      "porciones_cli" => $this->input->post("porciones_cli"),
      "email_cli" => $this->input->post("email_cli"),
      "observaciones_cli" => $this->input->post("observaciones_cli"),

      "estado_cli" => $this->input->post("estado_cli"),
      "fk_id_pais" => $this->input->post("fk_id_pais")
    );




//logica de negocio necesarioa para subir la fotografia del cliente

$this->load->library('upload');//carga de la libreria de subida de archivos
$nombreTemporal='foto_cliente_'.time().'_'.rand(1,500);//generar nombre aleatorio
$config['file_name']=$nombreTemporal; //te,poral
$config['upload_path']=APPPATH.'../uploads/clientes/'; //ruta de la subida de los archivos
$config['allowed_types']='jpeg|jpg|png';//tipo de datos permitidos
$config['max_size']=4*1024;//configurar el peso maximo de los archivos
$this->upload->initialize($config);//inicializar la configuracion
//instruccion para que se valide la subida del archivos
if($this->upload->do_upload('foto_cli')){
  //FUNCION PARA QUE SE ME ACTUALICE LA FOTO CUANDO PONGO UNA NUEVA FOTO
$query =$this->cliente->obtenerPorId($id_cli);
unlink(APPPATH.'../uploads/clientes/'.$query->foto_cli);


$dataSubida=$this->upload->data();
$datosClienteEditado['foto_cli']=$dataSubida['file_name'];

}

if ($this->cliente->actualizar($id_cli,$datosClienteEditado)) {

            //Pongan esto para que al momento de editar salga el mensaje flash
            $this->session->set_flashdata('confirmacion','CLIENTE EDITADO EXITOSAMENTE');
          } else {
            $this->session->set_flashdata('error','Error al procesar, intente nuevamente');
          }
          redirect("clientes/index");
          }

//guardar cliente en el controlador clientes - agregar un
//dato en el controlador para que se guarde los archivos
      public function guardarCliente(){
        $datosNuevoCliente=array(

          "apellido_cli"=>$this->input->post("apellido_cli"),
          "nombre_cli"=>$this->input->post("nombre_cli"),
          "telefono_cli"=>$this->input->post("telefono_cli"),
          "direccion_cli"=>$this->input->post("direccion_cli"),
          "referencia_cli" => $this->input->post("referencia_cli"),
          "hora_cli" => $this->input->post("hora_cli"),
      "porciones_cli" => $this->input->post("porciones_cli"),
          "email_cli"=>$this->input->post("email_cli"),
      "observaciones_cli" => $this->input->post("observaciones_cli"),

          "estado_cli"=>$this->input->post("estado_cli"),
          "fk_id_pais"=>$this->input->post("fk_id_pais")
        );

        if($this->cliente->insertar($datosNuevoCliente)){
          //echo "INSERCION EXITOSA";
          //crear sesion flash
          $this->session->set_flashdata('confirmacion','Cliente insertado exitosamente');
        }else{
          $this->session->set_flashdata('error','Error al procesar, intente nuevamente');
        }
        redirect("clientes/index");
      }

      public function procesarEliminacion($id_cli){

        $data['cliente']=$this->cliente->obtenerPorId($id_cli);
        $id_img= $data['cliente']->foto_cli;
        unlink(  APPPATH.'../uploads/clientes/'.$id_img);
    if ($this->cliente->eliminar($id_cli, $datosClienteEditado)) {

      //Pongan esto para que al momento de editar salga el mensaje flash
      $this->session->set_flashdata('confirmacion', 'CLIENTE ELIMINADO EXITOSAMENTE');
    } else {
      $this->session->set_flashdata('error', 'Error al procesar, intente nuevamente');
    }
    redirect("clientes/index");
      }

            
    }//cierre de la clase


 ?>
