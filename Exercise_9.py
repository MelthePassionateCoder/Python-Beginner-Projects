#Exercise: Implementing Ternary Search in a Sorted List
#You work for a financial company that manages a large database of stock prices. 
#You need to implement a function that searches for a target value in a sorted list of stock prices using the ternary search algorithm.
#=======
#Write a Python function that accepts a sorted list of stock prices and a target value, 
#and returns the index of the target value in the list, or -1 if the target value is not found. 
#You should use the ternary search algorithm to perform the search.

stockPrices_arr = []
def ternary_search_stockPrices(l,h,key,arr):
    sorted_arr = sorted(arr)
    if (h >= l):
        mid1 = l + (h - l) //3
        mid2 = h - (h - l) //3
        if (key==sorted_arr[mid1]):
            return mid1
        elif (key==sorted_arr[mid2]):
            return mid2
        elif (key < sorted_arr[mid1]):
            return ternary_search_stockPrices(l,mid1-1,key,arr)
        elif (key > sorted_arr[mid2]):
            return ternary_search_stockPrices(mid2+1,h,key,arr)
        else:
            return ternary_search_stockPrices(mid1+1,mid2-1,key,arr)
    return -1


userEle = int(input("Please input how many stock prices in your list: "))
for i in range(userEle):
    stockPrices = float(input("Please input stock price: "))
    stockPrices_arr.append(stockPrices)
targetValue = float(input("Please input the target value to look in your list: "))

low = 0
high = len(stockPrices_arr)
result = ternary_search_stockPrices(low,high,targetValue,stockPrices_arr)
print("The " +str(targetValue)+ " is found in index " +str(result) + " of your array list " +str(sorted(stockPrices_arr)))


