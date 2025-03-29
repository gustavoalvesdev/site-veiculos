<?php 

class Veiculo {


    public function listar() {
        global $conn;

        $veiculos = [];

        $sql = "SELECT * FROM veiculos";
        $sql = $conn->query($sql);

        if ($sql->rowCount() > 0) {
            $veiculos = $sql->fetchAll();
        }

        return $veiculos;
    }

    public function obter($id) {

        global $conn;

        $veiculo = [];

        $sql = "SELECT * FROM veiculos WHERE id = :id LIMIT 1";
        $sql = $conn->prepare($sql);
        $sql->bindValue(':id', $id);

        $sql->execute();

        if ($sql->rowCount() > 0) {
            $veiculo = $sql->fetch();
        }

        return $veiculo;
    }
 
}
