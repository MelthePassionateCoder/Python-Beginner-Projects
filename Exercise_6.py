#Write a Python function that accepts an array of integers and a target integer, and returns the index of the target integer in the 
#array using linear search. If the target integer is not in the array, the function should return -1.

array_list = []
def linearray(arrayList, key_Value, length_Arr):
    if length_Arr < 3:
        print("Please add at least three elements.")

    for i in arrayList:
        if i==key_Value:
            result = "The element " + str(key_Value) + " is found in index " + str(arrayList.index(i))+ " of your array."
            return result
    return -1

user = input("Please input how many elements of integers are in array: ")

for i in range(0, int(user)):
    userElements = int(input("Please input element: "))
    array_list.append(userElements)

key_Value = int(input("Please input a target integer to find in array using Linear Search: "))
length_arr = len(array_list)
print(linearray(array_list, key_Value, length_arr))
