import sys
from PyQt4.QtCore import *
from PyQt4.QtGui import *

class MainForm(QDialog):

    def __init__(self,parent=None):
        super(MainForm,self).__init__(parent)

        self.treeWidget = QTreeWidget()

        vbox = QVBoxLayout()        
        vbox.addWidget(self.treeWidget)

        self.setLayout(vbox)

        self._initTree()
        self.connect(self.treeWidget,
                SIGNAL("currentItemChanged(QTreeWidgetItem *,QTreeWidgetItem *)"),
                self.treeItemSelectedChanged)
        
    def _initTree(self):
        self.treeWidget.setColumnCount(2)
        self.treeWidget.setHeaderLabels(["Name","Age"])
        for i in range(10):
            _parent = QTreeWidgetItem(self.treeWidget,[str(i),str(0)])
            for j in range(i):
                _item = QTreeWidgetItem(_parent,[str(i) + "-" + str(j),str(j)])
                print(i,"---",j)

            self.treeWidget.expandItem(_parent)                 #展开父节点
        self.treeWidget.resizeColumnToContents(0)               #调整列宽适应内容


    def treeItemSelectedChanged(self,item1,item2):
        print(item1,"--1___2--",item2)
        print(item1.text(0),"--1___2--")
        


        


app = QApplication(sys.argv)
form = MainForm()
form.show()
app.exec_()  
        
