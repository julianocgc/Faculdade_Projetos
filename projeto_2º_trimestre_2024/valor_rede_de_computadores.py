Qtd_Comp = int(input("Quantos computadores serão necessários? "))
Qtd_Rote = int(input("Quantos roteadores serão necessários? "))
Qtd_Swit = int(input("Quantos switches serão necessários? "))
Val_Comp = float(input("Qual é o valor do computador? "))
Val_Rote = float(input("Qual é o valor do roteador? "))
Val_Swit = float(input("Qual é o valor do switch? "))
Tot_Comp = Qtd_Comp * Val_Comp
Tot_Rote = Qtd_Rote * Val_Rote
Tot_Swit = Qtd_Swit * Val_Swit

print(f"Serão necessários {Qtd_Comp} computadores.")
print(f"Serão necessários {Qtd_Rote} roteadores.")
print(f"Serão necessários {Qtd_Swit} switches.")
print(f"O valor necessário para comprar os computadores será R$ {Tot_Comp}.")
print(f"O valor necessário para comprar os roteadores será R$ {Tot_Rote}.")
print(f"O valor necessário para comprar os switches será R$ {Tot_Swit}.")