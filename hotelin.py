#fungsi garis
def garis():
    print("==========================================================")

garis()
print('Hari     | Superior       | Deluxe         | Premium')
print('1-2 Hari | 100.000/night  | 150.000/night  | 200.000/night')
print('3-4 Hari | 90.000/night   | 135.000/night  | 180.000/night')
print('>5 Hari  | 80.000/night   | 120.000/night  | 160.000/night')
garis()

#input
tipe_kamar = input ("Masukkan tipe kamar  :")
lama_inap = int(input("Masukkan lama inap  :"))

#Kalkulasi
if (tipe_kamar =='superior' or tipe_kamar =='Superior'):
    harga_kamar = 100000
    if lama_inap <= 2 :
        harga_kamar = 100000*lama_inap
    elif lama_inap <= 4 :
        harga_kamar = 90000*lama_inap
    elif lama_inap >= 5:
        harga_kamar = 100000*lama_inap
elif (tipe_kamar =='deluxe' or tipe_kamar =='Deluxe'):
    harga_kamar = 100000
    if lama_inap <= 2 :
        harga_kamar = 150000*lama_inap
    elif lama_inap <= 4 :
        harga_kamar = 135000*lama_inap
    elif lama_inap >= 5:
        harga_kamar = 120000*lama_inap
elif (tipe_kamar =='premium' or tipe_kamar =='Premium'):
    harga_kamar = 100000
    if lama_inap <= 2 :
        harga_kamar = 200000*lama_inap
    elif lama_inap <= 4 :
        harga_kamar = 180000*lama_inap
    elif lama_inap >= 5:
        harga_kamar = 160000*lama_inap

garis()
print("Kamar yang anda pilih    :", tipe_kamar)
print("Lama menginap    :", lama_inap, "hari")
print("Total harga yang harus di bayar  : Rp.", harga_kamar)
