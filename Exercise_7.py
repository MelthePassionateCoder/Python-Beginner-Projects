#Write a Python function that accepts an array of integers and a target integer, 
#and returns the index of the target integer in the array using the sentinel linear search algorithm. 
#If the target integer is not in the array, the function should return -1.

array_ = []
def sentinelSearch(arrayList,targetValue):
    i = 0
    last_elem = targetValue
    while(targetValue!=arrayList[i]):
        i+=1
    if((i<arrayList[len(arrayList) - 1]) or (arrayList[i]==targetValue)):
        result = str(targetValue) + " is located at index " + str(i) + " of your array."
        return result
    else:
        return -1

user1 = int(input("Input how many elements are in your array: "))
for i in range(user1):
    elem = int(input("Input element(integer): "))
    array_.append(elem)
target_val = int(input("Input the target value to look for your array: "))
print(sentinelSearch(array_, target_val))
