#Create a program that takes two user input lists and 
#returns a new list containing the common elements between the two.

list_first = []
list_second=[]

def commonList(firstList,secondList):
    common_List = []
    if len(firstList) > len(secondList):
        for item in secondList:
            if item in firstList:
                common_List.append(item)
    else:
        for item in firstList:
            if item in secondList:
                common_List.append(item)
    return common_List

print("This program will print new list containing the common elements between the two lists you entered")
print("Let's create a FIRST LIST")
str1 = int(input("Please input how many elements are in the first list: "))
for x in range(str1):
    ele1 = input("Please input the element: ")
    list_first.append(ele1)
str2 = int(input("Please input how many elements are in the second list: "))
for x in range(str2):
    ele2 = input("Please input the element: ")
    list_second.append(ele2)

print("Here are the common list between the two LIST: \t" + str(commonList(list_first,list_second)))
