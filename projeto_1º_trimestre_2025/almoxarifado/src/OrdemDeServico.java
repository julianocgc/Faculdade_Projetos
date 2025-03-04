public class OrdemDeServico { // criação da classe OrdemDeServico

    int id_os; // atributo da classe
    String nome_cliente; // atributo da classe
    String endereco_cliente; // atributo da classe
    String servico_cliente; // atributo da classe
    String equipamentos_cliente; // atributo da classe
    String nome_tecnico; // atributo da classe
    String observacoes; // atributo da classe

    // métodos (comportamentos)
    void exibirInfoOS(){
        System.out.println("ID da OS: " + id_os);
        System.out.println("Nome do Cliente: " + nome_cliente);
        System.out.println("Endereço do Cliente: " + endereco_cliente);
        System.out.println("Serviço do Cliente: " + servico_cliente);
        System.out.println("Equipamentos do Cliente: " + equipamentos_cliente);
        System.out.println("Nome do Técnico: " + nome_tecnico);
        System.out.println("Observações: " + observacoes);
    }

    void imprimirLinhaHashTag(){
        System.out.println("##################################################");
    }
}
