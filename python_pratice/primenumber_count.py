def contador(vezes):
    key = True
    limite = 2
    lista = []
    for number in range(vezes):
        key = True
        while key == True:
            global verify
            for cont in range(2, limite):
                if limite%cont == 0:
                    global verify
                    verify = cont
                    break
                cont+=1
                if cont==limite:
                    global verify
                    verify = cont
                    break
            if limite % verify == 0:
                limite+=1
            elif verify == limite:
                limite+=1
                lista.append(cont)
                key = False
    print(lista)
                







x = int(input(" Digite a quantidade de número primo que deseja: "))
print(contador(x))