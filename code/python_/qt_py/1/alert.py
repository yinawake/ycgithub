import sys
import time
from PyQt4.QtCore import *
from PyQt4.QtGui import *

app = QApplication(sys.argv)

try:
    due = QTime.currentTime()
    message = "Alert!"
    if len(sys.argv) < 2 :
        raise ValueError
    hours, mins = sys.argv[1].split(":")
    due = QTime(int(hours), int(mins))
    if not due.isValid():
        raise ValueError
    if len(sys.argv) > 2:
        message = " ".join(sys.argv[2:])
except ValueError:
    message = "Usage :alert .py HH:MM"
    
while QTime.currentTime() < due:
    time.sleep(20)
    
label = QLabel("<font color=red size=72> <b>{}</b></font>".format(message))    
label.setWindowFlags(Qt.SplashScreen)
label.show()
QTimer.singleShot(60000, app.quit)
app.exec_()
        
    
    
    
    
    
    
