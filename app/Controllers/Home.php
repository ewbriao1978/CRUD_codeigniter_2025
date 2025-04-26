<?php

namespace App\Controllers;
use App\Models\ClientesModel;
class Home extends BaseController
{
    public function index(): string
    {
        return view('formulario');
    }

    public function listarDados(){
        $clientesModel = new ClientesModel();
        $dados['clientes'] = $clientesModel->findAll();
        return view('lista_dados',$dados);
    }

    public function inserirDados(){
        $clientesModel = new ClientesModel();
        $nome = $this->request->getPost('nome');
        $endereco = $this->request->getPost('endereco');
        $email = $this->request->getPost('email');
        $data = [
            'nome' => $nome,
            'endereco' => $endereco,
            'email' => $email,
        ];
        if ($clientesModel->save($data)){
            return redirect()->to('/listar_dados')->with('success', 'Dados inseridos com sucesso!');
        }else{
            return redirect()->to('/')->with('errors', $clientesModel->errors());
        }
        //return view('lista_dados', $data);
    }

    public function excluir($id){
        $clientesModel = new ClientesModel();
        $clientesModel->delete($id);
        return redirect()->to('/listar_dados')->with('success', 'Dados excluídos com sucesso!');
    }

    public function editar($id){
        $clientesModel = new ClientesModel();
        $dados['cliente'] = $clientesModel->find($id);
        //select * from clientes where id = $id

        return view('editar_dados', $dados);
    }

    public function atualizar($id){
        $clientesModel = new ClientesModel();
        $nome = $this->request->getPost('nome');
        $endereco = $this->request->getPost('endereco');
        $email = $this->request->getPost('email');
        $data = [
            'nome' => $nome,
            'endereco' => $endereco,
            'email' => $email,
        ];
        if ($clientesModel->update($id, $data)){
            return redirect()->to('/listar_dados')->with('success', 'Dados atualizados com sucesso!');
        }else{
            return redirect()->to('/')->with('errors', $clientesModel->errors());
        }
    }

}
