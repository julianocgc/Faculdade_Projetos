public class Produto { // criação da classe
    
    int codigo; // atributo da classe
    String equipamento; // atributo da classe
    String marca; // atributo da classe
    String modelo; // atributo da classe
    String patrimonio; // atributo da classe
    String endereco_mac; // atributo da classe
    String numero_de_serie; // atributo da classe
    boolean ativo; // atributo da classe
    String localizacao; // atributo da classe
    int estoque; // atributo da classe
    String observacoes; // atributo da classe

    // métodos (comportamentos)
    void exibirDetalhes(){
        System.out.println("Código: " + codigo);
        System.out.println("Equipamento: " + equipamento);
        System.out.println("Marca: " + marca);
        System.out.println("Modelo: " + modelo);
        System.out.println("Patrimônio: " + patrimonio);
        System.out.println("Endereço MAC: " + endereco_mac);
        System.out.println("Número de Série: " + numero_de_serie);
        System.out.println("Ativo: " + ativo);
        System.out.println("Localização: " + localizacao);
        System.out.println("Estoque: " + estoque);
        System.out.println("Observações: " + observacoes);
    }

    void imprimir(){
        System.out.println("------------------------------------------------------------");
    }

}