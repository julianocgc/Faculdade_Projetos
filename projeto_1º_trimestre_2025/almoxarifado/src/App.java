public class App {
    public static void main(String[] args) {
        
        // Instância do objeto
        Produto p1 = new Produto();
        p1.codigo = 1;
        p1.equipamento = "ONU";
        p1.marca = "FiberHome";
        p1.modelo = "HG5855SW";
        p1.patrimonio = "12345";
        p1.endereco_mac = "00:11:22:33:44:55";
        p1.numero_de_serie = "123456789";
        p1.ativo = true;
        p1.localizacao = "Sala 1";
        p1.estoque = 10;
        p1.observacoes = "Observação do produto";

        // Instância do objeto
        Produto p2 = new Produto();
        p2.codigo = 2;
        p2.equipamento = "ONU";
        p2.marca = "FiberHome";
        p2.modelo = "HG6143D3";
        p2.patrimonio = "12345";
        p2.endereco_mac = "00:11:22:33:44:55";
        p2.numero_de_serie = "123456789";
        p2.ativo = true;
        p2.localizacao = "Sala 1";
        p2.estoque = 10;
        p2.observacoes = "Observação do produto";

        // fazer uso do comportamento do objeto
        p1.exibirDetalhes();
        p1.imprimir();
        p2.exibirDetalhes();
        p2.imprimir();

        //System.out.println("Produto 1: " + p1.nome + " R$" + p1.preco);
        //System.out.println("Produto 2: " + p2.nome + " R$" + p2.preco);

    }
}

