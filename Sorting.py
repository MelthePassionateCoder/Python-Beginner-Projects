#Given a list, can you write some code that sorts it alphabetically, or numerically? 
#Yes, Python has this functionality built-in, but see if you can do it without using sort()!
list_ = []
sorted_list = []
num_ = int(input("Please input the total # of list elements: "))
for ele in range(1, num_+1):
    value = int(input("Please enter the value of %d element: " %ele))
    list_.append(value)

while(list_):
    min = list_[0]
    for ele in list_:
        if ele < min:
            min = ele
    sorted_list.append(min)
    list_.remove(min)

print("Sorted list is: "+str(sorted_list))
