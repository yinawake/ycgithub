##alert_extra
import sys
import time
from PyQt4.QtCore import *
from PyQt4.QtGui import  *

app = QApplication(sys.argv)

try:
    due = QTime.currentTime()
    message = "Alert!"
    if len(sys.argv) < 2:
        raise ValueError
    hours, mins = sys.argv[1].split(":")
    due = QTime(int(hours), int(mins))
    
    if due.isValid():
        raise ValueError
    if len(sys.argv) >2:
        message = " ".join(sys.argv[2:])
except ValueError:
    message = "Usage :xxxx HH:MM  MES"
    
while QTime.currentTime() < due:
        time.sleep(20)

font = QFont("Helvetica", 36, QFont.Bold)
fm = QFontMetrics(font)
pixmap = QPixmap(fm.width(message)+5, fm.height()+5)
pixmap.fill(Qt.white)

painter = QPainter(pixmap)
document = QTextDocument()
document.setDefaultFont(font)
document.setHtml("<font color=red>{}</font>".format(message))
document.drawContents(painter)
painter.end()

label = QLabel()
label.setPixmap(pixmap)
label.setMask(pixmap.createMaskFromColor(Qt.white))
label.setWindowFlags(Qt.SplashScreen | Qt.FramelessWindowHint)
label.show()
QTimer.singleShot(60000, app.quit)
app.exec_()

