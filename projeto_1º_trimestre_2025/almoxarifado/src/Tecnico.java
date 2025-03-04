public class Tecnico { // criação da classe Tecnico

    int id_tecnico; // atributo da classe
    String nome_tecnico; // atributo da classe
    String cpf_tecnico; // atributo da classe
    String endereco_tecnico; // atributo da classe
    String telefone_tecnico; // atributo da classe
    String email_tecnico; // atributo da classe
    String funcao_tecnico; // atributo da classe
    String equipamentos; // atributo da classe
    String observacoes; // atributo da classe
    
    // métodos (comportamentos)
    void exibirInfoTec(){
        System.out.println("ID do Técnico: " + id_tecnico);
        System.out.println("Nome do Técnico: " + nome_tecnico);
        System.out.println("CPF do Técnico: " + cpf_tecnico);
        System.out.println("Endereço do Técnico: " + endereco_tecnico);
        System.out.println("Telefone do Técnico: " + telefone_tecnico);
        System.out.println("E-mail do Técnico: " + email_tecnico);
        System.out.println("Função do Técnico: " + funcao_tecnico);
        System.out.println("Equipamentos: " + equipamentos);
        System.out.println("Observações: " + observacoes);
    }

    void imprimirLinhaX(){
        System.out.println("xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx");
    }

}