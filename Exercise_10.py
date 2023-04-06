#Exercise: Matrix Traversal using Recursion
#In this exercise, you will write a Python function that recursively traverses a matrix of integers and 
#returns the sum of all its elements. You will start at the top-left corner of the matrix and move either 
#to the right or down, until you reach the bottom-right corner of the matrix. You may only move to the right or down, not up or left.

arr = []
rows = int(input("Enter the number of rows:"))
cols = int(input("Enter the number of columns:"))
def traverse(arr,i,j):
    if i == rows - 1 and j == cols - 1:
        print(arr[i][j])
        return
    print(arr[i][j], end=", ")
    if j < cols - 1:
        traverse(arr, i, j + 1)
    elif i < rows - 1:
        traverse(arr, i + 1, 0)
    
print("Enter the entries rowwise:")
for i in range(rows):         
    a =[]
    for j in range(cols):      
         a.append(int(input()))
    arr.append(a)
traverse(arr,0,0) 
