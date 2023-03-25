#Write a program that asks the user for their age and outputs a 
#message based on whether they are old enough to vote or not.

def ageVote(age):
    if age >= 18:
        print("Congrats! You are old enough to VOTE!")
    elif age < 18:
        print("Sorry! But you can't vote yet.")
    else:
        print("PLEASE INPUT NUMBERS ONLY!")

str1 = int(input("Please input your age to see if you are old enough to vote or not: "))
ageVote(str1)