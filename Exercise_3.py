#Develop a program that takes a user input string and outputs the string in reverse order.'

def reverseString(string1):
    result= "\n\nThe reverse string of your input '" + str1 + "' is '" + string1[::-1] +"'."
    return result

print("This is a program that will reverse your input string")
str1 = input("Please input your string: ")
print(reverseString(str1))
str2 = int(input("\nWould you like to try again? Press 1 if yes or 2 if no:  "))

while str2==1:
    str1 = input("Please input your string: ")
    print(reverseString(str1))
    str2 = int(input("\nWould you like to try again? Press 1 if yes or 2 if no:  "))




    

