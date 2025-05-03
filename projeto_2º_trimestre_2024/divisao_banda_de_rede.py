Link_Tot = int(input("Qual é a velocidade total do link? "))
print(f"O link contratado é de {Link_Tot} Mbps.")

Link_Com = int(input("Qual é a velocidade necessária para o setor comercial? "))
print(f"O setor comercial vai precisar de uma velocidade de {Link_Com} Mbps.")
Link_Res = Link_Tot - Link_Com
print(f"Ainda temos {Link_Res} Mbps para serem utilizados.")

Link_Fin = int(input("Qual é a velocidade necessária para o setor financeiro? "))
print(f"O setor financeiro vai precisar de uma velocidade de {Link_Fin} Mbps.")
Link_Res = Link_Tot - Link_Com - Link_Fin
print(f"Ainda temos {Link_Res} Mbps para serem utilizados.")

Link_Sup = int(input("Qual é a velocidade necessária para o suporte técnico? "))
print(f"O suporte técnico vai precisar de uma velocidade de {Link_Sup} Mbps.")
Link_Res = Link_Tot - Link_Com - Link_Fin - Link_Sup
print(f"Ainda temos {Link_Res} Mbps para serem utilizados.")