for s in range(101):

    if s %3==0 and s%5==0:
        print("FizzBuzz ")

    elif s % 3==0:
        print("Fizz")

    elif s % 5==0:
            print("Buzz")
    else:
        print(s)