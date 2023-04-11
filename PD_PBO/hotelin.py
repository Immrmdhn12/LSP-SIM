def garis():
    print("=============================")

jalan = True
while (jalan == True) :
    garis()
    print('Hari     | Superior       | Deluxe         | Premium')
    print('1-2 Hari | 110.000/night  | 160.000/night  | 210.000/night')
    print('3-4 Hari | 95.000/night   | 145.000/night  | 190.000/night')
    print('>5 Hari  | 85.000/night   | 130.000/night  | 170.000/night')
    garis()

    #input
    nama = input("Masukkaan nama : ")
    print ("Tipe kamar : ",  "\n 1.Superior", "\n 2.Deluxe" "\n 3.Premium")
    tipe_kamar = input("Pilih tipe kamar : ")
    lama_inap = int(input("Lama Menginap : "))
    garis()
    #logika
    
    if (tipe_kamar =='1'):
        tipe_kamar = 'Superior'
        if lama_inap <= 2 :
            harga_kamar = 110000
            total_harga = 110000*lama_inap
        elif lama_inap <= 4 :
            harga_kamar = 95000
            total_harga = 95000*lama_inap
        elif lama_inap >= 5:
            harga_kamar = 85000
            total_harga = 80000*lama_inap
    elif (tipe_kamar =='2'):
        tipe_kamar = 'Deluxe'
        if lama_inap <= 2 :
            harga_kamar = 160000
            total_harga = 160000*lama_inap
        elif lama_inap <= 4 :
            harga_kamar = 145000
            total_harga = 145000*lama_inap
        elif lama_inap >= 5:
            harga_kamar = 130000
            total_harga = 130000*lama_inap
    elif (tipe_kamar =='3'):
        tipe_kamar = 'Premium'
        if lama_inap <= 2 :
            harga_kamar = 210000
            total_harga = 210000*lama_inap
        elif lama_inap <= 4 :
            harga_kamar = 190000
            total_harga = 190000*lama_inap
        elif lama_inap >= 5:
            harga_kamar = 170000
            total_harga = 170000*lama_inap

    #output
    print("Nama : ", nama)
    print("Tipe kamar : ", tipe_kamar)
    print("Harga penginapan   :", harga_kamar)
    print("Lama menginap : ", lama_inap, "hari")
    print("Total Pembayaran : ", total_harga)
    l = input("Ingin memesan lagi? (y/n) :")
    if (l == 'n' ) :
        jalan = False