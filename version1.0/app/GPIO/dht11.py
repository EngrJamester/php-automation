import MySQLdb
import Adafruit_DHT
import time

con = MySQLdb.connect('localhost','root','root','db_permentation')
cursor = con.cursor()

counter = 0

while True:
    
    
    humidity1,temperature1 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 17)
    humidity2,temperature2 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 17)
    humidity3,temperature3 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 17)
    humidity4,temperature4 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 17)
    humidity5,temperature5 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 17)
    humidity6,temperature6 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 17)
    humidity7,temperature7 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 4)
    

    humidity1 = round(humidity2,2)
    temperature1 = round(temperature2,2)

    humidity2 = round(humidity2,2)
    temperature2 = round(temperature2,2)

    humidity3 = round(humidity2,2)
    temperature3 = round(temperature2,2)

    humidity4 = round(humidity2,2)
    temperature4 = round(temperature2,2)

    humidity5 = round(humidity2,2)
    temperature5 = round(temperature2,2)

    humidity6 = round(humidity2,2)
    temperature6 = round(temperature2,2)

    humidity7 = round(humidity7,2)
    temperature7 = round(temperature7,2)

    print "h1:" + str(humidity1) + " t1:" + str(temperature1)
    print "h2:" + str(humidity2) + " t2:" + str(temperature2)
    print "h3:" + str(humidity3) + " t3:" + str(temperature3)
    print "h4:" + str(humidity4) + " t4:" + str(temperature4)
    print "h5:" + str(humidity5) + " t5:" + str(temperature5)
    print "h6:" + str(humidity6) + " t6:" + str(temperature6)
    print "h7:" + str(humidity7) + " t7:" + str(temperature7)
    
    
    cursor.execute("SELECT * from controllers")
    row = cursor.fetchall()
    
    if cursor.rowcount > 0:
        i = 0
        while i <= 7
        i += 1
        continue
        cursor.execute("Update controllers set temperature = '" + str(temperature+""+i) + "' , humidity = '"+ str(humidity+""+i) +"' where id='"+ i +"'")
        con.commit()
        print 'Updated'
    else :
        # cursor.execute("Insert into controllers values ('"+ str(averagetemperature) +"', '"+ str(averagehumidity) +"')")
        # con.commit()
        # print 'Inserted'