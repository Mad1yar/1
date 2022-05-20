from colorama import init
from colorama import Fore, Back, Style
init()

print (Fore.BLACK)
print( Back.GREEN)
num = input("Что делаем:(+, -, *, /, %):")


print (Back.CYAN)
a = float(input("Введите первое число: "))
b = float(input("Введите второе число: "))

print (Back.YELLOW)
if num == "+":
    c = a + b
    print("Результат:"+str(c))

elif num == "-":
    c = a - b
    print("Результат:"+str(c))

elif num == "*":
    c = a * b
    print("Результат:"+str(c))

elif num == "/":
    c = a / b
    print("Результат:"+str(c))

elif num == "%":
    c = a % b
    print("Результат:"+str(c))

else:
    print ("Выбрана неверная операция")

input()