#Build a program that uses a loop to print out the first n Fibonacci numbers, where n is a user input.

def fibonnaci(numbers):
    i=0
    calculation = 0 
    list_fibonnaci = [0]
    while(i<numbers):
        if len(list_fibonnaci) > 1: 
            calculation = list_fibonnaci[-1] + list_fibonnaci[-2]
        else:
            calculation = list_fibonnaci[-1] + 1
        list_fibonnaci.append(calculation)
        i += 1
    return list_fibonnaci
        
print("This is a program to print out the Fibonnaci numbers based on your input.")
userInput = int(input("Please input number: "))
print(fibonnaci(userInput))