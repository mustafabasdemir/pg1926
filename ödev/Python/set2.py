def mailKontrol(mail,uzanti):
    karar = 0
    for dongu in mail:
        if dongu == '@':
            if uzanti<=3:
              karar = karar + 1

    if karar == 1:
        return True
    else:
        return False

uzantim = (int(input("Uzantı Uzunluğu Giir: ")))
mail = input('Mail Adresini Gir : ')
if (mailKontrol(mail,uzantim) == True):
    print('Mail adresiniz doğrudur.')
else:
    print('Mail adresiniz yanlıştır.')