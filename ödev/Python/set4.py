liste = []
for dongu in range(5):
    liste.append(int(input("Listeye Eklenecek elemanı Giriniz: ")))

print("olusturulan liste  : ",liste)

b=0
for num in liste:

    if num % 2 != 0:

        if num > b :
            b=num

print(" listedeki en büyük tek sayı : ",b)