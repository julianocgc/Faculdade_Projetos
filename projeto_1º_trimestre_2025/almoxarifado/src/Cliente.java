public class Cliente { // criação da classe Cliente

    int id_cliente; // atributo da classe
    String nome_cliente; // atributo da classe
    String cpf_cliente; // atributo da classe
    String endereco_cliente; // atributo da classe
    String cidade_cliente; // atributo da classe
    String estado_cliente; // atributo da classe
    String telefone_cliente; // atributo da classe
    String email_cliente; // atributo da classe
    String equipamento; // atributo da classe
    String observacoes; // atributo da classe
    
    // métodos (comportamentos)
    void exibirInfoCli(){
        System.out.println("ID do Cliente: " + id_cliente);
        System.out.println("Nome do Cliente: " + nome_cliente);
        System.out.println("CPF do Cliente: " + cpf_cliente);
        System.out.println("Endereço do Cliente: " + endereco_cliente);
        System.out.println("Cidade do Cliente: " + cidade_cliente);
        System.out.println("Estado do Cliente: " + estado_cliente);
        System.out.println("Telefone do Cliente: " + telefone_cliente);
        System.out.println("E-mail do Cliente: " + email_cliente);
        System.out.println("Equipamentos: " + equipamento);
        System.out.println("Observações: " + observacoes);
    }

    void imprimirLinhaIgual(){
        System.out.println("==================================================");
    }

}
