public class App {
    public static void main(String[] args) {
        
        // instância do objeto Produto
        Produto p1 = new Produto();
        p1.codigo = 1;
        p1.equipamento = "ONU";
        p1.marca = "FiberHome";
        p1.modelo = "HG5855SW";
        p1.patrimonio = "34385";
        p1.endereco_mac = "B0:1D:A2:F3:4D:5E";
        p1.numero_de_serie = "5487963285";
        p1.ativo = true;
        p1.localizacao = "Almoxarifado Poços";
        p1.estoque = 40;
        p1.observacoes = "Contém 5 caixas com 20 cada";

        // instância do objeto Produto
        Produto p2 = new Produto();
        p2.codigo = 2;
        p2.equipamento = "ONU";
        p2.marca = "ZTE";
        p2.modelo = "F670L GPON Dual Band APC";
        p2.patrimonio = "38450";
        p2.endereco_mac = "0D:B1:2E:A3:4F:5C";
        p2.numero_de_serie = "5862139785";
        p2.ativo = true;
        p2.localizacao = "Almoxarifado Andradas";
        p2.estoque = 35;
        p2.observacoes = "Ainda tem 3 caixas com 5 unidades";

        // instância do objeto Tecnico
        Tecnico t1 = new Tecnico();
        t1.id_tecnico = 1;
        t1.nome_tecnico = "João Marcelo de Almeida";
        t1.cpf_tecnico = "98754752368";
        t1.endereco_tecnico = "Rua Assis Figueiredo, Nº 1287";
        t1.telefone_tecnico = "35998754863";
        t1.email_tecnico = "joaomarcelo@email.com";
        t1.funcao_tecnico = "Técnico de Instalação";
        t1.equipamentos = "ONU FiberHome 2 portas";
        t1.observacoes = "Conferir estoque";

        // instância do objeto Tecnico
        Tecnico t2 = new Tecnico();
        t2.id_tecnico = 2;
        t2.nome_tecnico = "Carlos Alberto da Silva";
        t2.cpf_tecnico = "87526984512";
        t2.endereco_tecnico = "Rua Alagoas, Nº 3652";
        t2.telefone_tecnico = "19985743689";
        t2.email_tecnico = "carlosalberto@email.com";
        t2.funcao_tecnico = "Técnico de Infra";
        t2.equipamentos = "ONU ZTE 4 portas";
        t2.observacoes = "Pedir materiais";

        // instância do objeto Cliente
        Cliente c1 = new Cliente();
        c1.id_cliente = 1;
        c1.nome_cliente = "Fábio dos Santos";
        c1.cpf_cliente = "07852936749";
        c1.endereco_cliente = "Rua Perú, Nº 1542";
        c1.cidade_cliente = "Poços de Caldas";
        c1.estado_cliente = "MG";
        c1.telefone_cliente = "19985637842";
        c1.email_cliente = "fabiosantos@email.com";
        c1.data_nasc_cliente = "25/07/1987";
        c1.observacoes = "Cliente com problema de conexão";

        // instância do objeto Cliente
        Cliente c2 = new Cliente();
        c2.id_cliente = 2;
        c2.nome_cliente = "Eduarda Serafim";
        c2.cpf_cliente = "84736594231";
        c2.endereco_cliente = "Rua Ceará, Nº 3592";
        c2.cidade_cliente = "Andradas";
        c2.estado_cliente = "MG";
        c2.telefone_cliente = "35998758365";
        c2.email_cliente = "dudaserafim@email.com";
        c2.data_nasc_cliente = "19/03/2005";
        c2.observacoes = "Cliente com pagamento em atraso";

        // instância do objeto OrdemDeServico
        OrdemDeServico os1 = new OrdemDeServico();
        os1.id_os = 1;
        os1.nome_cliente = "Camila Pedroso";
        os1.endereco_cliente = "Rua Amapá, Nº 1493";
        os1.servico_cliente = "Instalação de ONU";
        os1.equipamentos_cliente = "ONU ZTE 4 portas";
        os1.nome_tecnico = "João Marcelo de Almeida";
        os1.observacoes = "Levar cabo drop";

        // instância do objeto OrdemDeServico
        OrdemDeServico os2 = new OrdemDeServico();
        os2.id_os = 2;
        os2.nome_cliente = "Vitor Guimarães Santos";
        os2.endereco_cliente = "Rua Canadá, Nº 3901";
        os2.servico_cliente = "Instalação de ONU";
        os2.equipamentos_cliente = "ONU FiberHome 2 portas";
        os2.nome_tecnico = "Carlos Alberto da Silva";
        os2.observacoes = "Mudar ponto de instalação";

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