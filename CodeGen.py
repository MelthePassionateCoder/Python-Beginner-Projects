#This code is about code generator where it accepts input from the user, replaces it with another letter and outputs the "encoded message"

from random import shuffle

new_val =""
rand_list = []
val = input("Please input message to be encoded: ")

for ele in val:
    if ele=="a" or ele=="A" or ele=="c" or ele=="C" or ele=="t" or ele=="T":
        if ele=="t" or ele=="A":
            rand_list.append("i")
        else:
            rand_list.append("x")
    elif ele=="b" or ele=="B" or ele=="D" or ele=="D" or ele=="s" or ele=="S":
        rand_list.append("5")
    elif ele=="e" or ele=="E" or ele=="Z" or ele=="z" or ele=="l" or ele=="L":
        if ele=="l" or ele=="L":
            rand_list.append("6")
        else:
            rand_list.append("3")
    elif ele=="x" or ele=="X" or ele=="f" or ele=="F" or ele=="m" or ele=="M":
        if ele=="m" or ele=="M":
            rand_list.append("i")
        else:
            rand_list.append("p")
    elif ele=="y" or ele=="Y" or ele=="g" or ele=="G" or ele=="n" or ele=="N":
        if ele=="n" or ele=="N":
            rand_list.append("g")
        else:
            rand_list.append("T")
    elif ele=="H" or ele=="h" or ele=="w" or ele=="W" or ele=="r" or ele=="R":
        if ele=="r" or ele=="R":
            rand_list.append("q")
        else:
            rand_list.append("1")
    elif ele=="I" or ele=="i" or ele=="v" or ele=="V" or ele=="o" or ele=="O":
        if ele=="o" or ele=="O":
            rand_list.append("v")
        else:
            rand_list.append("r")
    elif ele=="j" or ele=="J" or ele=="u" or ele=="U" or ele=="p" or ele=="P":
        if ele=="p" or ele=="P":
            rand_list.append("9")
        else:
            rand_list.append("e")
    else:
        if ele=="q" or ele=="Q":
            rand_list.append("s")
        elif ele==" ":
            continue
        else:
            rand_list.append(ele)
        
for elem in rand_list:
    new_val = new_val + elem

print("The encoded message is:" +new_val)

