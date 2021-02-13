class okul1:
    okulAdi="Gazi Lisesi"
    okulTur="sayısal-sözel"
    okulKapasitesi=596
    okulCalisanPresonelSayisi=72
    okulVerilenDersler="Matematik,türkçe,fen bilgisi,kimya,fizik"
    okulBasariSirasi=122

    def bilgi(self):
        print(
            " okul adı : {} \n okul türü :  {} \n okul kapasitesi : {} \n okulda calısan personel sayısı : {} \n okulda verilen dersler : {} \n okulun basarı sirası  :  {} ".format(
                gaziLisesi.okulAdi, gaziLisesi.okulTur, gaziLisesi.okulKapasitesi, gaziLisesi.okulCalisanPresonelSayisi,
                gaziLisesi.okulVerilenDersler, gaziLisesi.okulBasariSirasi))


class okul2:
    okulAdi="İstanbul Lisesi"
    okulTur="sayısal"
    okulKapasitesi=1236
    okulCalisanPresonelSayisi=120
    okulVerilenDersler = "Matematik,türkçe,fen bilgisi,kimya,fizik,biyoloji,tarih,felsefe"
    okulBasariSirasi = 144

class okul3:
    okulAdi="Google Lisesi"
    okulTur="Teknoloji / Yazılım"
    okulKapasitesi=415
    okulCalisanPresonelSayisi=36
    okulVerilenDersler = "Bilisim Teknolojileri,Sql Programlama, İnternet Programlama,java,c#,php,C,C++"
    okulBasariSirasi = 88


gaziLisesi=okul1()
istanbullisesi=okul2()
googlelisesi=okul3()

gaziLisesi.bilgi()

