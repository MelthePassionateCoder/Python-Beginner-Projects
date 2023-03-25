#Create a simple command-line calculator that takes user inputs and performs basic arithmetic operations.

def arithmeticOp(chOperator):
    if chOperator == 1:
        str1 = int(input("Please input first number: "))
        str2 = int(input("Please input second number: "))
        result_ = str1 + str2 
        print("The sum of " + str(str1) + " and " + str(str2) + " is " + str(result_) )
    elif chOperator == 2:
        str1 = int(input("Please input minuend number: "))
        str2 = int(input("Please input subtrahend number: "))
        result_ = str1 - str2 
        print("The difference of " + str(str1) + " and " + str(str2) + " is " + str(result_) )
    elif chOperator == 3:
        str1 = int(input("Please input first number: "))
        str2 = int(input("Please input second number: "))
        result_ = str1 * str2 
        print("The product of " + str(str1) + " and " + str(str2) + " is " + str(result_) )
    elif chOperator == 4:
        str1 = int(input("Please input dividend number: "))
        str2 = int(input("Please input divisor number: "))
        result_ = str1 / str2 
        print("The quotient of " + str(str1) + " and " + str(str2) + " is " + str(result_) )
    else:
        print("Please choose only between 1-4.")
     

print("""Press '1' if ADDITION
        Press '2' if SUBTRACTION
        Press '3' if MULTIPLICATION
        Press '4' if DIVISION""")
choice_1 = int(input("Please choose one:"))
result = arithmeticOp(choice_1)