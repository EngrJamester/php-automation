import MySQLdb
import Adafruit_DHT
import time as sleep
import RPi.GPIO as GPIO

fan1 = 7
fan2 = 20
fan3 = 16

counter = 0

GPIO.setmode(GPIO.BCM) # Broadcom pin-numbering scheme
GPIO.setwarnings(False)
GPIO.setup(fan1, GPIO.OUT) # Fan1 -> Relay 1
GPIO.setup(fan2, GPIO.OUT) # Fan2 -> Relay 2
GPIO.setup(fan3, GPIO.OUT) # Fan3 -> Relay 3

GPIO.output(fan1, GPIO.HIGH) #off
GPIO.output(fan2, GPIO.HIGH) #off
GPIO.output(fan3, GPIO.HIGH) #off


con = MySQLdb.connect('localhost','root','root','db_permentation')
cursor = con.cursor(MySQLdb.cursors.DictCursor)

def checkSensor():
    
    humidity1,temperature1 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 14)
    humidity2,temperature2 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 15)
    humidity3,temperature3 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 18)
    humidity4,temperature4 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 23)
    humidity5,temperature5 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 24)
    humidity6,temperature6 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 25)
    humidity7,temperature7 = Adafruit_DHT.read_retry(Adafruit_DHT.DHT11, 8)
    

    humidity1 = round(humidity1,2)
    temperature1 = round(temperature1,2)

    humidity2 = round(humidity2,2)
    temperature2 = round(temperature2,2)

    humidity3 = round(humidity3,2)
    temperature3 = round(temperature3,2)

    humidity4 = round(humidity4,2)
    temperature4 = round(temperature4,2)

    humidity5 = round(humidity5,2)
    temperature5 = round(temperature5,2)

    humidity6 = round(humidity6,2)
    temperature6 = round(temperature6,2)

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
        cursor.execute("Update controllers set temperature ='" + str(temperature1) + "' , humidity = '"+ str(humidity1) +"' where id = 1")
        cursor.execute("Update controllers set temperature ='" + str(temperature2) + "' , humidity = '"+ str(humidity2) +"' where id = 2")
        cursor.execute("Update controllers set temperature ='" + str(temperature3) + "' , humidity = '"+ str(humidity3) +"' where id = 3")
        cursor.execute("Update controllers set temperature ='" + str(temperature4) + "' , humidity = '"+ str(humidity4) +"' where id = 4")
        cursor.execute("Update controllers set temperature ='" + str(temperature5) + "' , humidity = '"+ str(humidity5) +"' where id = 5")
        cursor.execute("Update controllers set temperature ='" + str(temperature6) + "' , humidity = '"+ str(humidity6) +"' where id = 6")
        cursor.execute("Update controllers set temperature ='" + str(temperature7) + "' , humidity = '"+ str(humidity7) +"' where id = 7")
        con.commit()
        print 'Updated'
    else :
        cursor.execute("Insert into controllers values ('"+ str(averagetemperature) +"', '"+ str(averagehumidity) +"')")
        con.commit()
        print 'Inserted'


    cursor.execute("SELECT threshold,temperature,name,id from controllers")
    res = cursor.fetchall()
    for row in res:
        thold =  row['threshold']
        temp = row['temperature']
        name = row['name']
        cid = row['id']
        
        ##print str(name) + '->' + str(temp) + '->' + str(thold)
        
        if (float(temp) >= float(thold)) :
            print str(name) + ' Exceeds the threshold'
            if name == 'controller1' or name == 'controller2' :
                GPIO.output(fan1, GPIO.LOW) #on
                print 'Relay ' + str(cid) + ' is On'
            if name == 'controller3' or name == 'controller4' :
                GPIO.output(fan2, GPIO.LOW) #on
                print 'Relay ' + str(cid) + ' is On'
            if name == 'controller5' or name == 'controller6' or name == 'controller7' :
                GPIO.output(fan3, GPIO.LOW) #on
                print 'Relay ' + str(cid) + ' is On'
##            if name == 'controller4' :
##                GPIO.output(fan4, GPIO.LOW) #on
##                print 'Relay ' + str(cid) + ' is On'
##            if name == 'controller5' :
##                GPIO.output(fan5, GPIO.LOW) #on
##                print 'Relay ' + str(cid) + ' is On'
##            if name == 'controller6':
##                GPIO.output(fan6, GPIO.LOW) #on
##                print 'Relay ' + str(cid) + ' is On'
##            if name == 'controller7':
##                GPIO.output(fan7, GPIO.LOW) #on
##                print 'Relay ' + str(cid) + ' is On'            
        else :
            if name == 'controller1' and name == 'controller2' :
                GPIO.output(fan1, GPIO.HIGH) #off
                print 'Relay ' + str(cid) + ' is Off'
            if name == 'controller3' and name == 'controller4' :
                GPIO.output(fan2, GPIO.HIGH) #off
                print 'Relay ' + str(cid) + ' is Off'
            if name == 'controller5' and name == 'controller6' and name == 'controller7' :
                GPIO.output(fan3, GPIO.HIGH) #off
                print 'Relay ' + str(cid) + ' is Off'
##            if name == 'controller4':
##                GPIO.output(fan4, GPIO.HIGH) #off
##                print 'Relay ' + str(cid) + ' is Off'
##            if name == 'controller5':
##                GPIO.output(fan5, GPIO.HIGH) #off
##                print 'Relay ' + str(cid) + ' is Off'
##            if name == 'controller6':
##                GPIO.output(fan6, GPIO.HIGH) #off
##                print 'Relay ' + str(cid) + ' is Off'
##            if name == 'controller7':
##                GPIO.output(fan7, GPIO.HIGH) #off
##                print 'Relay ' + str(cid) + ' is Off'

    cursor.close
    checkSensor()



try:
    checkSensor()
except:
    checkSensor()

