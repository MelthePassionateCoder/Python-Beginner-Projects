#Exercise: Finding an Item in a Sorted List
#Suppose you work for an e-commerce company and you need to implement a search function that allows users to quickly 
#find products by their name. The company has a large list of products that is sorted alphabetically, so you want to use the 
#binary search algorithm to improve the efficiency of the search.
#Write a Python function that accepts a list of product names and a target product name, and returns the index of the target 
#product in the list. If the target product is not in the list, the function should return -1.

product = []
product_ = []
def binarySearch_product(arrProduct, target,low,high):
    mid = int((low + high)/2)
    if low!=high:
        if(target==arrProduct[mid]):
            return mid
        elif target > arrProduct[mid]:
            return binarySearch_product(product,target,mid + 1, high)
        else:
            return binarySearch_product(product,target,low, mid - 1)
    else:
        result = "The element " +target+ " found in index " +str(mid)+ " in your array " +str(arrProduct)
        return result

userInt = int(input("Please input how many elements you have for your array: "))
for i in range(userInt):
    elemProduct = input("Please input the name of the product: ")
    product_.append(elemProduct)
targetValue = input("Please input element that we are trying to find: ")
product = sorted(product_)
low = 0
high = len(product)
print(binarySearch_product(product,targetValue,low,high))


