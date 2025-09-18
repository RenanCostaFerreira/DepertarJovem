<?php
class PessoaModel {
    private PDO $pdo;
    public function __construct(PDO $pdo) { $this->pdo = $pdo; }

    public function create(string $nome, string $cpf, ?string $telefone): bool {
        $sql = "INSERT INTO Pessoa (nome_pes, cpf_pes, telefone_pes)
                VALUES (:nome, :cpf, :tel)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':nome' => $nome,
            ':cpf'  => $cpf,
            ':tel'  => $telefone
        ]);
    }

    // se precisar listar:
    public function listAll(): array {
        $stmt = $this->pdo->query("SELECT id_Pessoa, nome_pes, cpf_pes, telefone_pes FROM Pessoa");
        return $stmt->fetchAll();
    }
}
