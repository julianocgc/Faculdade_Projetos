from time import sleep
# menu principal
print(" ")
print("_________________________________________________________________________________________________________________________")
print("|                                                                                                                       |")
print("|                                    SISTEMA DE MONITORAMENTO DE PORTÃO ELETRÔNICO                                      |")
print("|                                                                                                                       |")
print("|_______________________________________________________________________________________________________________________|")
print("|                                                                                                                       |")
print("|                                                   MENU DE OPÇÕES                                                      |")
print("|                                                                                                                       |")
print("|                                                1- Ver estado do portão                                                |")
print("|                                                2- Abrir o portão                                                      |")
print("|                                                3- Fechar o portão                                                     |")
print("|                                                4- Acessar as câmeras                                                  |")
print("|                                                5- Acionar a Polícia                                                   |")
print("|                                                6- Alterar horário de abertura/fechamento                              |")
print("|                                                7- Cadastrar placas de veículos                                        |")
print("|                                                8- Sair do sistema                                                     |")
print("|_______________________________________________________________________________________________________________________|")
print(" ")
# programação
resp = int(input("                                  Escolha uma opção: "))
print(" ")
print("_________________________________________________________________________________________________________________________")
print(" ")
if resp == 1:
    print("Neste momento o portão está ABERTO ou FECHADO?")
    print(" ")
    print("CONSULTANDO MONITORAMENTO...")
    for cont in range(10, -1, -1):
        print(cont, end=' ')
        sleep(1)
    print(" ")
    print('CONSULTA CONCLUIDA!')
    print(" ")
    print("ACESSANDO SENSORES...")
    for cont in range(10, -1, -1):
        print(cont, end=' ')
        sleep(1)
    print(" ")
    print('Neste momento o portão está FECHADO!')
elif resp == 2:
    print("O portão está sendo ABERTO!")
    for cont in range(10, -1, -1):
        print(cont, end=' ')
        sleep(1)
    print(" ")
    print("A abertura do portão foi concluida!")
elif resp == 3:
    print("O portão está sendo FECHADO!")
    for cont in range(10, -1, -1):
        print(cont, end=' ')
        sleep(1)
    print(" ")
    print("O fechamento do portão foi concluido!")
elif resp == 4:
    print("O sistema está ACESSANDO AS CÂMERAS!")
    for cont in range(10, -1, -1):
        print(cont, end=' ')
        sleep(1)
    print(" ")
    print("NENHUMA APROXIMAÇÃO SUSPEITA DETECTADA...")
elif resp == 5:
    print("ENVIANDO ALERTA PARA A POLÍCIA!")
    for cont in range(10, -1, -1):
        print(cont, end=' ')
        sleep(1)
    print(" ")
    print("O ALERTA FOI ENVIADO E UMA VIATURA ESTÁ VINDO PARA O LOCAL!!! ")
elif resp == 6:
    print("Alterar horário de abertura/fechamento do portão.")
    horario_aberto = input('Digite o novo horário de abertura: ')
    horario_fechado = input('Digite o novo horário de fechamento: ')
    print(" ")
    print("O novo horário de abertura é ", horario_aberto)
    print("O novo horário de fechamento é ", horario_fechado)
    print("O novo horário foi definido com sucesso!")
elif resp == 7:
    print("Cadastrar placa de novo veículo: ")
    nova_placa = input("Digite a placa do novo veículo: ")
    print(" ")
    print("Nova placa cadastrada: ", nova_placa)
    print("Placa cadastrada com sucesso!")
elif resp == 8:
    print("FINALIZANDO O SISTEMA...")
    for cont in range(10, -1, -1):
        print(cont, end=' ')
        sleep(1)
    print(" ")
    print("Sistema finalizado com sucesso!")
else:
    print("OPÇÃO INVÁLIDA...")
    print(" ")
    print("Por favor, escolha uma opção de 1 a 8.")