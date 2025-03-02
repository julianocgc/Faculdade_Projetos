public class App {
    public static void main(String[] args) {
        
        // Instância do objeto Produto
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

        // Instância do objeto Produto
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

        // Instancia do objeto Tecnico
        Tecnico t1 = new Tecnico();
        t1.id_tecnico = 1;
        t1.nome_tecnico = "João";
        t1.cpf_tecnico = "123456789";
        t1.endereco_tecnico = "Rua 1, Nº 1";
        t1.telefone_tecnico = "1234567890";
        t1.email_tecnico = "joao@email.com";
        t1.funcao_tecnico = "Técnico de Suporte";
        t1.equipamentos = "teste";
        t1.observacoes = "Observação do técnico";

        // Instancia do objeto Tecnico
        Tecnico t2 = new Tecnico();
        t2.id_tecnico = 2;
        t2.nome_tecnico = "Carlos";
        t2.cpf_tecnico = "987654321";
        t2.endereco_tecnico = "Rua 2, Nº 2";
        t2.telefone_tecnico = "0123456789";
        t2.email_tecnico = "carlos@email.com";
        t2.funcao_tecnico = "Técnico de Infra";
        t2.equipamentos = "teste";
        t2.observacoes = "Observação do técnico";

        // fazer uso do comportamento do objeto Produto
        p1.exibirDetalhes();
        p1.imprimir();
        p2.exibirDetalhes();
        p2.imprimir();

        // fazer uso do comportamento do objeto Tecnico
        t1.exibirInformacoes();
        t1.separador();
        t2.exibirInformacoes();
        t2.separador();


        //System.out.println("Produto 1: " + p1.nome + " R$" + p1.preco);
        //System.out.println("Produto 2: " + p2.nome + " R$" + p2.preco);

    }
}

