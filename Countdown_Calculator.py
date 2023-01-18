#This program takes two dates as input, and calculate the amount of time between them.
#https://www.dataquest.io/blog/python-projects-for-beginners/?fbclid=IwAR2F7gAy5wHjmwA64zSZAqqPDAO7o37mozi8yvrd-AE90B0eZx-6x60Xtkg

import datetime


result_val=0
print("Please input the dates in this format: DD/MM/YYYY")
val1=input("Input the first date: ")  
val2=input("Input the second date: ")
firstDate = datetime.datetime.strptime(val1,"%d/%m/%Y").date()
secondDate = datetime.datetime.strptime(val2,"%d/%m/%Y").date()
result_ = firstDate - secondDate
conv_unit = input("Please choose the unit of the time. Type\n 'm' if minute \n 's' if seconds \n 'd' if days\ninput:")
if conv_unit=="m":
    result_val = result_.days * 24 * 60
elif conv_unit=="s":
    result_val= result_.days * 24 * 60 * 60
elif conv_unit=="d":
    result_val=result_.days
else:
    print("Please choose the correct option.")
numbers= "{:,}".format(result_val)

print(f"The amount of time between the the date " +str(val1)+ " and date " +str(val2)+ " is " +str(numbers)+ " "  +conv_unit)


