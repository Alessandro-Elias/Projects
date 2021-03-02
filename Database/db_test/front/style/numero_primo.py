#teste se o número é primo.

def nigga(num):
    contador = num % 2
    number = num-1

    if contador==0:
        print("o número {} não é primo".format(num))
    else:
        for cont in range(number) :
            if cont>1:
                if num%cont == 0:
                    break
            cont=cont+1
            if cont == number:
                break
        if(num%cont ==0):
            return("O número {} não é primo".format(num))
        
        elif cont == number:
                    return("O número {} é primo".format(num))
            
x = int(input("DIGITE UM NÚMERO INTEIRO: "))
print(nigga(x))