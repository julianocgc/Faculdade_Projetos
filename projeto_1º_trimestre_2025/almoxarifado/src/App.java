public class App {
    public static void main(String[] args) {
        
        // instância do objeto Produto
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

        // instância do objeto Produto
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

        // instância do objeto Tecnico
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

        // instância do objeto Tecnico
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

        // instância do objeto Cliente
        Cliente c1 = new Cliente();
        c1.id_cliente = 1;
        c1.nome_cliente = "João";
        c1.cpf_cliente = "123456789";
        c1.endereco_cliente = "Rua 1, Nº 1";
        c1.cidade_cliente = "São Paulo";
        c1.estado_cliente = "SP";
        c1.telefone_cliente = "1234567890";
        c1.email_cliente = "joao@email.com";
        c1.equipamento = "ONU";
        c1.observacoes = "Observação do cliente";

        // instância do objeto Cliente
        Cliente c2 = new Cliente();
        c2.id_cliente = 2;
        c2.nome_cliente = "João";
        c2.cpf_cliente = "123456789";
        c2.endereco_cliente = "Rua 2, Nº 2";
        c2.cidade_cliente = "São Paulo";
        c2.estado_cliente = "SP";
        c2.telefone_cliente = "1234567890";
        c2.email_cliente = "joao@email.com";
        c2.equipamento = "ONU";
        c2.observacoes = "Observação do cliente";

        // instância do objeto OrdemDeServico
        OrdemDeServico os1 = new OrdemDeServico();
        os1.id_os = 1;
        os1.nome_cliente = "João";
        os1.endereco_cliente = "Rua 1, Nº 1";
        os1.servico_cliente = "Instalação de ONU";
        os1.equipamentos_cliente = "ONU";
        os1.nome_tecnico = "Carlos";
        os1.observacoes = "Observação do técnico";

        // instância do objeto OrdemDeServico
        OrdemDeServico os2 = new OrdemDeServico();
        os2.id_os = 2;
        os2.nome_cliente = "João";
        os2.endereco_cliente = "Rua 1, Nº 1";
        os2.servico_cliente = "Instalação de ONU";
        os2.equipamentos_cliente = "ONU";
        os2.nome_tecnico = "Carlos";
        os2.observacoes = "Observação do técnico";

        // fazer uso do comportamento do objeto Produto
        p1.exibirInfoProd();
        p1.imprimirLinhaPontilhada();
        p2.exibirInfoProd();
        p2.imprimirLinhaPontilhada();

        // fazer uso do comportamento do objeto Tecnico
        t1.exibirInfoTec();
        t1.imprimirLinhaX();
        t2.exibirInfoTec();
        t2.imprimirLinhaX();

        // fazer uso do comportamento do objeto Cliente
        c1.exibirInfoCli();
        c1.imprimirLinhaIgual();
        c2.exibirInfoCli();
        c2.imprimirLinhaIgual();

        // fazer uso do comportamento do objeto OrdemDeServico
        os1.exibirInfoOS();
        os1.imprimirLinhaHashTag();
        os2.exibirInfoOS();
        os2.imprimirLinhaHashTag();

        //System.out.println("Produto 1: " + p1.nome + " R$" + p1.preco);
        //System.out.println("Produto 2: " + p2.nome + " R$" + p2.preco);

    }
}

