import serial
#import urllib2
#urllib2.urlopen("http://example.com/foo/bar").read()

import urllib.request



portnumber = input('Enter port number: ')
ser = serial.Serial('COM'+portnumber, 9600, timeout=0)
 
print("connected to: " + ser.portstr)
theline=""
while True:
    for line in ser.read():
            if line!=13 and line!=10:
                line = chr(line)
                theline=theline+line
            else:
                print(theline.rstrip())
                urllib.request.urlopen("http://arman.com/iot/sendme.php?userid=222&value="+theline.rstrip()).read()
                theline=""



ser.close()


