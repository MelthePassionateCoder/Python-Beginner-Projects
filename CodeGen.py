#This code is about code generator where it accepts input from the user, replaces it with another letter and outputs the "encoded message"

from random import shuffle

rand_list = []
val = input("Please input message to be encoded: ")
new_val = []

for ele in val:
    rand_list.append(ele)
    #print(rand_list)
    for elem in rand_list:
        new_val= elem.replace(elem,"ilove",1)
        

#print(new_val)

